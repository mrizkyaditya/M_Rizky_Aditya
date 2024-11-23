<?php
session_start();

$DBHOST = 'localhost';
$DBUSER = 'root';
$DBPASSWORD = '';
$DBNAME = 'pemweb-db';


$db_connect = mysqli_connect($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);

if(!$db_connect){
    die("failed connect to mysql " . mysqli_connect_error()); 
}

