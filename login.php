<?php 
session_start();

include("header.php");
include("navbar.php");

$page_title = "Login";

if (isset($_SESSION['status'])) {
    $errorMessage = $_SESSION['status'];
    unset($_SESSION['status']); 
}

if (isset($_POST['login'])) {
    include("dbconn.php");

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
  <meta charset="utf-5">
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
              <!-- Display error message if set -->
              <?php if (isset($errorMessage)) : ?>
                <div class="alert alert-danger" role="alert">
                  <?php echo $errorMessage; ?>
                </div>
              <?php endif; ?>
              <!-- Login form -->
              <form method="POST" action="login.php">
                <!-- Email -->
                <div class="form-floating mb-5 mt-3">
                  <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
                  <label for="email">Email</label>
                </div>
                <!-- Password -->
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pswd" required>
                  <label for="password">Password</label>
                </div>
                <!-- Show Password toggle checkbox -->
                <div class="form-check mt-3">
                  <input type="checkbox" class="form-check-input" id="showPasswordCheck">
                  <label class="form-check-label" for="showPasswordCheck">Show password</label>
                </div>
                <button type="submit" class="btn btn-secondary" name="login">Login</button>
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

      if (this.checked) {
        passwordInput.type = 'text';
      } else {
        passwordInput.type = 'password';
      }
    });
  </script>
</body>
</html>

<?php
include("footer.php");
?>
