<?php
session_start();
$booked=false;
$alreadyBooked=false;

if($_SERVER["REQUEST_METHOD"]== 'POST')
{
  include '_dbconnect.php';
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $s = "select * from bigfoot_futsal_info where date = '$date' && time='$time'";
  $result = mysqli_query($con, $s);

  $num = mysqli_num_rows($result);
  if($num == 1){
   $alreadyBooked=true;
   //echo "Already booked";
  }
  else{
    $reg= "insert into bigfoot_futsal_info(name, email, number, date, time) values('$name', '$email', '$number', '$date', '$time') ";
    mysqli_query($con, $reg);
    $booked=true;
    // echo"Booking successful";
     }
  
 
}
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="booking">
        <div class="booking-card">
            <div class="booking-time">
                <div class="time-detail">
                    <a href="../index.php" class="close-btn3">Home</a>
                    <h2>TIME OPEN</h2>
                    <h3>Sunday - Friday</h3>
                    <p>Day (7am - 5pm) = Rs.1,200 </p>
                    <p>Night (5pm - 8pm) = Rs.1,200 </p>
                    <h3>Saturday</h3>
                    <p>Day (7am - 5pm) = Rs.1,500 </p>
                    <p>Night (5pm - 8pm) = Rs.1,700 </p>
                    <hr>
                    <h4>Call Us: 025-521766</h4>
                </div>
            </div>
            <div class="booking-form">
                <form class="form-detail" action="booking.php" method="post">
                    <h2>Book Online</h2>
                    <div class="form-field">
                        <p>Your Name</p>
                        <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-field">
                        <p>Your Email</p>
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-field">
                        <p>Your Number</p>
                        <input type="text" name="number" placeholder="Your Number" required>
                    </div>
                    <div class="form-field">
                        <p>Date</p>
                        <input type="date" name="date" required>
                    </div>
                    <div class="form-field">
                        <p>Time</p>
                        <select name="time" id="#" required>
                           <option value="7AM-8AM">7am - 8am</option>
                           <option value="8AM-9AM">8am - 9am</option>
                           <option value="9AM-10AM">9am - 10am</option>
                           <option value="10AM-11AM">10am - 11am</option>
                           <option value="11AM-12PM">11am - 12pm</option>
                           <option value="12PM-1PM">12pm - 1pm</option>
                           <option value="1PM-2PM">1pm - 2pm</option>
                           <option value="2PM-3PM">2pm - 3pm</option>
                           <option value="3PM-8PM">3pm - 4pm</option>
                           <option value="7PM-8PM">4pm - 5pm</option>
                           <option value="7PM-8PM">5pm - 6pm</option>
                           <option value="7PM-8PM">6pm - 7pm</option>
                           <option value="7PM-8PM">7pm - 8 pm</option>
                        </select>
                    </div>
                    <button class="submit">Book Now</button>
                </form>
                <div style = "position: absolute; top: 60px; color: red;">
                     <?php
                   if($booked){
                    echo '<div class="book_msg">
                    <p1> <strong style= "color:green;">Booking Successful!!!</strong></p1>
                    </div>';
                   }
                   if($alreadyBooked){
                    echo '<div class="alreadyBook_msg">
                    <p2><strong>This shift is already booked!!!</strong></p2>
                    </div>';
                   }
                   
                 ?> 
               </div>
                
            </div>

        </div>
    </div>
</body>
</html>