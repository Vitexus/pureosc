<?php 
//username definition: 2 chars DB_SERVER_USERNAME_PREFIX + 3 chars acces level + 11 chars salt
//admin users acces level roles: 
//xx=2 chars db prefix, 1234567890 = salt
//shop user:
//xxano1234567890 = anonymous shop user
//xx1 = customer id 1
//admin users
//xxcad1234567890 = admin granted to ondly upate catalog
//xxadm1234567890 = ordinary admin granted to view orders
//xxmad1234567890 = master admin granted to add functions i.e.: grant all on dbname.* to dbmad@localhost identified by 'password' with grant option;
//username examples: poadm1234567890 = ordinary admin, pomad12345678901 = master admin

//master server
//  define('MULTI_DATABASE','false'); //true if defined multiple databases
  define('DB_SERVER', 'localhost'); //localhost <------ need to bee configured
//  define('DB_SERVER', '88.208.121.116'); //localhost <------ need to bee configured
//    define('DB_DATABASE', 'oscremotetest'); // knizninovinky pureoscssl <------ need to bee configured
  define('DB_DATABASE', 'osc1'); // knizninovinky pureoscssl <------ need to bee configured
//  define('DB_DATABASE', 'oscempty'); // knizninovinky pureoscssl <------ need to bee configured
//  define('DB_DATABASE', 'QSshop'); // knizninovinky pureoscssl <------ need to bee configured
//  define('DB_PORT','3307');
  define('DB_SERVER_USERNAME', 'root');
  define('DB_SERVER_PASSWORD', '');
//  define('DB_SERVER_USERNAME', 'osc');
//  define('DB_SERVER_PASSWORD', 'jinablbatmavaleva');
//root cron user
//  define('DB_SERVER_USERNAME_ROOT', 'root');
//  define('DB_SERVER_PASSWORD_ROOT', '');

//admin: f / fZ2p2OPBIQcXY21l3GW4