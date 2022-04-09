<?php
 if(isset($_POST['fullname'])){
 $server="localhost";
 $username="root";
 $password="";

 $con=mysqli_connect($server,$username,$password);

 $fullname =$_POST['fullname'];
 $username =$_POST['username'];
 $mail =$_POST['mail'];
 $number =$_POST['number'];
 $lpassword=mysqli_real_escape_string($con,$_POST['lpassword']);

 $salary =$_POST['salary'];
 $payday =$_POST['payday'];

  $sql="INSERT INTO `tlogin`.`trainer` ( `fullname`, `username`, `mail`, `number`, `lpassword`, `salary`, `payday`, `created_at`) VALUES ( '$fullname', '$username', '$mail', '$number', '$lpassword', '$salary', '$payday', current_timestamp())";
  
 }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Trainer Registration Form  </title>
    <link rel="stylesheet" href="style3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="passwordvalidate.js"> </script>
</head>

<body>
    <div class="container">
        <div class="title">Registration</div>
        <div class="content">
            <form action="rtrainer.php" method="POST">
                <div class="user-details">
                   
                <div class="input-box">
                            <span class="details">Full Name</span>
                            <input type="text" name="fullname" id="fullname" placeholder="Enter your name" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Username</span>
                            <input type="text" name="username" id="username" placeholder="Enter your username"required >
                        </div>
                        <div class="input-box">
                            <span class="details">Email</span>
                            <input type="email" name="mail" id="mail" placeholder="Enter your email"required >
                        </div>
                        <div class="input-box">
                            <span class="details">Phone Number</span>
                            <input type="tel" name="number" id="number" placeholder="Enter your number" maxlength="10" pattern="[1-9]{1}[0-9]{9}" title="xxx xxx xxxx"required >
                        </div>
                        <div class="input-box">
                            <span class="details">Password</span>
                            <input type="password" name="lpassword" id="lpassword" placeholder="Enter your password" minlength="8" required >
                        </div>
                        <div class="input-box">
                            <span class="details">Confirm Password</span>
                            <input type="password" name="confirm_password" id="confirm_password" placeholder="Enter your password" minlength="8" required >
                        </div>
                        
                        <div class="input-box">
                            <span class="details">Salary</span>
                            <input type="number" name="salary" id="salary" placeholder="Trainers Salary"required >
                        </div>
                        <div class="input-box">
                            <span class="details">Pay Day</span>
                            <input type="date" name="payday" id="payday" required >
                        </div>
                   
                </div>
                <div class="gender-details">
                    <input type="radio" name="gender" id="dot-1">
                    <input type="radio" name="gender" id="dot-2">
                    <input type="radio" name="gender" id="dot-3">
                    <span class="gender-title">Gender</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Female</span>
                        </label>
                        <label for="dot-3">
                            <span class="dot three"></span>
                            <span class="gender">Prefer not to say</span>
                        </label>
                    </div>
                </div>
                <!-- <div class="button">
          <input type="submit" value="Register">
        </div> -->
        <button type="submit"  class="btn" value="submit" name="register2" onclick="validatePassword()">Register</button>
        <?php
 if(isset($_POST['fullname'])){
    if(!$con){
        die("failed".mysqli_connect_error());
    }
    if($con->query($sql) == true){
        // echo "Successfully Registered";
    }
    else{
      echo "Error: $sql <br> $con->error";
    }
      $con->close();
 }
   ?>  
            </form>
        </div>
    </div>

</body>

</html>

