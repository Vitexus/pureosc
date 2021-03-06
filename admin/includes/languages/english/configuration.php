<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('TABLE_HEADING_CONFIGURATION_TITLE', 'Title',true);
define('TABLE_HEADING_CONFIGURATION_VALUE', 'Value',true);
define('TABLE_HEADING_ACTION', 'Action',true);

define('TEXT_INFO_EDIT_INTRO', 'Please make any necessary changes',true);
define('TEXT_INFO_DATE_ADDED', 'Date Added:',true);
define('TEXT_INFO_LAST_MODIFIED', 'Last Modified:',true);

//pure:new language dependent configuration titles/descriptions START:

//my store GROUP 1
define('CONFIG_TITLE_SEO_TITLE_LENGHT','META TITLE max. characters', true);
define('CONFIG_DESCRIPTION_SEO_TITLE_LENGHT','Set max chars count for META TITLE (Google display max 70 chars on desktop, on mobile devices max 78 chars). Fixed part TITLE = \'My Store\' is automatically deducted.', true);
define('CONFIG_TITLE_SEO_DESCRIPTION_LENGHT','META DESCRIPTION max chars', true);
define('CONFIG_DESCRIPTION_SEO_DESCRIPTION_LENGHT','Set max chars count for META DESCRIPTION. (Google display max 150-160 chars on desktop, on mobile devices max 110-120 chars.)', true);
define('CONFIG_TITLE_ADD_MANUFACTURER_SEO_TITLE','Add manufacturers name to META TITLE', true);
define('CONFIG_DESCRIPTION_ADD_MANUFACTURER_SEO_TITLE','Add manufacturers name to META TITLE on auto generating title?', true);

//products listing GROUP 8
define('CONFIG_TITLE_PRODUCT_LIST_DISPLAY_SORTBY','Filter Sort by', true);
define('CONFIG_DESCRIPTION_PRODUCT_LIST_DISPLAY_SORTBY','Display Sort by filter', true);
define('CONFIG_TITLE_LISTING_SNIPPET_LENGHT','Snippet description lenght', true);
define('CONFIG_DESCRIPTION_LISTING_SNIPPET_LENGHT','Truncate listing description snippet lenght to a defined number of words.', true);

//Monthly Products Sales Report 
define('CONFIG_TITLE_COMISSION_PERCENTAGE','Comision', true);
define('CONFIG_DESCRIPTION_COMISSION_PERCENTAGE','Set comision percentage for Monthly Sales Products Report  0 = do not display', true);
