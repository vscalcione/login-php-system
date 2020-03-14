<?php

define('DB_NAME','register_db');
define('DB_USER','root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

try{
    //connection variable
    $connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    //encoded language
    mysqli_set_charset($connection, 'utf8');
}catch(Exception $exception){
    print "An Exception occured. Message ".$exception -> getMessage();
}catch(Error $error){
    print "The system is busy. Please, try later";
}

