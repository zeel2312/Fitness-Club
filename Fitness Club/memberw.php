<?php include("server.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Member Login</title>
  <link rel="stylesheet" href="memberw.css">
  <link rel="stylesheet" href="slider.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
<?php if(isset($_SESSION['username'])): ?>
  <nav>
    <div class="wrapper">
      <div class="logo"><a href="indexx.php">Fitness <span>Club</span></a></div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <span style="color:white;" class="navbar-text" class="nav-item">
						    Welcome <strong style="color:white;"><?php echo $_SESSION['username']; ?></strong>
						</span>
        <li><a href="memberw.php">Home</a></li>
        <li><a href="indexx.php">Calculate BMI</a></li>
        <li>
          <a href="#" class="desktop-item">Diet Plans</a>
          <input type="checkbox" id="showDrop">
          <label for="showDrop" class="mobile-item">Dropdown Menu</label>
          <ul class="drop-menu">
            <li><a href="weightloss.php">Weight Loss</a></li>
            <li><a href="weightgain.php">Weight Gain</a></li>
            <!-- <li><a href="workout.php">WorkOut Plan</a></li> -->
          </ul>
        </li>
        <li>
        
        <li>
          <a href="#" class="desktop-item">Workouts</a>
          <input type="checkbox" id="showMega">
          <label for="showMega" class="mobile-item">Info</label>
          <div class="mega-box">
            <div class="content">
              
              <div class="row">
                <header>Upper Body</header>
                <ul class="mega-links">
                  <!-- <li><a href="#">Biceps</a></li>
                  <li><a href="#">Tricesps</a></li> -->
                  <li><a href="arms.php">Arms</a></li>
                  <li><a href="chest.php">Chest</a></li>
                  <li><a href="back.php">Back</a></li>
                  <li><a href="shoulder.php">Shoulders</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Lower Body</header>
                <ul class="mega-links">
                  <!-- <li><a href="#">Calf Muscles</a></li>
                  <li><a href="#">Thai Muscles</a></li> -->
                  <li><a href="legs.php">Legs</a></li>
                  <!-- <li><a href="#">Website design</a></li> -->
                </ul>
              </div>
              <div class="row">
                <header>Abs </header>
                <ul class="mega-links">
                  <li><a href="#"></a></li>
                  <!-- <li><a href="#">Upper</a></li>
                  <li><a href="#">Lower</a></li>
                  <li><a href="#">Six Pack</a></li>
                  <li><a href="#">Obliques</a></li>
                  <li><a href="#">Complete</a></li> -->
                  <li><a href="core.php">Core</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Sport Specifics</header>
                <ul class="mega-links">
                  <li><a href="functionalites.php">Functionalities</a></li>
                  <!-- <li><a href="#">8 weeks</a></li>
                  <li><a href="#">12 weeks</a></li>
                  <li><a href="#">15 weeks</a></li> -->
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li>
            <li><span class="navbar-text" class="nav-item">
					      <a class="nav-link" href="member.php?logout='1'">Logout</a>
					    </span>
        </li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
  <main>
    <div class="body-text">
      <!--image slider start-->
      <div class="slider">
        <div class="slides">
          <!-- radio buttons start-->
          <input type="radio" name="radio-btn" id="radio1">
          <input type="radio" name="radio-btn" id="radio2">
          <input type="radio" name="radio-btn" id="radio3">
          <input type="radio" name="radio-btn" id="radio4">
          <input type="radio" name="radio-btn" id="radio5">
          <input type="radio" name="radio-btn" id="radio6">
          <!--radio buttons end -->
          <!--slide images start-->
          <div class="slide first">
            <img src="1.jpg" alt="">
          </div>
          <div class="slide">
            <img src="2.jpg" alt="">
          </div>
          <div class="slide">
            <img src="3.jpg" alt="">
          </div>
          <div class="slide">
            <img src="4.jpg" alt="">
          </div>
          <div class="slide">
            <img src="5.jpg" alt="">
          </div>
          <div class="slide">
            <img src="6.jpg" alt="">
          </div>

          <!--slide images end-->
          <!--automatic navigation start-->
          <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
            <div class="auto-btn5"></div>
            <div class="auto-btn6"></div>
          </div>
          
      </div>
    </div>
  </main>


  <?php endif ?>
	<?php if(!isset($_SESSION['username'])):?>
        <link rel="stylesheet" href="Style.css">
        <header>
        <div class="container">
            <div class="logo">
                <a href="member.php">MEMBER LOGIN NEEDED</a>
            </div>
            <a href="javascript:void(0)" class="ham-burger">
                <span></span>
                <span></span>
            </a>
            <div class="nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php#service">Services</a></li>
                    <li><a href="index.php#schedule">Schedule</a></li>
                    <li><a href="index.php#price">Price</a></li>
                    <li><a href="index.php#login">Login</a></li>
                    <li><a href="index.php#contact">Contact</a></li>
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

  <!--image slider end-->
  <script type="text/javascript">
    var counter = 1;
    setInterval(function () {
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if (counter > 6) {
        counter = 1;
      }
    }, 3000);
  </script>

</body>

</html>