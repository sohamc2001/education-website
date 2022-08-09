<?php
include "db.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

$name = strip_tags($_POST["fname"]);

//$sql = "INSERT INTO users(name)
        //VALUES ('$name')";

$email = $password = $confirm_password = "";
$email_err = $password_err = $confirm_password_err = "";



  // Check if email is empty
  if (empty(trim($_POST["email"]))) {
    $email_err = "Email cannot be blank";
?>
    <script>
      alert("Email cannot be blank");
      window.location.href = 'signup.php';
    </script>
    <?php
  } else {
    $sqll = "SELECT slnumber FROM users WHERE email = ?";
    $stmt = mysqli_prepare($con, $sqll);
    if ($stmt) {
      mysqli_stmt_bind_param($stmt, "s", $param_email);

      // Set the value of param email
      $param_email = trim($_POST['email']);

      // Try to execute this statement
      if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) == 1) {
          $email_err = "This email is already in use";
    ?>
          <script>
            alert("This email is already in use");
            window.location.href = 'signup.php';
          </script>
        <?php
        } else {
          $email = trim($_POST['email']);
        }
      } else {
        ?>
        <script>
          alert("Something went wrong! :( ");
          window.location.href = 'signup.php';
        </script>
    <?php
      }
    }
  }

  mysqli_stmt_close($stmt);


  // Check for password
  if (empty(trim($_POST['password']))) {
    $password_err = "Password cannot be blank";
    ?>
    <script>
      alert("Password cannot be blank");
      window.location.href = 'signup.php';
    </script>
  <?php
  } elseif (strlen(trim($_POST['password'])) < 6) {
    $password_err = "Password cannot be less than 6 characters";
  ?>
    <script>
      alert("Password cannot be less than 6 characters");
      window.location.href = 'signup.php';
    </script>
  <?php
  } else {
    $password = trim($_POST['password']);
  }

  // Check for confirm password field
  if (trim($_POST['password']) !=  trim($_POST['confirm_password'])) {
    $password_err = "Passwords should match";
  ?>
    <script>
      alert("Passwords should match");
      window.location.href = 'signup.php';
    </script>
    <?php
  }


  // If there were no errors, go ahead and insert into the database
  if (empty($email_err) && empty($password_err) && empty($confirm_password_err)) {
    $sqll = "INSERT INTO users (name, email, password) VALUES ('$name',?, ?)";
    $stmt = mysqli_prepare($con, $sqll);
    if ($stmt) {
      mysqli_stmt_bind_param($stmt, "ss", $param_email, $param_password);

      // Set these parameters
      $param_email = $email;
      $param_password = password_hash($password, PASSWORD_DEFAULT);

      // Try to execute the query
      if (mysqli_stmt_execute($stmt)) {
    ?>
        <script>
          alert("Signup Successful. You are being redirected to Log in Page. Log in from there.");
          window.location.href = 'login.php';
        </script>
<?php
      } else {
        echo "Something went wrong... cannot redirect!";
      }
    }
    mysqli_stmt_close($stmt);
  }
  //mysqli_close($con);
}

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />


  <title>Sign Up</title>

  <link rel="icon" href="images/logo.ico" type="image/x-icon">
  <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="images/logo.ico">


  <link rel="stylesheet" href="css/style2.css">
</head>

<body>
  <div class="center">
    <h1>Sign Up</h1>
    <form method="post">
      <div class="txt_field">
        <input type="text" name="fname" required>
        <span></span>
        <label>Full Name *</label>
      </div>
      <div class="txt_field">
        <input type="email" name="email" required>
        <span></span>
        <label>Email *</label>
      </div>
      <div class="txt_field">
        <input type="password" name="password" required>
        <span></span>
        <label>Password *</label>
      </div>
      <div class="txt_field">
        <input type="password" name="confirm_password" required>
        <span></span>
        <label>Confirm Password *</label>
      </div>
      <input type="submit" value="Sign Up">
    </form>
  </div>
</body>

</html>