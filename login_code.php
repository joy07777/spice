<?php 
session_start();
include("dbconn.php");

if(isset($_POST["login"])){
    $email = trim($_POST['email']);
    $password = $_POST['pswd'];
    $password2 = $_POST['cpswd'];

    $name = $fname. ', ' .$mname. ' ' . $sname;
    $status = "user";

    $verify_token = md5(rand());

    if(empty($email) || empty($password)) {
        $_SESSION['status'] = "All fields are required!";
        header("Location: login.php");
        exit(0);
    }
    else if(empty($email)) {
        $_SESSION['status'] = "Email is required!";
        header("Location: login.php");
        exit(0);
    }
    else if(empty($password)) {
        $_SESSION['status'] = "Password is required!";
        header("Location: login.php");
        exit(0);
    }
    else if($password != $password2) {
        $_SESSION['status'] = "Passwords do not match!";
        header("Location: login.php");
        exit(0);
    }
        else {
            $check_email_query = "SELECT email FROM users WHERE email=? LIMIT 1";
            $stmt = $conn->prepare($check_email_query);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

        }
    }




?>
<h3><?php echo $name ?></h3>