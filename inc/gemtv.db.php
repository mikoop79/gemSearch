<?php 


define('DB_NAME', 'gemtv_kandan_com_au');

//this is to test if we have a connection. 

//if working remotely off yallara.
/*
define('DB_HOST', 'mysql-5.kandan.com.au');
define('DB_USER', 'mygemt1000');
define('DB_PASS', 'npJ7B8Bt');
define('DB_PORT', '3306');
*/


// if working locally
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_PORT', '8889');

define('DB_HOST_PORT', DB_HOST.':'.DB_PORT);

$dsn = 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME;

define('dsn', $dsn);



if (!$dbconn = mysql_connect(DB_HOST_PORT, DB_USER, DB_PASS)) {
  //echo 'Could not connect to mysql on ' . DB_HOST . "\n DB_CREDS";
  exit;
}

//echo 'Connected to mysql on ' . DB_HOST . "<br/>\n";

if (!mysql_select_db(DB_NAME, $dbconn)) {
  //echo 'Could not use database ' . DB_NAME . "\n";
  //echo mysql_error() . "\n";
  exit;
}

//echo 'Connected to database ' . DB_HOST_PORT. "<br/>\n";







?>
