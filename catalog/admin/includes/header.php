<?php
namespace PureOSC\Admin;

use Ease\Html\SpanTag;

/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
 */

if ($messageStack->size > 0) {
    echo $messageStack->output();
}
?>

<table border="0" width="100%" cellspacing="0" cellpadding="0">
    <tr style="background-color:  #000; color: #ccffff">
        <td colspan="2"><?php
            echo '<a href="'.tep_href_link(FILENAME_DEFAULT).'">'.tep_image(DIR_WS_IMAGES.'store_logo.png',
                'PureOSC Online Merchant v'.tep_get_version()).'</a>';
            ?></td>
    </tr>
    <tr class="headerBar">
        <td class="headerBarContent">&nbsp;&nbsp;<?php
            echo '<a href="'.tep_href_link(constant('FILENAME_DEFAULT')).'" class="headerLink">'.HEADER_TITLE_ADMINISTRATION.'</a> &nbsp;|&nbsp; <a href="'.tep_catalog_href_link().'" class="headerLink">'.HEADER_TITLE_ONLINE_CATALOG.'</a> &nbsp;|&nbsp; <a href="'.tep_href_link(constant('FILENAME_STATIC_GENERATOR_RESET')).'" class="headerLink">'._('Static generator reset').'</a>';

            if (tep_session_is_registered('admin')) {
                if (defined('USE_FLEXIBEE') && constant('USE_FLEXIBEE') == 'true') {
//                    echo ' | FlexiBee '.new SpanTag(new \FlexiPeeHP\ui\TWB\StatusInfoBox(),
//                        ['style' => 'color: white']);
                }
            }
            ?></td>
        <td class="headerBarContent" align="right"><?php
            echo (tep_session_is_registered('admin') ? 'Logged in as: '.$admin['username'].' (<a href="'.tep_href_link(FILENAME_LOGIN,
                    'action=logoff').'" class="headerLink">Logoff</a>)' : '');
            ?>&nbsp;&nbsp;</td>
    </tr>
</table>