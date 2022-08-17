<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <title>Document</title>
</head>

<body>

    <!-- nav -->
    <nav id="home">
        <a href="index.html"><img src="images/logo.png"></a>
        <div class="nav-links" id="navLinks">
            <i class="fa-solid fa-xmark" onclick="hideMenu()"></i>
            <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#book">BOOK</a></li>
                <li><a href="#contact">CONTACT</a></li>
                <?php
            if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
            {
      
               echo' <li><a href="components/login.php">MY BOOKING</a></li>';
            }
           else
           {
              echo' <li><a href="#">MY BOOKING</a></li>';
      
        
           } ?>

            </ul>
        </div>

        <?php
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
    {
      echo '<div class="signin">
   <a href="components/login.php">Sign In</a>
      </div>';

    }
     else
     {

       echo '<div class="logout">
        <a href="components/logout.php">Log out</a>
      </div>';
     } ?>

        <i class="fa-solid fa-bars" onclick="showMenu()"></i>
    </nav>

    <!-- Landing -->

    <section class="landing">
        <div class="des">
            <h1>Here To Make Your Life Easier!</h1>
            <h3>Book Courts to Play At!</h3>
            <h3>Track Bookings, Teams and Sports!</h3>
            <a href="#book">Get Started</a>
        </div>
        <div class="play"></div>
    </section>


    <!-- About -->

    <section class="about" id="about">
        <div class="about-container">
            <div class="activity-icon">
                <div class="activity-content">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <h1>Search</h1>
                </div>
                <div class="activity-content">
                    <i class="fa-solid fa-calendar-check"></i>
                    <h1>Book</h1>
                </div>
                <div class="activity-content">
                    <i class="fa-solid fa-futbol"></i>
                    <h1>Play</h1>
                </div>
            </div>

            <div class="activity-des">
                <h1>The Easiest Way To</h1>
                <div class="list">
                    <ul>
                        <li>
                            <h3>Find venues</h3>
                        </li>
                        <li>
                            <h3>Invite players</h3>
                        </li>
                        <li>
                            <h3>Challenge teams</h3>
                        </li>
                        <li>
                            <h3>Participate in list of Events</h3>
                        </li>
                        <li>
                            <h3>& Much More</h3>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- Services -->

    <h1 class="head" id="book">Start Your Booking</h1>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <img src="images/Bigfoot-futsal.jpg" alt="rover" />
            </div>
            <div class="card-body">
                <div class="namerate">
                    <h3>Bigfoot Futsal</h3>
                    <div class="ratings">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
                <div class="details">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Dasharath Marg, Dharan</span>
                </div>
                <div class="details">
                    <i class="fa-solid fa-phone"></i>
                    <span>025-521766</span>
                </div>
                <?php
                if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
                 {
                     echo ' <a href="components/login.php" class="book">Book Now</a>';
                 
                 }
                  else
                  {
                       echo ' <a href="components/booking.php" class="book">Book Now</a>';
                       
                   } ?>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <img src="images/Dharan-futsal.jpg" alt="rover" />
            </div>
            <div class="card-body">
                <div class="namerate">
                    <h3>Dharan Futsal</h3>
                    <div class="ratings">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
                <div class="details">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Lok Path, Dharan</span>
                </div>
                <div class="details">
                    <i class="fa-solid fa-phone"></i>
                    <span>025-571565</span>
                </div>
                <?php
                if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
                 {
                     echo ' <a href="components/login.php" class="book">Book Now</a>';
                 
                 }
                  else
                  {
                       echo ' <a href="components/booking.php" class="book">Book Now</a>';
                       
                   } ?>

            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <img src="images/BB-futsal.jpg" alt="rover" />
            </div>
            <div class="card-body">
                <div class="namerate">
                    <h3>B.B. Futsal</h3>
                    <div class="ratings">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                </div>
                <div class="details">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Punya Marga, Dharan</span>
                </div>
                <div class="details">
                    <i class="fa-solid fa-phone"></i>
                    <span>9811093959</span>
                </div>
                <?php
                if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
                 {
                     echo ' <a href="components/login.php" class="book">Book Now</a>';
                 
                 }
                  else
                  {
                       echo ' <a href="components/booking.php" class="book">Book Now</a>';
                       
                   } ?>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <img src="images/Hamro-futsal.jpg" alt="rover" />
            </div>
            <div class="card-body">
                <div class="namerate">
                    <h3>Hamro Futsal</h3>
                    <div class="ratings">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                </div>
                <div class="details">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Sabhagriha Marg, Dharan</span>
                </div>
                <div class="details">
                    <i class="fa-solid fa-phone"></i>
                    <span>9842055410</span>
                </div>
                <?php
                if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
                 {
                     echo ' <a href="components/login.php" class="book">Book Now</a>';
                 
                 }
                  else
                  {
                       echo ' <a href="components/booking.php" class="book">Book Now</a>';
                       
                   } ?>
            </div>
        </div>

        <!-- About -->

        <section class="description">
            <h2>Booking Now Made A Lot Easier!</h2>
            <a href="#book"> Book Now</a>
        </section>

        <!-- Contact -->

        <section class="contact" id="contact">
            <div class="contact-about">
                <h3>About US</h3>
                <p>We are the easiest way to find playing spaces around you. Find venues, invite players, challenge
                    teams, participate in a list of events and find playing spaces around you.</p>

            </div>
            <div class="contact-contact">
                <h3>Contact US</h3>
                <div class="log">
                    <i class="fa-solid fa-envelope" aria-hidden="true"></i>
                    <p>bookfutsal@gmail.com</p>
                </div>
                <div class="log">
                    <i class="fa-solid fa-phone"></i>
                    <p>9815406495</p>
                </div>
                <div class="icons">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-linkedin"></i>
                </div>
            </div>
        </section>
        <footer>Made with <i class="fa-solid fa-heart"></i></footer>

        <!-- JavaScript -->

        <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.display = "block";
            navLinks.style.position = "fixed";
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.display = "none";
            navLinks.style.right = "-200px";
        }
        </script>

</body>

</html>