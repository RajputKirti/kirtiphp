<?php 
include"connect.php";
session_start();
$id =  $_SESSION['id'];
			
 $name = $_POST['name']; 
 $msg= $_POST['msg']; 
  echo $name;
 $sql = "INSERT INTO msg       
 (user_id,name,msg)      
 VALUES       
 ('$id','$name','$msg')";
 if 
 ($conn->query($sql) === TRUE) 
 {    
 $last = $conn->insert_id;
 header("Location:trying.php");
 } 
 else
	 {    
 echo "Error: " . $sql . "" . $conn->error;
 }
 ?>