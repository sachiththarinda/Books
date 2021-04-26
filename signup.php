<!DOCTYPE html>
<html>
<head>
	
<link rel="stylesheet" type="text/css" href="css/signup.css">
<script src="signup.js"></script>

</head>
<body style="background-image: url(images/Harry-Potter-Book-List_BL_16-9.jpg.corpimagerendition.xxl.1400.788.png);,background-size: cover;">

<?php include 'navbar.php'?>

<form method="post" action="tables/register.php" onsubmit="return checkForm(this);" >


<form ... onsubmit="return checkForm(this);" style="background-size: cover;">
	<h1 align="center">User Registration</h1>



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