<?php

include "db.php";

$name1 = strip_tags($_POST['name1']);
$phone1 = strip_tags($_POST['phone1']);
$email1 = strip_tags($_POST['email1']);
$msg1 = strip_tags($_POST['msg1']);

$sql = "INSERT INTO contactdb(sname , Phone , email , msg)
        VALUES ('$name1','$phone1','$email1','$msg1')";

if (mysqli_query($con, $sql)) {
?>
  <script>
    alert("Details Sent Successfully");
  </script>
<?php
} else {
?>
  <script>
    alert("Something's Wrong");
  </script>
<?php
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

  <title>DiGi-X Contact</title>

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

<body>
  <div class="top_container sub_pages">
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
                <li class="nav-item active">
                  <a class="nav-link" href="index.php"> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="about.php"> About Us </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Us</a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="admission.php"><span class="glyphicon glyphicon-new-window"></span> Enroll </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="login.php" target="_blank">
                    <span class="glyphicon glyphicon-log-in"></span> Admin Log In </a>
                </li>


            </div>
        </nav>
      </div>
    </header>

  </div>
  <!-- end header section -->

  <!-- about section -->




  <div class="container">

    <h2 style="font-size: 25px" class="text-center">
      Your message has been duly noted and you have grabbed out attention! You will be expecting a call from our team soon. Keep an eye on your mailbox for other details. <br> <br> 🙂🙂
    </h2>

  </div>



  <div style="padding-bottom: 2px ; padding-top: 0px " class="about_img-box ">
    <center><img src="images/book.png" alt="" width=230px height=230px> </center>

  </div>


  <!-- about section -->





  <section class="container-fluid footer_section">
    <p style="font-size : 13px">
      Copyright &copy; 2022 Designed and Developed by
      <a href="http://digix.in/" target="_blank"><b style="color : #fec913"> Digi-X</b> </a>
    </p>
  </section>

</body>

</html>