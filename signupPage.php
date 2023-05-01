<!DOCTYPE html>
<html>
<head>
	<title>Customer Sign Up Page</title>
	<!--<script src="formChecker.js"></script>-->
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<form name="store" method="POST" action="signup.php">
			<h1>JINO SKI RESORTS SIGN UP</h1></br>
			<?php if(isset($_GET['error'])){ ?>
			    <p class = "error"> <?php echo $_GET['error']; ?></p> <!--this is the error class-->
			    <?php } ?></br>
			    
			<label for="fullName"><b>FIRST AND LAST NAME*</b></label>
			<input type="text" placeholder="Enter Full Name" name="fullName" required>
			
			<label for="dob"><b>DATE OF BIRTH</b></label>
			<input type="date" placeholder="Enter Date of Birth" name="dob" required>
			    
			<label for="email"><b>EMAIL ADDRESS*</b></label>
			<input type="email" placeholder="Enter Email" name="email" required>

			<label for="password"><b>PASSWORD*</b></label>
			<input type="password" id="password" placeholder="Enter Password" name="password" required>			

			<button type="submit" id="subButton" value="Submit">SIGN UP</button>
			</br></br></br> <button type="customerRedirect" id = "customerlogin" onclick="location.href='customerLoginPage.php';">CLICK HERE FOR CUSTOMER LOGIN</button>
			</br>
			<button type="employeeRedirect" id = "employeelogin" onclick="location.href='employeeLoginPage.php';">CLICK HERE FOR EMPLOYEE LOGIN</button>
		</form>
	</div>
</body>
</html>
