<?php
session_start();
if(isset($_SESSION['log']))
{
?>


<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<h1>Welcome !!!!</h1>
<a href="index.php" >logout</a>
</body>
</html>
<?php
}
else
{
	echo "please fill proper details";
	header("refresh:2;url=index.php");
}

?>