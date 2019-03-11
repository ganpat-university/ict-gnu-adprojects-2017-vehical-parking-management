<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Create Account</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('inc/head.php');
	?>
</head>
<body>
	<section id="container">
	<?php
			include('inc/header.php');
	?>
	<section id="content">
	<img src="src/bg.png" style="position:absolute; z-index:-1; margin:0;"/>
		<div class="left-signup">
		</div>
		<div class="left-signup">
		<p class="head">New Account Registration</p>
		<form id="registration" action="proc/reg.php" method="post">
			<input type="text" name="fname" value="" placeholder="First Name"  maxlength="20" pattern="[A-Za-z]{1,20}" required/>
			<input type="text" name="lname" value="" placeholder="Last Name"  maxlength="20" pattern="[A-Za-z]{1,20}" required/>
			<br>
			<input type="email" name="email" value="" placeholder="Email Address" required/>
			<input type="text" name="phone" value="" placeholder="Phone Number" pattern="[789][0-9]{9}" maxlength="10" required/>
			<input type="password" name="password"value="" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required/>
			<input type="text" name="plate" value="" placeholder="Car No." pattern="^[A-Z]{2}\s[0-9]{2}\s[A-Z]{2}\s[0-9]{4}$"  required/>
			<input type="Submit" name="Submit" value="Create Account"/>
				
		</form>
		</div>
	</section>
	</section>
</body>
</html>