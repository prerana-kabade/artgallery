<?php
session_start();
$conn = new mysqli("localhost","root","","art_gallery");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirmpassword=$_POST['conpassword'];
if($password != $confirmpassword){
	die('Password and Confirm password should match.Re-enter the password entered');
	header("location:reg.html");
} 

$SELECT="SELECT email FROM user_registration WHERE  email= ? Limit 1";
$INSERT="INSERT INTO user_registration(fullname,email,username,password,confirmpassword) VALUES(?,?,?,?,?)";

//prepare statement
$stmt=$conn->prepare($SELECT);
$stmt->bind_param("s",$email);
$stmt->execute();
$stmt->bind_result($email);
$stmt->store_result();
$rnum=$stmt->num_rows;
if($rnum==0){
	$stmt->close();

	$stmt=$conn->prepare($INSERT);
	$stmt->bind_param("sssss",$fullname,$email,$username,$password,$confirmpassword);
	$stmt->execute();
	echo "<script type='text/javascript'>alert('New Registration successfully done');window.location=['login.php'];</script>";
	
}else{
	echo "<script type='text/javascript'>alert('Someone already registered by this email');window.location=['reg.php'];</script>";
	

	
}
$stmt->close();
$conn->close();
?>
