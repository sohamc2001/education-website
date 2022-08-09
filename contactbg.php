<?php

include "db.php";
session_start();
$_SESSION["email"].'<br>';
//session_destroy();
if (!isset($_SESSION["email"])) {
  header("Location: index.php");
}

?>


<!DOCTYPE html>
<html>

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

  <title>Contact Database</title>

  <link rel="icon" href="images/logo.ico" type="image/x-icon">
  <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="images/logo.ico">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="css/css-circular-prog-bar.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />




  <link rel="stylesheet" href="css/css-circular-prog-bar.css">


</head>

<body>  <div class="top_container sub_pages">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="">
            <span>
              DiGi-X
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="contactbg.php"> Contact Database </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="enrolledbg.php">Enrolled Database</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="signupdb.php">Admin Users Database</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="logout.php">
                    <span class="glyphicon glyphicon-log-out"></span> Log Out </a>
                </li>


            </div>
        </nav>
      </div>
    </header>

  </div>


  <div style="font-size: 15px; text-align: center ; padding-bottom : 50px" class="container">
  <h2 style="font-size: 25px; padding-bottom:20px ; font-weight: bold;">Contact Database</h2>         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>SL. No.</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody>

<?php

include "db.php";

$sql="SELECT * FROM contactdb";
$result = mysqli_query($con,$sql);
while ($rows = mysqli_fetch_assoc($result)) {
echo "
      <tr>
        <td>$rows[slno]</td> 
        <td>$rows[sname]</td>
        <td>$rows[Phone]</td>
        <td>$rows[email]</td>
        <td>$rows[msg]</td>
      </tr>
";

}

?>


    </tbody>
  </table>
</div>




<div style="padding-bottom: 2px ; padding-top: 0px " class="about_img-box ">
    <center><img src="images/send.png" alt="" width=180px height=180px> </center>

  </div>





  <section class="container-fluid footer_section">
    <p style="font-size : 13px">
      Copyright &copy; 2022 Designed and Developed by
      <a href="http://digix.in/" target="_blank"><b style="color : #fec913"> Digi-X</b> </a>
    </p>
  </section>

</body>

</html>