
<?php
 if(isset($_POST['name'])){
 $server="localhost";
 $username="root";
 $password="";

 $con=mysqli_connect($server,$username,$password);

 $name =$_POST['name'];
 $mail =$_POST['mail'];
 $phone =$_POST['phone'];
 $message =$_POST['message'];

  $sql="INSERT INTO `feedback`.`feed` (`name`, `mail`, `phone`, `message`, `date/time`) VALUES ('$name', '$mail', '$phone', '$message', current_timestamp())";
  
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Website</title>
    <link rel="stylesheet" href="Style.css">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

</head>
 
<body> 
    <header>
        <div class="container">
            <div class="logo">
                <a href="">Fitness <span>Club</span></a>
            </div>
            <a href="javascript:void(0)" class="ham-burger">
                <span></span>
                <span></span>
            </a>
            <div class="nav">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#service">Services</a></li>
                    <li><a href="#schedule">Schedule</a></li>
                    <li><a href="#price">Price</a></li>
                    <li><a href="#login">Login</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>
    <!-- End Header  -->

    <!-- Start Home -->
    <section class="home wow flash" id="home">
        <div class="container">
            <h1 class="wow slideInLeft" data-wow-delay="1s">All<span> progress </span>takes place</h1>
            <h1 class="wow slideInRight" data-wow-delay="1s">outside the <span>comfort zone</span>
            </h1>
            
        </div>

    </section>
    <!-- End Home -->
    <!-- Start Service -->
    <section class="service" id="service">
        <div class="container">
            <div class="content">
                <div class="text box wow slideInLeft">
                    <h2>Services</h2>
                    <!-- <p>We provide best services to our members.we have bifurgate our services in four part.In the gym there is 24/7 Airconditioner and 
                    </p> -->

                </div>
                <div class="accordian box wow slideInRight">
                    <div class="accordian-container active">
                        <div class="head">
                            <h4>Cardiovascular Equipment</h4>
                            <span class="fa fa-angle-down"></span>
                        </div>
                        <div class="body">
                            <p>StepMill.  <br>
                                Air Bike. <br>
                                Treadmill. <br>
                                Exercise Bike.<br>
                                Schwinn Indoor Cycling Bike.<br>
                                Non-Motorized Treadmill. <br>
                                Samsara Fitness TrueForm Trainer.<br>
                                Peloton Bike. <br>
                                Spin Bike. <br>
                                9 Arc Trainer. <br>
                                Vertical Climber.<br>
                                 VersaClimber.</p>
                        </div>
                    </div>
                    <div class="accordian-container">
                        <div class="head">
                            <h4>Strength Training Equipment</h4>
                            <span class="fa fa-angle-up"></span>
                        </div>
                        <div class="body">
                            <p>Home Gyms. <br>
                                Exercise Sets. <br>
                                 Home Gym Stations. <br>
                                Core & Abdominal Trainers. <br>
                                Dumbbells. <br>
                                Weights. <br>
                                Hand Strengtheners. <br>
                                Benches. Adjustable Benches. <br>
                                 Olympic Weight Benches. <br>
                                Bars. <br>
                                Plates. <br></p>
                        </div>
                    </div>
                    <div class="accordian-container">
                        <div class="head">
                            <h4>Group Fitness Class</h4>
                            <span class="fa fa-angle-up"></span>
                        </div>
                        <div class="body">
                            <p>Yoga. <br>
                                Full Body Fusion. <br>
                                Circuit Training. <br>
                                HIIT.<br>
                                Cycling. <br>
                                Bootcamp. <br>
                                Zumba.</p>
                        </div>
                    </div>
                    <div class="accordian-container">
                        <div class="head">
                            <h4>Other Services</h4>
                            <span class="fa fa-angle-up"></span>
                        </div>
                        <div class="body">
                            <p>Steam bath <br>
                                locker room <br>
                                RO-WATER <br>
                                Sanitized Washroom <br>
                                On Floor Trainer <br>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service -->
    <!-- Start Schedule -->
    <section class="schedule" id="schedule">
        <div class="container">
            <div class="content">
                <div class="box text wow slideInLeft">
                    <h2>Classes Schedule</h2>
                    
                    <img src="schedule (1).jpg" alt="schedule" />
                </div>
                <div class="box timing wow slideInRight">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="day">Monday</td>
                                <td><strong>9:00 AM</strong></td>
                                <td>Body Building <br /> 9:00 to 10:00 AM</td>
                                <td>Room No:210</td>
                            </tr>
                            <tr>
                                <td class="day">Tuesday</td>
                                <td><strong>9:00 AM</strong></td>
                                <td>Body Building <br /> 9:00 to 10:00 AM</td>
                                <td>Room No:210</td>
                            </tr>
                            <tr>
                                <td class="day">Wednesday</td>
                                <td><strong>9:00 AM</strong></td>
                                <td>Body Building <br /> 9:00 to 10:00 AM</td>
                                <td>Room No:210</td>
                            </tr>
                            <tr>
                                <td class="day">Thursday</td>
                                <td><strong>9:00 AM</strong></td>
                                <td>Body Building <br /> 9:00 to 10:00 AM</td>
                                <td>Room No:210</td>
                            </tr>
                            <tr>
                                <td class="day">Friday</td>
                                <td><strong>9:00 AM</strong></td>
                                <td>Body Building <br /> 9:00 to 10:00 AM</td>
                                <td>Room No:210</td>
                            </tr>
                            <tr>
                                <td class="day">Saturday</td>
                                <td><strong>9:00 AM</strong></td>
                                <td>Body Building <br /> 9:00 to 10:00 AM</td>
                                <td>Room No:210</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- End Schedule -->
    <!-- Start Price -->
    <section class="price-package" id="price">
        <div class="container">
            <h2>Simple Packages(Cardio + Diet plan)</h2>
            <p class="title-p">This are the some planes,which include the cardio section.you don't get refund in some
                planes . </p>
            <div class="content">
                <div class="box wow bounceInUp">
                    <div class="inner">
                        <div class="price-tag">
                            10000rs/Month
                        </div>
                        <div class="img">
                            <img src="price1.jpg" alt="price" />
                        </div>
                        <div class="text">
                            <h3>Basic</h3>
                            <p>Gym and Cardio</p>
                            <p>2 diet plans</p>
                            <p>2 BMI Sessions</p>
                            <p>No Personal Training</p>
                            <p>No Refund</p>

                        </div>
                    </div>
                </div>
                <div class="box wow bounceInUp" data-wow-delay="0.2s">
                    <div class="inner">
                        <div class="price-tag">
                            15000rs/Month
                        </div>
                        <div class="img">
                            <img src="price2.jpg" alt="price" />
                        </div>
                        <div class="text">
                            <h3>Intermediate</h3>
                            <p>Gym and Cardio</p>
                            <p>3 diet plans</p>
                            <p>3 BMI Sessions</p>
                            <p>15 days Personal Training</p>
                            <p>Refund(Total amount of 50%)</p>

                        </div>
                    </div>
                </div>
                <div class="box wow bounceInUp" data-wow-delay="0.4s">
                    <div class="inner">
                        <div class="price-tag">
                            18000rs/Month
                        </div>
                        <div class="img">
                            <img src="price3.jpg" alt="price" />
                        </div>
                        <div class="text">
                            <h3>Advance</h3>
                            <p>Gym and Cardio</p>
                            <p>Prsonally diet plans</p>
                            <p>5 BMI Sessions</p>
                            <p>15 days PT + 10 days yoga sessions</p>
                            <p>Full Refund</p>

                        </div>
                    </div>
                </div>
            </div><br>
            <h2>Choose Your Personal Trainer</h2>
            <div class="content">
                <div class="box wow bounceInUp">
                    <div class="inner">
                        <div class="price-tag">
                            18000rs./Month
                        </div>
                        <div class="img" id="img1">
                            <img src="price4.jpg" alt="price" />
                        </div>
                        <div class="text">
                            <h3>Level 1 Trainer</h3>
                            <p>Fix time given by gym</p>
                            <p>3 days in a week</p>
                            <p>No Time Restrictions</p>
                            <p>Gym and Cardio </p>
                            <p>Service Locker Rooms</p>

                        </div>
                    </div>
                </div>
                <div class="box wow bounceInUp" data-wow-delay="0.2s">
                    <div class="inner">
                        <div class="price-tag">
                            24000rs./Month
                        </div>
                        <div class="img" id="img2">
                            <img src="price5.jpg" alt="price" />
                        </div>
                        <div class="text">
                            <h3>Level 2 Trainer</h3>
                            <p>Free to choose your time</p>
                            <p>4 days in a week</p>
                            <p>No Time Restrictions</p>
                            <p>Gym and Cardio</p>
                            <p>Service Locker Rooms</p>

                        </div>
                    </div>
                </div>
                <div class="box wow bounceInUp" data-wow-delay="0.4s">
                    <div class="inner">
                        <div class="price-tag">
                            30000rs./Month
                        </div>
                        <div class="img" id="img3">
                            <img src="price6.jpg" alt="price" />
                        </div>
                        <div class="text">
                            <h3>Level 3 Trainer</h3>
                            <p>Free to choose your time</p>
                            <p>5 days in a week</p>
                            <p>No Time Restrictions</p>
                            <p>Gym and Cardio</p>
                            <p>Service Locker Rooms</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Price -->
    <!-- Start Login -->
    <section class="login" id="login">
        <div class="container">
            <div id="logintext">
                <h1>Login Section</h1>
            </div><br>
            <div class="content">
                <div class="box wow bounceInUp">
                    <div class="inner">
                        <div class="img" >
                            <img src="about2.jpg" alt="login" >
                        </div>
                        <div class="text" >
                            <h1><a href="admin.php">Admin login</a></h1>
                        </div>
                    </div>
                </div>
                <div class="box wow bounceInUp" data-wow-delay="0.2s">
                    <div class="inner">
                        <div class="img">
                            <img src="about1.jpg" alt="login" />
                        </div>
                        <div class="text">
                            <h1><a href="trainer.php">Trainer login</a></h1>
                        </div>
                    </div>
                </div>
                <div class="box wow bounceInUp" data-wow-delay="0.4s">
                    <div class="inner">
                        <div class="img">
                            <img src="about3.jpg" alt="login" />
                        </div>
                        <div class="text">
                            <h1><a href="member.php">Member login</a></h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Login -->
    <!-- Start Contact -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="content">
                <div class="box form wow slideInLeft">
                    <form action="index.php" method="POST"> 
                    
                        <label>
                            <input placeholder="Enter Name" type="text" name="name" id="name"  required />
                        </label>
                        <label>
                            <input placeholder="Enter Email" type="email" name="mail" id="mail" required />
                        </label>
                        <label>
                            <input placeholder="Enter Mobile" type="text" name="phone" id="phone" maxlength = "10" pattern="[1-9]{1}[0-9]{9}" title="xxx xxx xxxx" required />
                        </label>
                        <label>
                        <textarea placeholder="Enter Message" type="text" name="message" id="message"
                                rows="7"
                                cols="50" 
                                name="comment" 
                                required></textarea>
        
                        </label>
                        <button type="submit" value="Submit">Send Message</button>
                        <?php
 if(isset($_POST['name'])){
    if(!$con){
        die("failed".mysqli_connect_error());
    }
    if($con->query($sql) == true){
        echo "Successfully Submitted";
    }
    else{
      echo "Error: $sql <br> $con->error";
    }
      $con->close();
 }
   ?>
                    </form>
                </div>
                <div class="box text wow slideInRight">
                    <h2>Get Connected with Gym</h2>
                    <p class="title-p">We like to solve your problems and and please help us to improve our gym with your feedbacks.</p>
                    <div class="info">
                        <ul>
                            <li><span class="fa fa-map-marker"></span><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.117558941452!2d72.52708985012137!3d23.019455422148155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e85ff7fb2a62d%3A0xf7060aff353ee519!2sXotika%20Gym%20Near%20Satellite%2C%20Prahladnagar%2C%20Ahmedabad%2C%20Gym%20Fitness%20Center%20for%20Men%2C%20Women%2C%20Ladies%2C%20Offers.!5e0!3m2!1sen!2sin!4v1617032438431!5m2!1sen!2sin" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe> </li>
                            <li><span class="fa fa-phone"></span> +91 9999999999</li>
                            <li><span class="fa fa-envelope"></span> info@gym.com</li>
                        </ul>
                    </div>
                    <!-- <div class="social">
                        <a href=""><span class="fa fa-facebook"></span></a>
                        <a href=""><span class="fa fa-linkedin"></span></a>
                        <a href=""><span class="fa fa-skype"></span></a>
                        <a href=""><span class="fa fa-youtube-play"></span></a>
                    </div> -->

                    <div class="copy">
                        Made By Rishi Patel & Zeel Thakkar
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact -->

    <!-- jquery -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {

            $(".ham-burger, .nav ul li a").click(function () {

                $(".nav").toggleClass("open")

                $(".ham-burger").toggleClass("active");
            })
        })
        $(".accordian-container").click(function () {
            $(".accordian-container").children(".body").slideUp();
            $(".accordian-container").removeClass("active")
            $(".accordian-container").children(".head").children("span").removeClass("fa-angle-down").addClass("fa-angle-up")
            $(this).children(".body").slideDown();
            $(this).addClass("active")
            $(this).children(".head").children("span").removeClass("fa-angle-up").addClass("fa-angle-down")
        })

    </script>
</body>

</html>

