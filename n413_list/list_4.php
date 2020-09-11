<?php
/**
 * Author : "John Rush
 * Date: #(DATE)
 * File:#FILE_NAME)
 * Description
 */



include("n413connect.php");
$sql = "SELECT * FROM `list`";
$result = mysqli_query($link, $sql);
$records = array();

while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {

    //push into new array

    $records[] = $row;

}
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <title>Full Stack Amp Jam List Project</title>
    <style>
        body  { font-family:Arial; }
        img   { display:inline-block;vertical-align:top;height:75px;margin-left:50px;margin-right:20px;margin-bottom:10px; }
        .desc { display:inline-block;width:60%;font-family:Arial;margin-bottom:10px; }
    </style>
</head>
<body>
<h2>Full Stack Amp Jam List Project</h2>
<?php

//use foreach to iterate thru the $records array, and assign the variable $record to each index of array
 foreach ($records as $record){
                echo '
                    <div>
                        <img src="images/'.$record["image"].'" />
                        <div class="desc" onclick="show_alert('.$record["id"].', \''.$record["item"].'\');"> <b>'.$record["item"].'</b> '.$record["description"].'</div>
                    </div>';
            }
?>
</body>
<script>
	function show_alert(id,item){
		alert("You have clicked Item "+id+", "+item+".");
	}
</script>
</html>
