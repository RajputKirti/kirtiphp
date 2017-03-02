<?php

include"connect.php";
session_start(); 
 $email= $_POST['email']; 
 $password= $_POST['password']; 
 $r = "SELECT * FROM users WHERE email='$email' and password = '$password'";
$result = $conn->query($r);
$row3 = $result->fetch_assoc();
$n = $row3["id"];
$_SESSION["id"] = $n;

//print_r($_SESSION["id"]);
header("Location:blog.php");
?>