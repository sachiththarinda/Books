
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
</head>

<?php
if(isset($_SESSION['id'])){?>
  <div class="navbar">
	<div class="dropdown">
  <button class="dropbtn">Shop By Category</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div></div>

	<div class="dropdown" style="float: right;">
  <button class="dropbtn" >Welcome</button>
  <div class="dropdown-content">
    <a href="signin.php">Cart</a>
    <a href="logout.php">Logout</a>
  </div>
</div>
</div>

<div class="navbar">
  <a href="home.php">Home</a>
  <a href="toprated.php">Top Rated Books</a>
<a href="aboutus.php">About</a>
<input type="text" placeholder="Search Products here ">
</div>
<br><br><br>

<?php } else { ?>
    
<div class="navbar">
	<div class="dropdown">
  <button class="dropbtn">Shop By Category</button>
  <div class="dropdown-content">
    <a href="#">  Best Sellers</a>
    <a href="#">Fiction</a>
    <a href="#">Non Fiction</a>
  </div></div>



	<div class="dropdown" style="float: right;">
  <button class="dropbtn" >Welcome Guest</button>
  <div class="dropdown-content">
    <a href="signin.php">Sign In</a>
    <a href="signup.php">Sign Up</a>
  </div>
</div>
</div>

<div class="navbar">
  <a href="home.php">Home</a>
  <a href="toprated.php">Top Rated Books</a>
<a href="aboutus.php">About</a>
<input type="text" placeholder="Search Products here ">
</div>
<br><br><br>

<?php }
?>

</body>
</html>
