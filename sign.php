<?php 
include"connect.php";
 $name = $_POST['name']; 
 $email= $_POST['email']; 
 $password = $_POST['password']; 
  $phoneno = $_POST['phoneno'];
  echo $name;
 $sql = "INSERT INTO users       
 (name,email,password,phoneno)      
 VALUES       
 ('$name','$email','$password','$phoneno')";
 if 
 ($conn->query($sql) === TRUE) 
 {    
 $last = $conn->insert_id;
 header("Location:index.php");
 } 
 else
	 {    
 echo "Error: " . $sql . "" . $conn->error;
 }
 ?>