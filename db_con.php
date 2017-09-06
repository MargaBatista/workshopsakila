<?php
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = 'root';
$DB_NAME = 'sakila';
/*$DB_PORT = '8889';*/

/*$DB_HOST = 'margabatista.dk.mysql'; // server
$DB_USER = 'margabatista_dk'; // database user
$DB_PASS = 'Margabat0'; // database password
$DB_NAME = 'margabatista_dk'; // database name*/

//$link = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
$link = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($link->connect_error) { 
   die('Connect Error ('.$link->connect_errno.') '.$link->connect_error);
}
$link->set_charset('utf8'); 
?>

