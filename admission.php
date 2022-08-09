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

    <title>Enroll</title>

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



    <section style="padding-top: 0px" class="contact_section layout_padding">
      <div class="container">

        <h2 class="main-heading">
          Enrolling Form

        </h2>

        <div class="">
          <div class="contact_section-container">
            <div class="row">
              <div class="col-md-6 mx-auto">
                <div class="contact-form">
                  <form action="enrolled.php" method="POST">
                    <div>
                      <input type="text" name="name" placeholder="Name *" required>
                    </div>
                    <div>
                      <input type="tel" id="phone" name="phone" placeholder="Phone Number *" pattern="[0-9]{10}" required>
                    </div>
                    <div>
                      <input type="email" name="email" placeholder="Email *" required>
                    </div>

                    <br> <br>


                    <font style="font-size : 15px ; font-weight: bold;">Choose Your Course * </font>
                    <!-- teacher section -->
                    <section style="padding-top: 000px" class="teacher_section layout_padding-bottom">
                      <div class="container">
                        <div class="teacher_container layout_padding2">
                          <div class="card-deck">
                            <div class="card">
                              <img class="card-img-top" src="images/teacher-1.png" alt="Card image cap">
                              <div class="card-body">
                                <h3 class="card-title"><input type="radio" id="PHP & SQL" name="course" value="PHP & SQL">PHP & SQL</h3>
                              </div>
                            </div>
                            <div class="card">
                              <img class="card-img-top" src="images/teacher-2.png" alt="Card image cap">
                              <div class="card-body">
                                <h3 style="font-size : 17px;" class="card-title"><input type="radio" id="Web Development UI" name="course" value="Web Development UI">Web Development UI</h3>
                              </div>

                            </div>
                            <div class="card">
                              <img class="card-img-top" src="images/teacher-3.png" alt="Card image cap">
                              <div class="card-body">
                                <h3 class="card-title"><input type="radio" id="C#" name="course" value="C#">C#</h3>

                              </div>

                            </div>

                            <div class="card">
                              <img class="card-img-top" src="images/teacher-4.png" alt="Card image cap">
                              <div class="card-body">
                                <h3 style="font-size : 14.3px;" class="card-title"><input type="radio" id="Digital Marketing" name="course" value="Digital Marketing">Digital Marketing</h3>

                              </div>

                            </div>
                          </div>
                        </div>


                        <div class="d-flex justify-content-center mt-3">
                          <a href="">
                            <input style="background-color: #fec913;" class="call_to-btn" type="submit" value="Submit">
                          </a>
                        </div>
                      </div>
                    </section>



                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>








    <!-- Admission section -->


    <!-- footer section -->
    <section class="container-fluid footer_section">
      <p style="font-size : 13px">
        Copyright &copy; 2022 Designed and Developed by
        <a href="http://digix.in/" target="_blank"><b style="color : #fec913"> Digi-X</b> </a>
      </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- progreesbar script -->

    </script>
    <script>
      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Australia.
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: {
            lat: 40.645037,
            lng: -73.880224
          },
        });

        var image = 'images/maps-and-flags.png';
        var beachMarker = new google.maps.Marker({
          position: {
            lat: 40.645037,
            lng: -73.880224
          },
          map: map,
          icon: image
        });
      }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
    </script>
    <!-- end google map js -->
  </body>

  </html>