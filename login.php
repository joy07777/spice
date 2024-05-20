<?php
session_start();

include("header.php");
include("navbar.php");

$page_title = "Login";
$errorMessage = "";

if (isset($_SESSION['status'])) {
    $errorMessage = $_SESSION['status'];
    unset($_SESSION['status']); 
}

if (isset($_POST['login'])) {
    $conn = require __DIR__ . "/dbconn.php";

    $email = trim($_POST['email']);
    $password = $_POST['pswd'];

    $check_user_query = "SELECT * FROM users WHERE email=? LIMIT 1";
    $stmt = $conn->prepare($check_user_query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: dashboard.php");
            exit;
        } else {
            $errorMessage = "Invalid password!";
        }
    } else {
        $errorMessage = "User not found!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>  
</head>
<body>
<div class="background-image">
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><h4>Login</h4></div>
                <div class="card-body">
                  <?php if ($errorMessage != "") : ?>
                    <div class="alert alert-danger" role="alert">
                      <?php echo $errorMessage; ?>
                    </div>
                  <?php endif; ?>
                  <form method="POST" action="login.php">
                    <div class="form-floating mb-3 mt-3">
                      <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
                      <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pswd" required>
                      <label for="pwd">Password</label>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="showPasswordCheck">
                        <label class="form-check-label" for="showPasswordCheck">Show password</label>
                      </div>
                      <a href="forgot-password.php" class="float-end">Forgot Your Password?</a>
                    </div>
                    <div class="d-flex justify-content-center">
                      <button type="submit" class="btn btn-secondary" style="width: 230px;" name="login">Login</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>    
</div>
</div>

<script>
  document.getElementById('showPasswordCheck').addEventListener('change', function() {
    var passwordInput = document.getElementById('pwd');
    passwordInput.type = this.checked ? 'text' : 'password';
  });
</script>
</body>
</html>

<?php
include("footer.php");
?>
