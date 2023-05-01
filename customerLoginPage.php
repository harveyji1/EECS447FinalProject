<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Customer Login Page</title>
	<!--<script src="formChecker.js"></script>-->
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<form name="login" method="POST" action="customerLogin.php">
			<h1>JINO SKI RESORTS LOGIN</h1></br>
			<?php if(isset($_GET['error'])){ ?>
			    <p class = "error"> <?php echo $_GET['error']; ?></p>
			    <?php } ?>
			    </br>
			<label for="email"><b>EMAIL ADDRESS*</b></label>
			<input type="email" placeholder="Enter Email" name="email" required>

			<label for="password"><b>PASSWORD*</b></label>
			<input type="password" id="password" placeholder="Enter Password" name="password" required>

			<button type="submit" id="subButton" value="Submit">SIGN IN</button>
			</br></br></br><button type="signupRedirect" id = "signup" onclick="location.href='signupPage.php';">CLICK HERE TO SIGN UP</button>
			</br><button type="employeeRedirect" id = "employeelogin" onclick="location.href='employeeLoginPage.php';">CLICK HERE FOR EMPLOYEE LOGIN</button>
			</br><button type="signupRedirect" id = "homePage" onclick="location.href='customer/customerFrontend.php';">CLICK HERE TO CONTINUE WITHOUT SIGNING IN</button> <!--FORMAT THIS BUTTON PLEASE, different color>
		</form>
	</div>
</body>
</html>
