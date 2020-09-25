<?php
/**
 * Author : "John Rush
 * Date: #(DATE)
 * File:#FILE_NAME)
 * Description
 */


//FOR HOSTED VERSION

$dbhost = 'localhost'; //XAMPP is 'localhost:3306'
$dbuser = 'rushjs';
$dbpwd = 'stetson dieseling splint'; //XAMPP password is ''
$dbname = 'rushjs_db';




//FOR LOCAL / DEVELOPING VERSION
/*$dbhost = 'localhost'; //XAMPP is 'localhost:3306'
$dbuser = 'phpuser';
$dbpwd = 'phpuser'; //XAMPP password is ''
$dbname = 'ampjam_db';*/
$link = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);
if (!$link) {
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}

