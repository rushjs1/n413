<?php
/**
 * Author : "John Rush
 * Date: #(DATE)
 * File:#FILE_NAME)
 * Description
 */

echo "hello, world";
include("n413connect.php");
$sql = "SELECT image FROM list";
$result = mysqli_query($link, $sql);
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
    echo $row["image"].'<br/>';
}
