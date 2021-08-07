<?php

// $username=$_POST["username"];
// $pwd=$_POST["pwd"];

$username=$_REQUEST["username"];
$pwd=$_REQUEST["pwd"];

if(!empty($username) && !empty($pwd)){

    if($username=="admin" && $pwd=="123"){
        header("location:success.php");
    }else{
         header("location:login.php?msg=invalid username or password.");
    }
}else{
    header("location:login.php?msg=please enter your username and password.");
}