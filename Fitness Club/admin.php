<?php include("server2.php");?>
<!DOCTYPE html>
<html>

<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<!-- <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet"> -->
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <script src="adminlogin.js"> </script> -->
</head>

<body>
	<img class="wave" src="wave.png">
	<div class="container">
		<div class="img">
			<img src="login.svg">
		</div>
		<div class="login-content">
			<form action="admin.php" method="POST">
				<img src="avatar.svg">
				<h2 class="title">Welcome</h2>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>Username</h5>
						<input type="text" name="username" class="input" id="username"required>
					</div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>Password</h5>
						<input type="password" name="password" class="input" id="password"required>
					</div>
				</div>
				<button  type="submit" class="btn" value="login" name="login" > Login</button>
			</form>
		</div>
	</div>
	<script type="text/javascript">
		const inputs = document.querySelectorAll(".input");


		function addcl() {
			let parent = this.parentNode.parentNode;
			parent.classList.add("focus");
		}

		function remcl() {
			let parent = this.parentNode.parentNode;
			if (this.value == "") {
				parent.classList.remove("focus");
			}
		}


		inputs.forEach(input => {
			input.addEventListener("focus", addcl);
			input.addEventListener("blur", remcl);
		});
	</script>
</body>

</html>