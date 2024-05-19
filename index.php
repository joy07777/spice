<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/dbconn.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joy's Clothing </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/LogoSpice.png" type="image/x-icon">
  
    <style>
        body {
            background: linear-gradient(to bottom, white, white);
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        h1 {
            color: white;
            text-align: center;
            margin-top: 50px; 
        }
    </style>
</head>
<body>

<?php

include("header.php");
include("navbar.php");
?>


<div class="background-image"> 


<?php
include("footer.php");
?>
