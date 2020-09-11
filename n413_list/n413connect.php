<?php
/**
 * Author : "John Rush
 * Date: #(DATE)
 * File:#FILE_NAME)
 * Description
 */

$dbhost = 'localhost';
$dbuser = 'rushjs';
$dbpwd = 'stetson dieseling splint';
$dbname = 'rushjs_db';

$link = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);
if(!$link) {
    die('Connect Error (' . mysqli_connect_error() . ') '. mysqli_connect_error());
}else{
    echo "connected";
}


