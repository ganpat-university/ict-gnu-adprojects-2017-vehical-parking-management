<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Contact Us</title>
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
	<div>
		<p class="phead"> Contact Us </p>
		<form id="contact_form" action="proc/contact.php" method="POST">
			<label for="name">Name : <span> <input type="text" name="name" value="" maxlength="20" pattern="[A-Za-z]{1,20}"required /> 
			
			</span></label>
			<label for="email">Your Phone : <span><input type="text" name="phone" value="" maxlength="10" pattern="[789][0-9]{9}" required /></span> </label>
			<label for="text">Feedback :<span> <textarea name="msg" value="" required></textarea> </span></label>
			<label for="submit"><span><input type="submit" name="submit" value="Submit" required /> </span></label>
		</form>
	</div>
	</section>
	</section>
</body>
</html>