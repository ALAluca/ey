<?php 
         
         include("php/config.php");
         if(isset($_POST['submit'])){
            $slot = $_POST['slot'];
            $date = $_POST['date'];
            $starttime = $_POST['starttime'];
            $endtime = $_POST['endtime'];

        

         $verify_query = mysqli_query($con,"SELECT Slot,Date,StartTime,EndTime FROM customer WHERE Slot='$slot'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This slot is used, Try another One Please!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
         }
         else{

            mysqli_query($con,"INSERT INTO customer(Slot,Date,StartTime,EndTime) VALUES('$slot','$date','$starttime','$endtime')") or die("Error Occured");

            echo "<div class='message'>
                      <p>Book Successfully!</p>
                  </div> <br>";
            echo "<a href='home.php'><button class='btn'>Go Back</button>";
         

         }

         }else{
         
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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
                <section id="booking" class="container">
    <div class="row container">
        <div class="form-box">
            <header>Booking</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="slot">Choose a Slot:</label>
                    <select name="slot" id="slot" autocomplete="off" required>
                      <option value="Slot1">Slot 1</option>
                      <option value="Slot2">Slot 2</option>
                      <option value="Slot3">Slot 3</option>
                      <option value="Slot4">Slot 4</option>
                      <option value="Slot5">Slot 5</option>
                      <option value="Slot6">Slot 6</option>
                      <option value="Slot7">Slot 7</option>
                      <option value="Slot8">Slot 8</option>
                      <option value="Slot9">Slot 9</option>
                      <option value="Slot10">Slot 10</option>
                    </select>
                </div>

                <div class="field input">
                    <label for="date">Date of Book:</label>
                    <input type="date" name="date" id="date" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="starttime">Start Time</label>
                    <input type="time" name="starttime" id="starttime" min="8:00" max="20:00" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="endtime">End Time</label>
                    <input type="time" name="endtime" id="sendtime" autocomplete="off" required>
                </div>

                <div class="field">
                
                    <input type="submit" class="btn" name="submit" value="Register" required><span class="validity"></span>
                </div>
                <div class="links">
                    Already a book? <a href="booking.php">Check your Book</a>
                </div>
            </form>
        </div>
    </div>
  </section>
  <?php } ?>
                  </div>
    </section>

    <script src="script.js"></script>
</body>
</html>

<script src="script.js">
    
</script>
</html>