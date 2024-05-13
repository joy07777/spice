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
session_name('MySession');
session_start();
include("header.php");
include("navbar.php");
?>
<div class="background-image">
<div class="container mt-3">
    <div class="row justify-content-center"><!-- Center the content -->
        <div class="col-md-6"><!-- Specify the width of the column -->
        <?php
            if (isset($_SESSION['status'])) {
        ?> 
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Warning!</strong> <?= $_SESSION['status'] ?>
            </div> 
        <?php
            unset($_SESSION ['status']);
            } 
            // Check if registration success message is set
            if (isset($_SESSION['registration_success']) && $_SESSION['registration_success']) {
        ?> 
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Success!</strong> Registration successful
            </div> 
        <?php
                // Unset the session variable to prevent displaying the message again on page refresh
                unset($_SESSION['registration_success']);
            } 
        ?>
            <div class="card">
                <div class="card-header"><h4>Registration</h4></div>
                <div class="card-body">
                    <form action="reg_code.php" method="POST">
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname">
                            <label for="fname">First Name</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="mname" placeholder="Middle Name" name="mname">
                            <label for="mname">Middle Name</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="sname" placeholder="Surname" name="sname">
                            <label for="sname">Surname</label>
                        </div>
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
                        <button type="submit" name="register" class="btn btn-secondary">Submit</button><!-- Changed the button color to gray -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<?php
include("footer.php");
?>
