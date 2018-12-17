<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Edited by 2014 Newburns Design and Technology
 * ************************************************
 * *********** New addon definitions **************
 * ***********        Below          **************
 * ************************************************
  Credit Class, Gift Vouchers & Discount Coupons osC2.3.3.4 (CCGV) added -- http://addons.oscommerce.com/info/9020

  Released under the GNU General Public License
 */

require_once('includes/application_top.php');


// if the customer is not logged on, redirect them to the shopping cart page
if (!tep_session_is_registered('customer_id')) {
    tep_redirect(tep_href_link(FILENAME_SHOPPING_CART));
}

$orders_query = tep_db_query("select orders_id from ".TABLE_ORDERS." where customers_id = '".(int) $customer_id."' order by date_purchased desc limit 1");

// redirect to shopping cart page if no orders exist
if (!tep_db_num_rows($orders_query)) {
    tep_redirect(tep_href_link(FILENAME_SHOPPING_CART));
}

$orders = tep_db_fetch_array($orders_query);

$order_id = $orders['orders_id'];



if ($oPage->getRequestValue('RESULTTEXT') == 'OK') {
    require(DIR_WS_CLASSES.'order.php');
    $order = new order($order_id);

    if (defined('USE_FLEXIBEE') && (constant('USE_FLEXIBEE') == 'true')) {

        $invoice = new PureOSC\flexibee\FakturaVydana('ext:orders:'.$order_id);

        switch ($_REQUEST['PRCODE']) {
            case 0:
                $banker = new \FlexiPeeHP\Banka([
                    'id' => 'ext:gp:'.$order_id,
                    'kod' => $order_id,
                    'typDokl' => 'code:STANDARD',
                    'banka' => 'code:GPWEBPAY',
                    'source' => 'duzpUcto',
                    'bezPolozek' => true,
                    'ucetni' => false,
                    'typPohybuK' => 'typPohybu.prijem',
                    'varSym' => $invoice->getDataValue('varSym'),
                    'firma' => 'ext:customers:'.$customer_id,
                    'sumOsv' => $invoice->getDataValue('sumCelkem'),
                    'sumZklCelkem' => $invoice->getDataValue('sumCelkem'),
                    'sumCelkem' => $invoice->getDataValue('sumCelkem'),
                ]);


                if ($banker->sync() && $invoice->sparujPlatbu($banker)) {
                    $invoice->updateToSQL(['id' => $order_id, 'orders_status' => 105]);

                    $invoice2 = new PureOSC\flexibee\FakturaVydana();

                    $convertor = new \FlexiPeeHP\Bricks\Convertor($invoice,
                        $invoice2);
                    $invoice2  = $convertor->conversion();
                    $invoice2->setDataValue('typDokl', 'code:FAKTURA');

                    $invoice2->setDataValue('duzpPuv', new DateTime());
                    $invoice2->setDataValue('duzpUcto', new DateTime());
                    $invoice2->setDataValue('datUcto', new DateTime());

                    if ($invoice2->sync()) {
                        $result = $invoice2->odpocetZalohy($invoice);
                        if ($invoice2->lastResponseCode == 201) {
                            $invoice2->reload();
                            $success = 2;
                            $invoice->addStatusMessage(sprintf(_('Invoice #%s was matched with proforma #%s'),
                                    $invoice2->getRecordIdent(),
                                    $invoice->getRecordIdent()), 'success');
                            $invoice2->insertToFlexiBee(['id' => (string) $invoice2,
                                'stavMailK' => 'stavMail.odeslat']);
                        } else {
                            $success = -1;
                            $invoice->addStatusMessage(sprintf(_('Invoice #%s was not matched with proforma #%s '),
                                    $invoice2->getRecordIdent(),
                                    $invoice->getRecordIdent()), 'error');
                        }
                    } else {
                        //Danovy doklad se nevytvoril
                        $invoice2->addStatusMessage('Invoice create failed',
                            'error');
                    }
                }

                break;

            case 50: // The cardholder canceled the payment
                $invoice->insertToFlexiBee(['id' => $order->getRecordIdent(), 'poznam' => _('The cardholder canceled the payment')]);
                $this->updateToSQL(['id' => $order_id, 'orders_status' => 4]);
                $invoice->performAction('storno');

                break;

            default:
                break;
        }

        $cart->reset(true);
    } else { // No FlexiBee
        switch ($_REQUEST['PRCODE']) {
            case 50: // The cardholder canceled the payment
                $this->updateToSQL(['id' => $order_id, 'orders_status' => 4]);
                break;
        }
    }
}



$page_content = $oscTemplate->getContent('checkout_success');

if (isset($_GET['action']) && ($_GET['action'] == 'update')) {
    tep_redirect(tep_href_link(FILENAME_DEFAULT));
}

require(DIR_WS_LANGUAGES.$language.'/'.FILENAME_CHECKOUT_SUCCESS);

$breadcrumb->add(NAVBAR_TITLE_1);
$breadcrumb->add(NAVBAR_TITLE_2);

require(DIR_WS_INCLUDES.'template_top.php');

if (!isset($_REQUEST['PRCODE']) || ($_REQUEST['PRCODE'] == 0)) {
    ?>

    <div class="page-header">
        <h1><?php echo HEADING_TITLE; ?></h1>
    </div>

    <?php
    echo tep_draw_form('order',
        tep_href_link('checkout_success.php', 'action=update', 'SSL'), 'post',
        'class="form-horizontal" role="form"');
    ?>

    <div class="contentContainer">
        <?php echo $page_content; ?>
        <?php /*         * * Altered for CCGV ** */ ?>
        <?php
        $gv_query  = tep_db_query("select amount from ".TABLE_COUPON_GV_CUSTOMER." where customer_id='".(int) $customer_id."'");
        if ($gv_result = tep_db_fetch_array($gv_query)) {
            if ($gv_result['amount'] > 0) {
                ?>
                <?php
                echo GV_HAS_VOUCHERA;
                echo tep_href_link(FILENAME_GV_SEND);
                echo GV_HAS_VOUCHERB;
                ?>
                <?php
            }
        }

        if (isset($invoice2) && is_object($invoice2)) {
            if (floatval($invoice2->getDataValue('zbyvaUhradit'))) {
                $qrImage = new \Ease\Html\ImgTag($invoice2->getQrCodeBase64(),
                    $invoice2->getRecordIdent());
            }
            $invoiceNum = $invoice2->getRecordID();
        } else {
            if (!isset($invoice)) {
                $invoice = new PureOSC\flexibee\FakturaVydana('ext:orders:'.$order_id);
            }


            if (floatval($invoice->getDataValue('zbyvaUhradit'))) {
                $qrImage = _('QR Payment').' ' . new \Ease\Html\ImgTag($invoice->getQrCodeBase64(),
                    $invoice->getRecordIdent());
            }
            $invoiceNum = $invoice->getRecordID();
        }


        echo '<a class="btn btn-success btn-xs" role="button" href="'.'getpdf.php?evidence=faktura-vydana&id='.$invoiceNum.'&embed=true'.'">'._('PDF Invoice').'</a>';
        echo '<a class="btn btn-success btn-xs" role="button" href="'.'getisdoc.php?evidence=faktura-vydana&id='.$invoiceNum.'&embed=true'.'">'._('ISDOC Invoice').'</a>';

        echo $qrImage.$button.$button2;
    } else {


        echo '<h1>'._('Payment cancelled by card holder').'</h1>';
    }
    ?>




    <?php /*     * * EOF alteration for CCGV ** */ ?>
</div>

<div class="contentContainer">
    <div class="buttonSet">
        <div class="text-right"><?php
    echo tep_draw_button(IMAGE_BUTTON_CONTINUE, 'fa fa-angle-right', null,
        'primary', null, 'btn-success');
    ?></div>
    </div>
</div>

</form>

<?php
require(DIR_WS_INCLUDES.'template_bottom.php');
require(DIR_WS_INCLUDES.'application_bottom.php');

