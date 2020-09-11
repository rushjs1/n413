<?php
/**
 * Author : "John Rush
 * Date: #(DATE)
 * File:#FILE_NAME)
 * Description
 */

$dbhost = 'localhost'; //XAMPP is 'localhost:3306'
$dbuser = 'rushjs';
$dbpwd = 'stetson dieseling splint'; //XAMPP password is ''
$dbname = 'rushjs_db';
$link = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);
if (!$link) {
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}

