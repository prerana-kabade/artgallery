<?php
session_start();
//session_destroy();
$conn = new mysqli("localhost","root","","art_gallery");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['add'])){
	if(isset($_SESSION['cart'])){
		$myitems=array_column($_SESSION['cart'],'paint_no');
		if(in_array($_POST['paint_no'],$myitems)){
			echo "<script>alert('This painting is already added to cart');
				window.location=['oil paint.php'];</script>";
		}else{
		
		$count=count($_SESSION['cart']);
		$_SESSION['cart'][$count]=array('paint_no'=>$_POST['paint_no'],'title'=>$_POST['title'],'painting'=>$_POST['painting'],'price'=>$_POST['price'],'qty'=>$_POST['qty']);
		echo "<script>alert('Painting added');
				window.location=['oil paint.php'];</script>";
		}
		
		
	}
	else{
		$_SESSION['cart'][0]=array('paint_no'=>$_POST['paint_no'],'title'=>$_POST['title'],'painting'=>$_POST['painting'],'price'=>$_POST['price'],'qty'=>$_POST['qty']);
		echo "<script>alert('Painting added');
				window.location=['oil paint.php'];</script>";
	}
}
if(isset($_POST['remove'])){

		foreach($_SESSION['cart'] as $key=> $value){
			if($value['paint_no'] == $_POST['paint_no']){

				unset($_SESSION['cart'][$key]);
				$_SESSION['cart']=array_values($_SESSION['cart']);

				echo"<script>alert('Painting removed from cart');
				window.location=['cart.php'];</script>";	

			}
		}
	

}
if(isset($_POST['qty'])){

		foreach($_SESSION['cart'] as $key=> $value){
			if($value['paint_no'] == $_POST['paint_no']){
				$_SESSION['cart'][$key]['qty']=$_POST['qty'];
				echo"<script>
				window.location=['cart.php'];</script>";	
					

			}
		}
	

}
?>