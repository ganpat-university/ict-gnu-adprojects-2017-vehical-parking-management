	<?php  
if (session_status() == PHP_SESSION_NONE) {
    session_start();
		if(isset($_SESSION['phone']))
			{
			} 
			else
			{
				//header("Location:index.php");

				}
}
 ?>
	
	<header>
		<div id="logo">
			
		</div>
		
		
		<?php 
			if(isset($_SESSION['phone']))
			{
			?>
			<div class="logged-in">
				<div>Username: <?php echo $_SESSION['phone']; ?> </div>
				<div><a href="profile.php">My Profile</a></div>
				<div><a href="proc/logout.php">Sign Out</a></div>
			</div>
			
			<?php
			} 
			else
			{
			?>	
			<button class="create_account">Create Account</button>
				<section class="log-form">
		<form class="log-in" action="proc/index.php" method="POST">
			<input type="text" name="phone"  maxlength="20" pattern="[A-Za-z]{1,20}" value="" required/>
			<input type="password" name="password" value=""   required/>
			<input type="Submit" name="Submit" value="Log In" onclick="index()" />
			<br />
			
			<p>User Name</p><p>password</p>
		</form>
		</section>
			<?php	
			}
			?>
		<nav>
			<ul>
				<li class="hor"><a href="index.php">Home</a></li>
			<!--	<li class="hor dropdown"><a href="streetlayout.php">Street Layout</a> </li>-->
		      <?php
				// if(isset($_SESSION['phone']))
				//{
				?> 
				<li class="hor dropdown"><a href="proc/check_book.php">Book Parking Lot</a>
				</li>
				<li class="hor dropdown"><a href="unbook.php">Unbook Parking Lot</a>
				</li>
				<?php // } ?>
				<li class="hor dropdown"><a href="contact.php">Contact Us</a>
				</li>
				
			</ul>
		</nav>
	</header>
	
	<section id="hinges">
		
	</section>