<?php
/**
 * Author : "John Rush
 * Date: #(DATE)
 * File:#FILE_NAME)
 * Description
 */

include ("n413connect.php");
echo "connected";
/*
$sql = "SELECT name FROM `form_responses`";
$result = mysqli_query($link, $sql);
    while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
        echo $row["name"];
   }*/
function sanitize ($item){
    global $link;
    $item = html_entity_decode($item);
    $item = trim($item);
    $item = stripslashes($item);
    $item = strip_tags($item);
    $item = mysqli_real_escape_string($link, $item);
    return $item;

}
$name = "";
$email = "";
$comment = "";

if(isset($_POST["name"])) {
    $name = $_POST["name"];
}

if(isset($_POST["email"])){
    $email = $_POST["email"];
}
 if(isset($_POST["comment"])){
     $comment = $_POST["comment"];

 }

/* $sql = "INSERT INTO 'form_responses' ('id', 'name', 'email', 'comment', 'timestamp') VALUES (NULL, . $name . , . $email . , . $comment . , CURRENT_TIMESTAMP)";*/
$sql = "INSERT INTO `form_responses` (`id`, `name`, `email`, `comment`, `timestamp`) 
        	VALUES (NULL, '".$name."', '".$email."', '".$comment."', CURRENT_TIMESTAMP)";
$result = mysqli_query($link, $sql);


?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <title>Full Stack Amp Jam Form Project</title>
    <style>
        body	{ font-family:Arial; }
        h2	{ text-align:center;margin-top:50px; }
        #message-container { width:30%;margin-left:40%;margin-top:100px; }
        .signoff{ float:right;font-style:italic;margin-top:30px; }
    </style>
</head>
<body>
<h2>Full Stack Amp Jam Form Project</h2>
<div id="message-container">
    <?php
    if($result){
        echo '<p>Thank you for submitting your comment. <br/>';
    }else{
        echo '<p>Sorry, but something went wrong.  Please try again later. <br/>';
    }
    ?>

    <span class="signoff">The Web Site Team</span></p>

    <a href="form_1.html">  <span class="signoff">Click me to go back</span></p> </a>

</div>
</body>
</html>
