<?php

$user_name=$_REQUEST["uname"];
$user_email=$_REQUEST["email"];
$user_pno=$_REQUEST["pno"];
$user_pass=$_REQUEST["pass"];



$mysql= new mysqli ("localhost","root","","bookshop") or die (mysqli_connect_error());

$sql1="insert into user (uname, email,pno,pass) values ('$user_name','$user_email','$user_pno', '$user_pass')";

    if(mysqli_query($mysql,$sql1)){

        header('Location:../home.php');
    }

    else{
    echo"failed";
}


?>
