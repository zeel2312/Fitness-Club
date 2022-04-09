<?php include("server2.php");?>

<!-- database for feedback/inquiries -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "feedback";
$con = mysqli_connect($servername, $username, $password, $database);
if (!$con){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
// else{
//     echo "Connection was successful<br>";
// }
$sqll = "SELECT * FROM `feed`";
$resultt = mysqli_query($con, $sqll);
$numm = mysqli_num_rows($resultt);
 ?>


<!DOCTYPE html>
<html lang="en"  overflow-y: scroll;>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style2.css">


</head>

<body >
<?php if(isset($_SESSION['username'])&&$_SESSION['username']=='admin'): ?>
    <section>
        <div class="navigate">
            <div id="text">
                <h1>Hello Admin</h1>
            </div>
            <div class="logout">
                <a  href="admin.php?logout='1'">Logout</a>
            </div>
        </div>
        <div class="wrapper">
            <div class="text">
                <div class="btns">
                    <a href="ttrainer.php"> Trainer</a>
                    <a href="tmember.php"> Member</a>
                </div>
            </div>
            <div class="inner">
                <h1>Feedbacks / Inquiries </h1>
                <div class="border"></div>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonialBox">
                                    <img src="right-quote.png" class="quote">
                                    <div class="content">
                                        <p>
                                            <?php
                                        if($numm>0){
                                            $row=mysqli_fetch_assoc($resultt);
                                            echo "(".$row['sr.no'].")"."<br>"."Name:- ". $row['name']."<br>"."Mail.ID:- ". $row['mail']."<br>"."Contact:- ".$row['phone']."<br>"."Date/Time:- ".$row['date/time']."<br>"."<br>"."<br>".$row['message'];
                                        }
                                                ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonialBox">
                                    <img src="right-quote.png" class="quote">
                                    <div class="content">
                                        <p>
                                            <?php
                                            $row=mysqli_fetch_assoc($resultt);
                                            echo "(".$row['sr.no'].")"."<br>"."Name:- ". $row['name']."<br>"."Mail.ID:- ". $row['mail']."<br>"."Contact:- ".$row['phone']."<br>"."Date/Time:- ".$row['date/time']."<br>"."<br>"."<br>".$row['message'];
                                                ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonialBox">
                                    <img src="right-quote.png" class="quote">
                                    <div class="content">
                                        <p>
                                            <?php
                                    
                                            $row=mysqli_fetch_assoc($resultt);
                                            echo "(".$row['sr.no'].")"."<br>"."Name:- ". $row['name']."<br>"."Mail.ID:- ". $row['mail']."<br>"."Contact:- ".$row['phone']."<br>"."Date/Time:- ".$row['date/time']."<br>"."<br>"."<br>".$row['message'];
                                                ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonialBox">
                                    <img src="right-quote.png" class="quote">
                                    <div class="content">
                                        <p>
                                            <?php
                                    
                                            $row=mysqli_fetch_assoc($resultt);
                                            echo "(".$row['sr.no'].")"."<br>"."Name:- ". $row['name']."<br>"."Mail.ID:- ". $row['mail']."<br>"."Contact:- ".$row['phone']."<br>"."Date/Time:- ".$row['date/time']."<br>"."<br>"."<br>".$row['message'];
                                                ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonialBox">
                                    <img src="right-quote.png" class="quote">
                                    <div class="content">
                                        <p>
                                            <?php
                                    
                                            $row=mysqli_fetch_assoc($resultt);
                                            echo "(".$row['sr.no'].")"."<br>"."Name:- ". $row['name']."<br>"."Mail.ID:- ". $row['mail']."<br>"."Contact:- ".$row['phone']."<br>"."Date/Time:- ".$row['date/time']."<br>"."<br>"."<br>".$row['message'];
                                                ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>

    </section>

    <?php endif ?>
	<?php if(!isset($_SESSION['username'])): ?>
        <link rel="stylesheet" href="Style.css">
        <header>
        <div class="container">
            <div class="logo">
                <a href="adminw.php">ADMIN LOGIN NEEDED </a>
            </div>
            <a href="javascript:void(0)" class="ham-burger">
                <span></span>
                <span></span>
            </a>
            <div class="nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php/#service">Services</a></li>
                    <li><a href="index.php/#schedule">Schedule</a></li>
                    <li><a href="index.php/#price">Price</a></li>
                    <li><a href="index.php/#login">Login</a></li>
                    <li><a href="index.php/#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>
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
    <?php endif?>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js">  </script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 2,
                slideShadows: true,
            },
            loop: true,
        });
    </script>
    <script>
        const buttons = document.querySelectorAll("a");
        buttons.forEach((button) => {
            button.onclick = function (e) {
                let x = e.clientX - e.target.offsetLeft;
                let y = e.clientY - e.target.offsetTop;
                let ripple = document.createElement("span");
                ripple.style.left = `${x}px`;
                ripple.style.top = `${y}px`;
                this.appendChild(ripple);
                setTimeout(function () {
                    ripple.remove();
                }, 600); // 1second = 1000ms
            }
        });

    </script>

</body>

</html>