<?php 
   session_start();

   include("php/config.php");
              if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con,$_POST['email']);
  
                $password = mysqli_real_escape_string($con,$_POST['password']);

                $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['age'] = $row['Age'];
                    $_SESSION['id'] = $row['Id'];
                }else{
                  echo '<script>alert("Wrong Email or Password")</script>'; 
                   echo "<a href='index.php'><button class='btn'>Go Back</button>";
         
                }
                if(isset($_SESSION['valid'])){
                    header("Location: home.php");
                }
              }else{
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="GS\style.css">
    <title>GNC DriveHub</title>
    
    <link rel="shortcut.icon"  href="icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!--boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <section id="menu" class="container">
        <div class="row">
            <div class="col-sm">
                <div class="topnav" id="myTopnav">
                    <a href="#home" class="active">
                    <span style="color: rgba(3, 68, 2, 0.90);">GNC</span>
                    <span style="color: #867777;">DRIVEHUB</span>
                    </a>
                    <a href="#news">News</a>
                    <a href="#contact">Contact</a>
                    <a href="#about">About Us</a>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                      <i class="fa fa-bars"></i>
                    </a>
                  </div>
            </div>
        </div>
    </section>
    <div class="container " id="background"> 
        <img src="img/GNCbg.jpg" alt="">
    </div>

    <section id="main" class="container w3-container w3-center w3-animate-opacity">
        <div class="row container">
            <div class="col-sm">
                <img src="img/GNC.png" alt="GNC.png" class="gnc">
                <h1 class="m1">
                    <span style="color: rgba(3, 68, 2, 0.90);">GNC</span>
                    <span style="color: #867777;">DRIVEHUB</span>
                </h1>
                <p class="m2">GNCDriveHub helps you get everywhere, easier by making it fast and convenient to find and reserve parking in Guagua National Park.</p>
            </div>
        </div>
    </section>
    

    <section id="login" class="w3-container w3-animate-top">
        <div class="container">
            <div class="row box form-box">
                <img src="img/GNCLogoHD.png" alt="GNCLogoHD">
                <header>Account</header>
                <form action="" method="post" style="text-align: left;">
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" autocomplete="off" placeholder="Enter your Email" required>
                    </div>

                    <div class="field input " >
                        <label for="password">Password</label>
                        <input type="password" name="password" id="mypassword" autocomplete="off" placeholder="Enter Password" required>
                        <input type="checkbox" class="sbox" style="height:10px;" onclick="myFunction()">Show Password
                    </div>

                    <div class="field">
                    
                        <input type="submit" class="btn" name="submit" value="Login" required>
                    </div>
                    <div class="links" style="text-align: center;">
                        Don't have account? <a href="register.php">Sign Up Now</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="container" id="img2">
      <div class="container">
        <img src="img/img2.jpg" alt="">
      </div>
    </section>

    <section id="bitis">
        <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container my-5">
  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-dark"
          style="background-color: #ECEFF1"
          >
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between p-4 text-white"
             style="background-color: #21D192"
             >
      <!-- Left -->
      <div class="me-5">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="https://www.facebook.com/Lt.Abdulrahman" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold"><span style="color: rgba(3, 68, 2, 0.90);">GNC</span>
                    <span style="color: #867777;">DRIVEHUB</span></h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
            ParkMobile puts the power to park in your hands. Whether you're looking for a spot now or reserving a spot for later, 
            ParkMobile has you covered.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Location</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="https://www.google.com/maps/place/Guagua+National+Colleges/@14.9649741,120.6335767,16.5z/data=!4m9!1m2!2m1!1smap+guagua+national+college!3m5!1s0x339658c439ada8e5:0x5e37114a5e5a2b18!8m2!3d14.966247!4d120.6350055!16s%2Fm%2F06zt3vs?entry=ttu" target="_blank" class="text-dark">Guagua National College</a>
            </p>
            <p>
              <a href="https://www.google.com/maps/place/Guagua,+Pampanga/@14.9644386,120.6332002,15.25z/data=!4m9!1m2!2m1!1smap+guagua+national+college!3m5!1s0x33965f6a9f54e5f7:0x90d0140e5065dc4d!8m2!3d14.9661601!4d120.6332117!16zL20vMDZwajNk?entry=ttu" target="_blank" class="text-dark">Guagua</a>
            </p>
            <p>
              <a href="https://www.google.com/maps/place/Pampanga/@15.0574292,119.5192481,9.46z/data=!4m6!3m5!1s0x3396f4848d776319:0x55a57880b7da26f8!8m2!3d15.079409!4d120.6199895!16zL20vMDFsd2Zy?entry=ttu" target="_blank"  class="text-dark">Pampanga</a>
            </p>
            <p>
              <a href="https://www.google.com/maps/@14.9679993,120.6352472,3a,75y,148.68h,74.42t/data=!3m6!1e1!3m4!1sJfXnN1jpNl_eRlG42FGi9A!2e0!7i16384!8i8192?entry=ttu" target="_blank" class="text-dark">GNCI Parking</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Support</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-dark">Login/sign up</a>
            </p>
            <p>
              <a href="#!" class="text-dark">About Us</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Social</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> Guagua, Pampanga, PH</p>
            <p><i class="fas fa-envelope mr-3"></i> gncdrivehub@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 047 1551</p>
            <p><i class="fas fa-print mr-3"></i> + 0921 530 7561</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2024 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/"
         >GNCDrivehub.com</a
        >
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  <?php } ?>
</div>
<!-- End of .container -->
    </section>

</body>

<script>
    function myFunction() {
        var x = document.getElementById("mypassword");
        if (x.className === "topnav") {
             x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }

      function myFunction() {
      var x = document.getElementById("mypassword");

      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
</script>
</html>