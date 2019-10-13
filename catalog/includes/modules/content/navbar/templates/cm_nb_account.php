<?php
/*
  $Id cm_nb_account.php v1.0.1 20160218 Kymation $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2016 James C Keebaugh

  Released under the GNU General Public License
 */
?>

<!-- Start cm_nb_account -->
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" id="accountmenu" role="button" href="#"><?php
        echo (tep_session_is_registered('customer_id')) ? sprintf('<i class="fa fa-user"></i> %s <span class="caret"></span>',
                $customer_first_name) : '<i class="glyphicon glyphicon-user"></i><span class="hidden-sm"> '._('My Account').'</span> <span class="caret"></span>';
        ?></a>
    <div class="dropdown-menu"aria-labelledby="accountmenu" >

        <?php if (tep_session_is_registered('customer_id')) { ?>
            <a class="dropdown-item" href="<?php echo tep_href_link(FILENAME_LOGOFF, '', 'SSL'); ?>"><i class="fa fa-sign-out"></i> <?php echo _('Log Off'); ?></a>
        <?php } else { ?>
            <a class="dropdown-item" href="<?php echo tep_href_link(FILENAME_LOGIN, '', 'SSL'); ?>"><i class="glyphicon glyphicon-log-in"></i> <?php echo _('Log In'); ?></a>
            <a class="dropdown-item" href="<?php echo tep_href_link(FILENAME_CREATE_ACCOUNT, '', 'SSL');
                ?>"><i class="fa fa-pencil"></i> <?php echo _('Register') ?></a>
               <?php } ?>

        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?php echo tep_href_link(FILENAME_ACCOUNT, '', 'SSL'); ?>"><?php echo _('My Account'); ?></a>
        <a class="dropdown-item" href="<?php echo tep_href_link(FILENAME_ACCOUNT_HISTORY, '', 'SSL'); ?>"><?php echo _('My Orders'); ?></a>
        <a class="dropdown-item" href="<?php echo tep_href_link(FILENAME_ADDRESS_BOOK, '', 'SSL'); ?>"><?php echo _('My Address Book'); ?></a>
        <a class="dropdown-item" href="<?php
            echo tep_href_link(FILENAME_ACCOUNT_PASSWORD, '', 'SSL');
            ?>"><?php echo _('My Password'); ?></a>

    </div>
</li>
<!-- End cm_nb_account -->
