<?php  include('server.php');?>
 
<!DOCTYPE html>
<html>

<head>
	<title>Member Login</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<!-- <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet"> -->
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<img class="wave" src="wave.png">
	<div class="container">
		<div class="img">
			<img src="Working-Out.svg">
		</div>
		<div class="login-content">
			<form action="member.php" method="POST">
			<?php include('error.php')?>
				<img src="avatar.svg">
				<h2 class="title">Welcome</h2>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>Username</h5>
						<input type="text" id="username" name="username" class="input"required >
					</div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>Password</h5>
						<input type="password" id="password" name="password" class="input" required>
					</div>
				</div>
				<button type="submit" class="btn" name="login"> Login</button>
				<!-- <input type="submit" class="btn" value="Login"> -->
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