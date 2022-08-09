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

  <title>Login</title>

  <link rel="icon" href="images/logo.ico" type="image/x-icon">
  <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="images/logo.ico">


  <link rel="stylesheet" href="css/style3.css">
</head>

<body>
  <div class="center">
    <h1>Login</h1>
    <form action="loginbgtarget.php" method="POST">
      <div class="txt_field">
      <input type="email" name="email"  required>
        <span></span>
        <label>Email *</label>
      </div>
      <div class="txt_field">
        <input type="password" name="password" required>
        <span></span>
        <label>Password *</label>
      </div>

      <input type="submit" value="Login">
      <div class="signup_link">
        Are you a Student? <a href="admission.php" target="_blank">Enroll Now</a>
      </div>

      <div class="signup_link">
        Don't Have an Admin Account? <a href="signup.php" target="_blank">Sign Up</a>
      </div>

    </form>
  </div>
</body>

</html>