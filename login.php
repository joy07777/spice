<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joy's Clothing Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to bottom, white, #3B444B);
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
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><h4>Login</h4></div>
                <div class="card-body">
                    <form action="indexx.html" method="POST">
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                            <label for="email">Email</label>
                        </div>
                        <div class="form-floating mt-3 mb-3">
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                            <label for="pwd">Password</label>
                        </div>
                        <button type="submit" name="login_now" class="btn btn-secondary">Login</button><!-- Changed the button color to gray -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div></div>


<?php
include("footer.php");
?>