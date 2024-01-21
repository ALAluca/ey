<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

            <div class="container " id="back"> 
                <img src="img/GNCbg.jpg" alt="">
            </div>

            <div class="activity" id="content">
                <div class="activity-data">
                    <h1 class="txt1">BOOK, PARK AND GO.</h1>
                </div>
                <div>
                    <p>GNC Drivehub makes it easy to find parking lot <br> and you can reserve spots ahead of time.</p>
                <button>Learn More</button>
                
                </div>
    </section>

    <section class="crd container">
        <div class="row container">
            <div class="cl-3">
                <div class="crd1">
                <img src="img/book.jpg" alt="John" style="width:100%">
                <h1>Pre Book Your Space</h1>
                <p class="title">Use our search tool to locate a pre-bookable parking slot</p>
                <div style="margin: 24px 0;">
                    <a href="#"><i class="fa fa-dribbble"></i></a> 
                    <a href="#"><i class="fa fa-twitter"></i></a>  
                    <a href="#"><i class="fa fa-linkedin"></i></a>  
                    <a href="#"><i class="fa fa-facebook"></i></a> 
                </div>
                <p><button class="crdbtn">Read More</button></p>
                </div>
            </div>
        </div>

        <div class="row container">
            <div class="cl-3">
                <div class="crd2">
                <img src="img/parking.jpg" alt="John" style="width:100%">
                <h1>Quick & Easy Parking</h1>
                <p class="title">makes parking easy, simply find a park and start your parking.</p>
                <div style="margin: 24px 0;">
                    <a href="#"><i class="fa fa-dribbble"></i></a> 
                    <a href="#"><i class="fa fa-twitter"></i></a>  
                    <a href="#"><i class="fa fa-linkedin"></i></a>  
                    <a href="#"><i class="fa fa-facebook"></i></a> 
                </div>
                <p><button class="crdbtn">Read More</button></p>
                </div>
            </div>
        </div>

        <div class="row container">
            <div class="cl-3">
                <div class="crd3">
                <img src="img/guard.jpg" alt="John" style="width:100%">
                <h1>Safe & Secure</h1>
                <p class="title">Secure parking places for Vehicle and commercial Motorcycles has been listed as a top priority in the GNCDrivehub</p>
                <div style="margin: 24px 0;">
                    <a href="#"><i class="fa fa-dribbble"></i></a> 
                    <a href="#"><i class="fa fa-twitter"></i></a>  
                    <a href="#"><i class="fa fa-linkedin"></i></a>  
                    <a href="#"><i class="fa fa-facebook"></i></a> 
                </div>
                <p><button class="crdbtn">Read More</button></p>
                </div>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>