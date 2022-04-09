<?php
	session_id("trainer");
	session_start();
	$username="";
	// $email="";
	//$B_Year="";
	$errors=array();

	$db=mysqli_connect('localhost','root','','tlogin');
	

	if(isset($_POST['login'])){
		$username=mysqli_real_escape_string($db,$_POST['username']);
		$password=mysqli_real_escape_string($db,$_POST['password']);
		//ensure that form fields are filled properly
		if(count($errors)==0){
			//$password=($password);
			$query="SELECT * FROM trainer WHERE username='$username' AND lpassword='$password'";
			$result=mysqli_query($db,$query);
			$passwordin=password_hash($password,PASSWORD_DEFAULT);
			}
			//$password=password_hash($password,PASSWORD_DEFAULT);
			if(mysqli_num_rows($result)==1){
				$_SESSION['username']=$username;
				//$_SESSION['success']="You are now logged in";
				header('location: trainerw.php ');
			}
			else{
				array_push($errors,"Wrong username/password combination");
			}
		}


//logout
if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header('location: trainer.php');
}

?>