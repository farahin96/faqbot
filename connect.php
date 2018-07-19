<?php
//connect database
$dbhost = 'localhost';
$username = 'root';
$password = '';
$db = 'faqbot';

$conn = mysqli_connect("$dbhost", "$username", "$password", "$db");

if(!$conn){
	die("Connection failed" . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$sql = "INSERT INTO feedback (name, email, message) VALUES ('".$name."','".$email."','".$message."') ";

if (mysqli_query($conn,$sql)){
	echo "New record created successfully";
	header('location:index.html');

}	else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	
}	

mysqli_close($conn);


?>