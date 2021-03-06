<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('TABLE_HEADING_CONFIGURATION_TITLE', 'Název',true);
define('TABLE_HEADING_CONFIGURATION_VALUE', 'Hodnota',true);
define('TABLE_HEADING_ACTION', 'Provést',true);

define('TEXT_INFO_EDIT_INTRO', 'Proveďte potřebné změny',true);
define('TEXT_INFO_DATE_ADDED', 'Datum vložení:',true);
define('TEXT_INFO_LAST_MODIFIED', 'Poslední změna:',true);

//pure:new language dependent configuration titles/descriptions START:

//my store GROUP 1
define('CONFIG_TITLE_META_TITLE_LENGHT','Počet znaků Meta title', true);
define('CONFIG_DESCRIPTION_META_TITLE_LENGHT','Nastavte max. počet znaků pro META TITLE (Google na desktopu zobrazuje max. 70 zn, na mobilu max. 78 zn). Fixní část TITLE = \'Název obchodu\' je automaticky odečtena.', true);
define('CONFIG_TITLE_META_DESCRIPTION_LENGHT','Meta Description počet znaků', true);
define('CONFIG_DESCRIPTION_META_DESCRIPTION_LENGHT','Nastavte max. počet znaků pro META DESCRIPTION (Google na desktopu zobrazuje 150-160 zn, na mobilních zařízeních 110-120 zn.)', true);
define('CONFIG_TITLE_ADD_MANUFACTURER_META_TITLE','Přidat jméno výrobce do Meta Title', true);
define('CONFIG_DESCRIPTION_ADD_MANUFACTURER_META_TITLE','Přidat jméno výrobce do META TITLE při automatickém generování?', true);

//products listing GROUP 8
define('CONFIG_TITLE_PRODUCT_LIST_DISPLAY_SORTBY','Filtr Třídit podle', true);
define('CONFIG_DESCRIPTION_PRODUCT_LIST_DISPLAY_SORTBY','Zobrazit filtr Třídit podle (datum, cena, určené pořadí) atd.', true);
define('CONFIG_TITLE_LISTING_SNIPPET_LENGHT','Délka úryvku', true);
define('CONFIG_DESCRIPTION_LISTING_SNIPPET_LENGHT','Zkrácení délky úryvku výpisu na definovaný počet slov.', true);

//Monthly Products Sales Report 
define('CONFIG_TITLE_COMISSION_PERCENTAGE','Rabat', true);
define('CONFIG_DESCRIPTION_COMISSION_PERCENTAGE','Nastavit percentuální výši rabatu pro modul výkazy/Měsíční přehled prodeje produktů. 0 = nezobrazovat rabat', true);

define('CONFIG_TITLE_ORDER_SEND_CUSTOMERS_EMAIL_PHONE','Email a telefon zákazníka v objednávce');
define('CONFIG_DESCRIPTION_ORDER_SEND_CUSTOMERS_EMAIL_PHONE','Zasílat email a telefon zákazníka v emailovém potvrzení objednávky?');
