<?php
session_start();
include("header.php");
include("navbar.php");
?>

<div class="container mt-4">
    <div class="row">
        <div class="col"><!-- 1st Colum Registrartioon form -->
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
                        <button type="submit" name="register" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
        <div class="col">
        </div>
    </div>
</div>

<?php
include("footer.php");
?>