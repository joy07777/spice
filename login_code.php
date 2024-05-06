<?php

session_start();


include("dbconn.php");

if (isset($_POST["login_now"])) {
    if (!empty($_POST['email']) && !empty($_POST['pwd'])) {
        $email = $_POST['email'];
        $password = $_POST['pwd'];

        $login_query = "SELECT * FROM users WHERE email=? LIMIT 1";
        $stmt = mysqli_prepare($conn, $login_query);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            // Verify the password against the hashed password in the database
            if (password_verify($password, $row['password'])) {
                $_SESSION['authenticated'] = TRUE;
                $_SESSION['auth_user'] = [
                    'name' => $row['name'],
                    'email' => $row['email'],
                ];
                $_SESSION['status'] = "You are Logged In Successfully!";
                header("Location: index.php");
                exit();
            } else {
                // Incorrect password
                $_SESSION['status2'] = "Invalid Email or Password";
                // Redirect to login page after setting the session status
                header("Location: login.php");
                exit();
            }
        } else {
            $_SESSION['status2'] = "Invalid Email or Password";
            // Redirect to login page after setting the session status
            header("Location: login.php");
            exit();
        }
    } else {
        $_SESSION['status2'] = "All fields are Mandatory";
        // Redirect to login page after setting the session status
        header("Location: login.php");
        exit();
    }
}

// Redirect to login page if login_now is not set
header("Location: login.php");
exit();
?>
