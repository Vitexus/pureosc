![Logo](https://raw.githubusercontent.com/SimonFormanek/pureosc/pure/images/store_logo.png "PureHtml")

PureOSC
=======

PureHTML verson of OsCommerce 2.3

Features
--------

 * GDPR Newsletter Consent 
 * FlexiBee - accunting Software support
 * Static Catalog (no zero point of failure)

FlexiBee support
----------------

 * Bank Payment
 * CashDesk Paymet
 * Card Payment by GPWebPay
 * Post Money Order Payment

Whats new
---------

Composer Support
Gettext i18n support
No PHP3 code

/var/run/mysqld/mysqld.sock
Docker
------

Deploy:

    docker run -d -p 9998:9000 -v /var/run/mysqld/mysqld.sock:/var/run/mysqld/mysqld.sock 
    
    docker run -d -p 9998:9000 purehtml/pureosc
