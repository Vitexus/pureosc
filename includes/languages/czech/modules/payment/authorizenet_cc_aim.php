<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_TITLE', 'Authorize.net Advanced Integration Method (AIM)',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_PUBLIC_TITLE', 'Credit Card',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_DESCRIPTION', '<img src="images/icon_info.gif" border="0" />&nbsp;<a href="http://library.oscommerce.com/Package&en&authorizenet&oscom23&aim" target="_blank" style="text-decoration: underline; font-weight: bold;">View Online Documentation</a><br /><br /><img src="images/icon_popup.gif" border="0">&nbsp;<a href="http://reseller.authorize.net/application/?id=5559280" target="_blank" style="text-decoration: underline; font-weight: bold;">Visit Authorize.net Website</a>&nbsp;<a href="javascript:toggleDivBlock(\'anetInfo\',true);">(info)</a><span id="anetInfo" style="display: none;"><br /><i>Using the above link to signup at Authorize.net grants osCommerce a small financial bonus for referring a customer.</i></span>',true);

  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_ERROR_ADMIN_CURL', 'This module requires cURL to be enabled in PHP and will not load until it has been enabled on this webserver.',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_ERROR_ADMIN_CONFIGURATION', 'This module will not load until the API Login ID and API Transaction Key parameters have been configured. Please edit and configure the settings of this module.',true);

  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_CREDIT_CARD_OWNER_FIRSTNAME', 'Card Owner First Name:',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_CREDIT_CARD_OWNER_LASTNAME', 'Card Owner Last Name:',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_CREDIT_CARD_NUMBER', 'Card Number:',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_CREDIT_CARD_EXPIRES', 'Card Expiry Date:',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_CREDIT_CARD_CCV', 'Card Code Number (CCV):',true);

  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_AVS_A', 'Address (Street) matches, ZIP does not',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_AVS_B', 'Address information not provided for AVS check',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_AVS_E', 'AVS error',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_AVS_G', 'Non-U.S. Card Issuing Bank',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_AVS_N', 'No Match on Address (Street) or ZIP',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_AVS_P', 'AVS not applicable for this transaction',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_AVS_R', 'Retry – System unavailable or timed out',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_AVS_S', 'Service not supported by issuer',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_AVS_U', 'Address information is unavailable',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_AVS_W', 'Nine digit ZIP matches, Address (Street) does not',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_AVS_X', 'Address (Street) and nine digit ZIP match',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_AVS_Y', 'Address (Street) and five digit ZIP match',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_AVS_Z', 'Five digit ZIP matches, Address (Street) does not',true);

  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_CVV2_M', 'Match',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_CVV2_N', 'No Match',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_CVV2_P', 'Not Processed',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_CVV2_S', 'Should have been present',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_CVV2_U', 'Issuer unable to process request',true);

  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_CAVV_0', 'CAVV not validated because erroneous data was submitted',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_CAVV_1', 'CAVV failed validation',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_CAVV_2', 'CAVV passed validation',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_CAVV_3', 'CAVV validation could not be performed; issuer attempt incomplete',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_CAVV_4', 'CAVV validation could not be performed; issuer system error',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_CAVV_5', 'Reserved for future use',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_CAVV_6', 'Reserved for future use',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_CAVV_7', 'CAVV attempt – failed validation – issuer available (U.S.-issued card/non-U.S. acquirer)',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_CAVV_8', 'CAVV attempt – passed validation – issuer available (U.S.-issued card/non-U.S. acquirer)',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_CAVV_9', 'CAVV attempt – failed validation – issuer unavailable (U.S.-issued card/non-U.S. acquirer)',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_CAVV_A', 'CAVV attempt – passed validation – issuerunavailable (U.S.-issued card/non-U.S. acquirer)',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_TEXT_CAVV_B', 'CAVV passed validation, information only, no liability shift',true);

  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_ERROR_TITLE', 'There has been an error processing your credit card',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_ERROR_GENERAL', 'Please try again and if problems persist, please try another payment method.',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_ERROR_DECLINED', 'This credit card transaction has been declined. Please try again and if problems persist, please try another credit card or payment method.',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_ERROR_INVALID_EXP_DATE', 'The credit card expiration date is invalid. Please check the card information and try again.',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_ERROR_EXPIRED', 'The credit card has expired. Please try again with another card or payment method.',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_ERROR_CCV', 'The credit card code number (CCV) is invalid. Please check the card information and try again.',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_ERROR_MERCHANT_ACCOUNT', 'The API Login ID or Transaction Key is invalid or the account is inactive. Please review your module configuration settings and try again.',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_ERROR_CURRENCY', 'The supplied currency code is either invalid, not supported, not allowed for this merchant or doesn\'t have an exchange rate. Please review your currency and module configuration settings and try again.',true);

  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_DIALOG_CONNECTION_LINK_TITLE', 'Test API Server Connection',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_DIALOG_CONNECTION_TITLE', 'API Server Connection Test',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_DIALOG_CONNECTION_GENERAL_TEXT', 'Testing connection to server..',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_DIALOG_CONNECTION_BUTTON_CLOSE', 'Close',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_DIALOG_CONNECTION_TIME', 'Connection Time:',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_DIALOG_CONNECTION_SUCCESS', 'Success!',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_DIALOG_CONNECTION_FAILED', 'Failed! Please review the Verify SSL Certificate settings and try again.',true);
  define('MODULE_PAYMENT_AUTHORIZENET_CC_AIM_DIALOG_CONNECTION_ERROR', 'An error occurred. Please refresh the page, review your settings, and try again.',true);
?>
