<!DOCTYPE html>
<html>
<head>
	
<link rel="stylesheet" type="text/css" href="signup.css">
<script src="signup.js"></script>

</head>
<body>

<?php include 'navbar.php'?>

<form ... onsubmit="return checkForm(this);" style="background-image: url(Harry-Potter-Book-List_BL_16-9.jpg.corpimagerendition.xxl.1400.788.png);,background-size: cover;">
<table  class="login"  align="center" >
<tr><th colspan=2><h1>Create Account</h1></th></tr>

<tr><td><h4>User Name</h4></td><td><input type="text" name="username" placeholder="User Name"></td></tr><br>


<tr><td><h4>Gender</h4></td><td><h5><input type="radio" name="gender" value="male" checked> Male
<input type="radio" name="gender" value="female"> Female</h5></td></tr>


<tr><td><h4>E-mail</h4></td><td><input type="text" name="em" placeholder=" E-mail"></td></tr>

<tr><td><h4>Phone</h4></td><td><input type="number" name"ph" placeholder="Phone number"></td></tr>

<tr><td><h4>Password</h4></td><td><input type="password"  name="pwd1"></td></tr>

<tr><td><h4>Conform password</h4></td><td><input type="password" name="pwd2"></td></tr>

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