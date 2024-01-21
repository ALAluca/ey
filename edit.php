<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>

<?php 
               if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $birthdate = $_POST['birthdate'];
                $password = $_POST['password'];
                $contact = $_POST['contact'];
                $plateno = $_POST['plateno'];

                $id = $_SESSION['id'];

                $edit_query = mysqli_query($con,"UPDATE users SET Username='$username', Email='$email', BirthDate='$birthdate', Password='$password', Contact='$contact', PlateNo='$plateno' WHERE Id=$id ") or die("error occurred");

                if($edit_query){
                    echo "<div class='message'>
                    <p>Profile Updated!</p>
                </div> <br>";
              echo "<a href='home.php'><button class='btn'>Go Home</button>";
       
                }
               }else{

                $id = $_SESSION['id'];
                $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id ");

                while($result = mysqli_fetch_assoc($query)){
                    $res_Uname = $result['Username'];
                    $res_Email = $result['Email'];
                    $res_BirthDate = $result['BirthDate'];
                    $res_Password = $result['Password'];
                    $res_Contact = $result['Contact'];
                    $res_PlateNo = $result['PlateNo'];
                }

            ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="GS/style.css">

     

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>GNCDRIVEHUB</title> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="img/GNC.png" alt="">
            </div>

            <span style="color: rgba(3, 68, 2, 0.90);">GNC</span>
            <span style="color: #867777;">DRIVEHUB</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="home.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Home</span>
                </a></li>
                <li><a href="profile.php">
                    <i class="uil uil-user-circle"></i>
                    <span class="link-name">Profile</span>
                </a></li>
                <li><a href="booking.php">
                    <i class="uil uil-book-medical"></i>
                    <span class="link-name">My Booking</span>
                </a></li>
                <li><a href="parking.php">
                    <i class="uil uil-parking-circle"></i>
                    <span class="link-name">Parking slot</span>
                </a></li>
                <li><a href="edit.php">
                    <i class="uil uil uil-setting"></i>
                    <span class="link-name">Settings</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-question-circle"></i>
                    <span class="link-name">Help</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="php/logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
        </div>

        <div class="dash-content">
            <div class="overview">

                </div>
            </div>

            <div class="activity">
                <div class="activity-data">
                <div class="container" id="edit">
        <div class="box form-box">
        <header>Change Information</header>
        <form action="" method="post">
            <div class="field input">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" value="<?php echo $res_Uname; ?>" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="<?php echo $res_Email; ?>" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="birthdate">Birthdate</label>
                <input type="date" max="2013-01-02" name="birthdate" id="birthdate" value="<?php echo $res_BirthDate; ?>" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" min= "1" max="10" value="<?php echo $res_Password; ?>" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="password">Confirm Password</label>
                <input type="password" name="Confirm password" id="confirm_password" autocomplete="off" required>
            </div>
            

            <div class="field input">
                <label for="contact">Contact No.</label>
                <input type="tel" name="contact" id="contact" maxlength="11" value="<?php echo $res_Contact;?>" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="plateno">Plate Number</label>
                <input type="text" name="plateno" id="plateno" maxlength="6" value="<?php echo $res_PlateNo; ?>" style="text-transform:uppercase" autocomplete="off" required>
            </div>
            
            <div class="field">
                
                <input type="submit" class="btn" name="submit" value="Update" required>
            </div>
            
        </form>
    </div>
    <?php } ?>
                  </div>
    </section>

    <script src="script.js"></script>
</body>
</html>