<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce
  
  Edited by 2014 Newburns Design and Technology
  *************************************************
  ************ New addon definitions **************
  ************        Below          **************
  *************************************************
  Mail Manager added -- http://addons.oscommerce.com/info/9133/v,23

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'Tell A Friend',true);

define('HEADING_TITLE', 'Tell A Friend About \'%s\'',true);

define('FORM_TITLE_CUSTOMER_DETAILS', 'Your Details',true);
define('FORM_TITLE_FRIEND_DETAILS', 'Your Friends Details',true);
define('FORM_TITLE_FRIEND_MESSAGE', 'Your Message',true);

define('FORM_FIELD_CUSTOMER_NAME', 'Your Name',true);
define('FORM_FIELD_CUSTOMER_EMAIL', 'Your E-Mail Address',true);
define('FORM_FIELD_FRIEND_NAME', 'Your Friends Name',true);
define('FORM_FIELD_FRIEND_EMAIL', 'Your Friends E-Mail Address',true);

define('TEXT_EMAIL_SUCCESSFUL_SENT', 'Your email about <strong>%s</strong> has been successfully sent to <strong>%s</strong>.',true);

define('TEXT_EMAIL_SUBJECT', 'Your friend %s has recommended this great product from %s',true);
define('TEXT_EMAIL_INTRO', 'Hi %s!' . "\n\n" . 'Your friend, %s, thought that you would be interested in %s from %s.',true);
define('TEXT_EMAIL_LINK', 'To view the product click on the link below or copy and paste the link into your web browser:' . "\n\n" . '%s',true);
define('TEXT_EMAIL_SIGNATURE', 'Regards,' . "\n\n" . '%s',true);

define('ERROR_TO_NAME', 'Error: Your friends name must not be empty.',true);
define('ERROR_TO_ADDRESS', 'Error: Your friends e-mail address must be a valid e-mail address.',true);
define('ERROR_FROM_NAME', 'Error: Your name must not be empty.',true);
define('ERROR_FROM_ADDRESS', 'Error: Your e-mail address must be a valid e-mail address.',true);
define('ERROR_ACTION_RECORDER', 'Error: An e-mail has already been sent. Please try again in %s minutes.',true);
/*
************************************************************************
************** Custom Filenames can be defined below here **************
**************               Raymond Burns                **************
************************************************************************
*/
// Mail Manager
  define('TEXT_RECOMMEND', 'has recommended',true);
  define('TEXT_FROM', 'from the',true);
?>