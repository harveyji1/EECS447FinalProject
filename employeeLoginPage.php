<!DOCTYPE html>
<html>
<head>
	<title>Customer Login Page</title>
	<!--<script src="formChecker.js"></script>-->
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<form name="store" method="POST" action="employeeLogin.php">
			<h1>JINO SKI RESORTS EMPLOYEE LOGIN</h1></br>
			<?php if(isset($_GET['error'])){ ?>
			    <p class = "error"> <?php echo $_GET['error']; ?></p>
			    <?php } ?></br>
			<label for="email"><b>EMAIL ADDRESS*</b></label>
			<input type="email" placeholder="Enter Email" name="email" required>

			<label for="password"><b>PASSWORD*</b></label>
			<input type="password" id="password" placeholder="Enter Password" name="password" required>

			<button type="submit" id="subButton" value="Submit">SIGN IN</button>
			</br></br></br><button type="signupRedirect" id = "signup" onclick="location.href='signupPage.php';">CLICK HERE TO SIGN UP</button>
			</br><button type="customerRedirect" id = "customerlogin" onclick="location.href='customerLoginPage.php';">CLICK HERE FOR CUSTOMER LOGIN</button>
			</br><button type="signupRedirect" id = "homePage" onclick="location.href='customer/customerFrontend.php';">CLICK HERE TO CONTINUE WITHOUT SIGNING IN</button>
		</form>
	</div>
</body>
</html>
