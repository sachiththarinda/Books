<!DOCTYPE html>
<html>
<head>
	
<link rel="stylesheet" type="text/css" href="css/signup.css">
<script src="signup.js"></script>

</head>
<body style="background-image: url(Harry-Potter-Book-List_BL_16-9.jpg.corpimagerendition.xxl.1400.788.png);,background-size: cover;">

<?php include 'navbar.php'?>

<<<<<<< HEAD
<form method="post" action="tables/register.php" onsubmit="return checkForm(this);" style="background-image: url(images/Harry-Potter-Book-List_BL_16-9.jpg.corpimagerendition.xxl.1400.788.png);,background-size: cover;">
=======
<<<<<<< HEAD
<form ... onsubmit="return checkForm(this);">
	<h1 align="center">User Registration</h1>
=======
<form method="post" action="tables/register.php" onsubmit="return checkForm(this);" style="background-image: url(Harry-Potter-Book-List_BL_16-9.jpg.corpimagerendition.xxl.1400.788.png);,background-size: cover;">
>>>>>>> c5d7a5fc6d322c17150f23d83b0af2d3c45d3690
>>>>>>> e90f9e0d4e18a13cd3a8852704e70f553a590bff
<table  class="login"  align="center" >
<tr><th colspan=2></th></tr>

<tr><td><h4>User Name</h4></td><td><input type="text" name="uname" placeholder="User Name"></td></tr><br>



<tr><td><h4>E-mail</h4></td><td><input type="text" name="email" placeholder=" E-mail"></td></tr>

<tr><td><h4>Phone</h4></td><td><input type="text" name="pno" placeholder="Phone number"></td></tr>

<tr><td><h4>Password</h4></td><td><input type="password"  name="pass"></td></tr>

<tr><td><h4>Confirm password</h4></td><td><input type="password" name="pwd2"></td></tr>

<tr><td><h6><input name="agree" type="checkbox"> I Agree to the terms</h6></td>
<td>
<input type="submit" value="Submit">

</td></tr>



</table>
<br>

</form>	

<?php include 'footer.php'?>
 
</body>
</html>