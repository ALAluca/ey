<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>

<?php 

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
                  <div class="m">
                    <h2>CONTACT INFORMATION</h2>
                    <div class="card">
                        <div class="card-body">
                            <i class="fa fa-pen fa-xs edit"></i>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Username</td>
                                        <td>:</td>
                                        <td><?php echo $res_Uname; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td><?php echo $res_Email; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>:</td>
                                        <td><?php echo $res_BirthDate; ?></td>
                                    </tr>
                                    <tr >
                                        <td>Password</td>
                                        <td>:</td>
                                        <td><?php echo $res_Password; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Contact No.</td>
                                        <td>:</td>
                                        <td><?php echo $res_Contact; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Plate Number</td>
                                        <td>:</td>
                                        <td><?php echo $res_PlateNo; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                          </div>
                      </div>
                  </div>
    </section>

    <script src="script.js"></script>
</body>
</html>
