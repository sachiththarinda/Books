<?php
session_start();
$mysql= new mysqli("localhost","root","","bookshop") or die (mysqli_connect_error());

if(isset($_POST['submit'])){
    $username = $_POST["uname"];
    $pas = $_POST["pass"];

    $sql="SELECT * from user where uname='$username' and pass='$pas'";
    $result = $mysql->query($sql);

    if($result->num_rows >0){
        $row = $result->fetch_assoc();
        $_SESSION['uname'] = $username;
        $_SESSION['id'] = $row['uid'];
        header("location:home.php");
        die;
    }
    else{
        echo'<script>alert("Invalid username or password")</script>';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	
<link rel="stylesheet" type="text/css" href="css/signin.css">
<script src="signin.js"></script>

</head>
<body style="background-image: url(images/Harry-Potter-Book-List_BL_16-9.jpg.corpimagerendition.xxl.1400.788.png);,background-size: cover;">

<?php include 'navbar.php'?>
<form ... onsubmit="return checkForm(this);" style="background-size: cover;">

<form method="post" onsubmit="return checkForm2(this);" style="background-image: url(images/Harry-Potter-Book-List_BL_16-9.jpg.corpimagerendition.xxl.1400.788.png);,background-size: cover;">


<h1 align="center">Customer Login</h1>
<table  class="login"  align="center" >
<tr><th colspan=2></th></tr>

<tr><td><h4>User Name</h4></td><td><input type="text" name="uname" placeholder="Username"></td></tr><br>

<tr><td><h4>Password</h4></td><td><input type="password"  name="pass">
<br><br><a href="#" style="float: right;">Fogot Password ?</a>
</td>
</tr>

<tr><td><td>
<input type="submit" name="submit" value="Submit">
</td></td></tr>

</table>
<br>


</form>	

<?php include 'footer.php'?>
 
</body>
</html>
