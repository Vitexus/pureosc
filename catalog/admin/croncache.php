#!/usr/bin/php -q
<?php
//require('includes/application_top.php');
error_reporting(1);
@ini_set('display_errors', 1);
define('HTTP_HOST', 'localhost');
require('../../../oscconfig/admin/configure.php');
require('../../../oscconfig/dbconfigure.php');
require(DIR_WS_INCLUDES.'filenames.php');
///echo "database_tables.php\n";
require(DIR_WS_INCLUDES.'database_tables.php');
///echo "load functions: database.php\n";
require(DIR_WS_FUNCTIONS.'database.php');
//echo "!! DB_CONNECT\n";
tep_db_connect(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD) or die('DB_SERVER:'.DB_SERVER.' DB_SERVER_USERNAME_ROOT:'.DB_SERVER_USERNAME_ROOT.' DB_SERVER_PASSWORD_ROOT:'.DB_SERVER_PASSWORD_ROOT.' Unable to connect to database server!');
///echo "Ctu konfiguraci..\n";
/*
$configuration_query = tep_db_query('select configuration_key as cfgKey, configuration_value as cfgValue from '.TABLE_CONFIGURATION);
while ($configuration       = tep_db_fetch_array($configuration_query)) {
    define($configuration['cfgKey'], $configuration['cfgValue']);
    //echo $configuration['cfgKey']." = ".$configuration['cfgValue']."\n";
}
*/
while (1) {
    if (date("s") > 55) {
    echo 'exiting';
        exit;
    } elseif (
        (date("s") == 1) ||
        (date("s") == 10) ||
        (date("s") == 20) ||
        (date("s") == 30) ||
        (date("s") == 40) ||
        (date("s") == 50)
    ) {
        echo 'datum:'.date("s")."\n";
        $lng_code_query = tep_db_query("SELECT code FROM languages");
        while ($lng_code       = tep_db_fetch_array($lng_code_query)) {
//echo 'code:'. $lng_code['code'] . "\n";
         exec("/usr/bin/nice -n 10 /usr/bin/ionice -c2 -n7 ./writecache.php ".$lng_code['code'].' shop');
//   	exec("./writecache.php " . $lng_code['code'] . ' admin');
        }
    }
    sleep(1);
}
