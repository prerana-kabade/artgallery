<?php
session_start();
//session_destroy();
$conn = new mysqli("localhost","root","","art_gallery");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['purchases']))
{
	$query1="INSERT INTO `payment`(`fullname`, `email`, `address`, `payment mode`) VALUES ('$_POST[fullname]','$_POST[email]','$_POST[address]','$_POST[pay_mode]')";
	if(mysqli_query($conn,$query1))
	{
		$order_id=mysqli_insert_id($conn);
		$query2="INSERT INTO `order`(`order_id`, `paint_no`, `title`, `qty`, `price`) VALUES (?,?,?,?,?)";
		$stmt=mysqli_prepare($conn,$query2);
		if($stmt){
			mysqli_stmt_bind_param($stmt,"iisii",$order_id,$paint_no,$title,$qty,$price);
			foreach($_SESSION['cart'] as $key=>$values)
			{
				$paint_no=$values['paint_no'];
				$title=$values['title'];
				$qty=$values['qty'];
				$price=$values['price'];
				mysqli_stmt_execute($stmt);
			}
			unset($_SESSION['cart']);
			echo"<script>alert('Order Placed');
				window.location=['index.php'];</script>";
		}else{
			echo"<script>alert('ERROR OCCURED');
				window.location=['index.php'];</script>";
	}
			
	}
	else{
		echo"<script>alert('ERROR');
				window.location=['shop.php'];</script>";
	}
}
?>