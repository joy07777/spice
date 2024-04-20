<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joy's Clothing Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to bottom, white, #6495ED);
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        /* Additional styling for the content */
        h1 {
            color: white;
            text-align: center;
            margin-top: 50px; /* Adjust as needed */
        }
    </style>
</head>
<body>
<?php
include("header.php");
include("navbar.php");
?>

<div class="container mt-4">
    <div class="row">
        <div class="col"><!-- 1st Colum Registrartioon form -->
            <div class="card">
                <div class="card-header"><h4>Login</h4></div>
                <div class="card-body">
                <form action="/action_page.php">
                    <div class="form-floating mb-3 mt-3">
                    <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                        <label for="pwd">Password</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="password" class="form-control" id="pwd2" placeholder="Enter password" name="cpswd">
                        <label for="pwd2">Confirm Password</label>
                    </div>
                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
                </form>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>

<?php
include("footer.php");
?>