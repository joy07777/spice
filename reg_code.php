<?php 
session_start();
include("dbconn.php");

if(isset($_POST["register"])){
    $fname = trim($_POST['fname']);
    $mname = trim($_POST['mname']);
    $sname = trim($_POST['sname']);
    $email = trim($_POST['email']);
    $password = $_POST['pswd'];
    $password2 = $_POST['cpswd'];

    $verify_token = md5(rand());

    if(empty($fname) ){
        $_SESSION['status'] = "First Name is required!";
        header("Location: register.php");
        exit(0);
    } else if(empty($mname)) {
        $_SESSION['status'] = "Middle Name is required!";
        header("Location: register.php");
        exit(0);
    }
    else if(empty($sname)) {
        $_SESSION['status'] = "Surname is required!";
        header("Location: register.php");
        exit(0);
    } 
    else if(empty($email)) {
        $_SESSION['status'] = "Email  is required!";
        header("Location: register.php");
        exit(0);
    }
    else if(empty($password)) {
        $_SESSION['status'] = "Password is required!";
        header("Location: register.php");
        exit(0);
    }  
    else if(empty($password2)) {
        $_SESSION['status'] = "Password2 is required!";
        header("Location: register.php");
        exit(0);
    } 
    else {
        if($password != $password2){
            $_SESSION['status'] = "Password do not match!";
            header("Location: register.php");
            exit(0);
        }

    }

}


?>
<h3><?php echo $name ?></h3>