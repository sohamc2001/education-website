<?php

include "db.php";

$insert = false;
$update = false;
$delete = false;

session_start();
$_SESSION["email"] . '<br>';
//session_destroy();
if (!isset($_SESSION["email"])) {
  header("Location: index.php");
}

if (isset($_GET['delete'])) {
  $slno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM 'enrolling_form' WHERE 'slno' = $slno";
  $result = mysqli_query($con, $sql);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['slnoEdit'])) {
    // Update the record
    $slno = $_POST["slno"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $course = $_POST["course"];


    // Sql query to be executed
    $sql = "UPDATE 'enrolling_form' SET 'name' = '$name' , 'phone' = '$phone' , 'email' = '$email' , 'course' = '$course' WHERE 'enrolling_form'.'slno' = $slno";
    $result = mysqli_query($con, $sql);
    if ($result) {
      $update = true;
    } else {
      echo "Could not update the record successfully";
    }
  } else {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $course = $_POST["course"];

    // Sql query to be executed
    $sql = "INSERT INTO 'enrolling_form' ('name', 'phone', 'email', 'course') VALUES ('$name', '$phone' , '$email' , '$course')";
    $result = mysqli_query($con, $sql);


    if ($result) {
      $insert = true;
    } else {
      echo "The record was not inserted successfully because of this error ---> " . mysqli_error($con);
    }
  }
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

  <title>Enrolled Database</title>

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


  <?php
  if ($insert) {
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been inserted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if ($delete) {
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been deleted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if ($update) {
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been updated successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>



  <div style="font-size: 15px; text-align: center ; padding-bottom : 20px" class="container">
    <h2 style="font-size: 25px; padding-bottom:20px ; font-weight: bold;">Enrolled Database</h2>

    <div class="d-flex justify-content-center">
      <button style="border-radius: 4px; font-size: 10px" type="submit" class="call_to-btn ">
        <i class="fa fa-plus"></i> Add New
      </button>

    </div>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>SL. No.</th>
          <th>Name</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Course</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>

        <?php

        include "db.php";



        $sql = "SELECT * FROM enrolling_form";
        $result = mysqli_query($con, $sql);
        $slno = 0;
        while ($rows = mysqli_fetch_assoc($result)) {
          $slno = $slno + 1;
          echo "
      <tr>
        <td>$rows[slno]</td> 
        <td>$rows[name]</td>
        <td>$rows[phone]</td>
        <td>$rows[email]</td>
        <td>$rows[course]</td>
        <td>

                <button class='btn btn-secondary' id=" . $rows['slno'] . "'>Update</button>
                <button class='btn btn-danger' id=" . $rows['slno'] . "'>Delete</button>

                </td>
      </tr>
";
        }

        ?>


      </tbody>
    </table>
  </div>




  <div style="padding-bottom: 2px ; padding-top: 0px " class="about_img-box ">
    <center><img src="images/enroll.png" alt="" width=300px height=300px> </center>

  </div>





  <section class="container-fluid footer_section">
    <p style="font-size : 13px">
      Copyright &copy; 2022 Designed and Developed by
      <a href="http://digix.in/" target="_blank"><b style="color : #fec913"> Digi-X</b> </a>
    </p>
  </section>



  <script>
    $(document).ready(function() {
      $('enrolling_form').DataTable();

    });
  </script>
  <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        tr = e.target.parentNode.parentNode;
        name = tr.getElementsByTagName("td")[0].innerText;
        phone = tr.getElementsByTagName("td")[1].innerText;
        email = tr.getElementsByTagName("td")[2].innerText;
        course = tr.getElementsByTagName("td")[3].innerText;
        console.log(name, phone, email, course);
        name.value = name;
        phone.value = phone;
        email.value = email;
        course.value = course;
        slno.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        slno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = 'enrolledbg.php?delete=${slno}';
          // TODO: Create a form and use post request to submit a form
        } else {
          console.log("no");
        }
      })
    })
  </script>




</body>

</html>