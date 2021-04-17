<?php
$mysql= new mysqli ("localhost","root","") or die (mysqli_connect_error());

$sql1="create database if not exists bookshop";
if(mysqli_query($mysql,$sql1)){
    echo"database succesfull";
}
else{
    echo"error" .mysqli_error($mysql);
}

if(mysqli_select_db($mysql,"bookshop")){
    $sql2="create table if not exists user(
        uid int primary key auto_increment,
        uname varchar(100) not null,
        email varchar(100) not null,
        pno int(10) not null,
        pass varchar(20)not null
        )";
    
    if(mysqli_query($mysql,$sql2)){
        echo"user succesfull";
    }
    else{
        echo"user error" .mysqli_error($mysql);
    }
}

if(mysqli_select_db($mysql,"bookshop")){
    $sql3="create table if not exists items(
        itid int primary key auto_increment,
        iname varchar(100) not null,
        price int(10) not null,
        image varchar(50) not null
        )";
    
    if(mysqli_query($mysql,$sql3)){
        echo"items succesfull";
    }
    else{
        echo"items error" .mysqli_error($mysql);
    }
}

if(mysqli_select_db($mysql,"bookshop")){
    $sql4="create table if not exists orders(
        uid int(11),
        itid int(11),
        price int(10) not null,
        image varchar(50) not null,
        foreign key (uid) references user(uid),
        foreign key (itid) references items(itid)
        )";
    
    if(mysqli_query($mysql,$sql4)){
        echo"orders succesfull";
    }
    else{
        echo"orders error" .mysqli_error($mysql);
    }
}


    