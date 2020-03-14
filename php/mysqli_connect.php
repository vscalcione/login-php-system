<?php

define('DB_NAME','register_db');
define('DB_USER','root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

try{
    //connection variable
    $connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
}catch(Exception $exception){
}

