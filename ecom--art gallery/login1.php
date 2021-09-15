
<?php 
session_start();
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$conn=new mysqli("localhost","root","","art_gallery");
	if($conn->connect_error){
		die("Failed to connect : ".$conn->connect_error);
	}else{
		$stmt=$conn->prepare("select * from user_registration where email=?");
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$stmt_result=$stmt->get_result();
		if($stmt_result->num_rows > 0){
			while($data=$stmt_result->fetch_assoc()){
				$dbuser=$data['email'];
				$dbpass=$data['password'];
			}
				if($email==$dbuser && $password==$dbpass){
					echo"<script type='text/javascript'>alert('Logged in Successfully');window.location=['index.php'];</script>";
					
				}
				else{
					echo"<script type='text/javascript'>alert('Invalid username or password');window.location=['login.php'];</script>";
				}
			
		}
		else{
			echo "<script type='text/javascript'>alert('Invalid username or password');window.location=['reg.php'];</script>";
		}
	}
?>   