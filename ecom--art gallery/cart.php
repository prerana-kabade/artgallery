<?php
session_start();
//session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <!-- Glidejs -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css">


    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./styles.css" />
    <title>ART GALLERY</title>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="nav">
    <div class="wrapper container">
      <div class="logo"><a href="">ART GALLERY</a></div>
      <ul class="nav-list">
        <div class="top">
          <label for="" class="btn close-btn"><i class="fas fa-times"></i></label>
        </div>
        <li><a href="index.php">Home</a></li>
        
        <li>
          <a href="shop.php" class="desktop-item">Shop <span><i class="fas fa-chevron-down"></i></span></a>
          <input type="checkbox" id="showMega" />
          <label for="showMega" class="mobile-item">Shop <span><i class="fas fa-chevron-down"></i></span></label>
          <div class="mega-box">
            <div class="content">
              <div class="row">
                <img src="./images/bc.jpg" alt="" />
              </div>
              <div class="row">
                <header>painting</header>
                <ul class="mega-links">
                  <li><a href="oil paint.php">oil painting</a></li>
                  <li><a href="abstract.php">abstract </a></li>
                  <li><a href="#">portiature</a></li>
                  <li><a href="#">pastel</a></li>
                </ul>
              </div>

              <div class="row">
                <header>Other Products</header>
                <ul class="mega-links">
                  <li><a href="pablo picasso.php">PABLO PICASSO</a></li>
                  <li><a href="david_hockney.php">David Hockney</a></li>
                  <li><a href="ravikumar.php">Raja Ravi Varma</a></li>
                  <li><a href="arpita.php">Arpita Singh</a></li>
                  
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li><a href="blog.html">Blog</a></li>
        <li>
          <a href="" class="desktop-item">Customer <span><i class="fas fa-chevron-down"></i></span></a>
          <input type="checkbox" id="showdrop1" />
          <label for="showdrop1" class="mobile-item">Vendors <span><i class="fas fa-chevron-down"></i></span></label>
          <ul class="drop-menu1">
            <li><a href="login.php">Login</a></li>
            <li><a href="reg.php">Register</a></li>
          </ul>
        </li>
          <li><a href="contactus.php">Contact Us</a></li>
        
        <!-- icons -->
         
        <li class="icons">
          <span>
	<?php
		$count=0;
		if(isset($_SESSION['cart'])){
			$count=count($_SESSION['cart']);
		}
	?>
            <li><a href="cart.php">Cart</a></li>
            <img src="./images/shoppingBag.svg" alt="" />
            <small class="count d-flex"><?php echo $count; ?></small>
          </span>
          <span>

            <img src="./images/search.svg" alt="" /></span>
        </li>
      </ul>
      
    </div>
  </nav>

  
  <!--cart-->
  <section class="section products">
  <div class="container">
    <div class="col-lg-12 text-center border  bg-info rounded  my-5">
      <h1>MY CART</h1>
    </div>
    <div class="col-lg-9">
    <table class="table border-danger">
  <thead class="text-center">
    <tr>
      <td scope="col">Serial No</td>
      <td scope="col">Painting Id</td>
      <td scope="col">Title</td>
      <td scope="col">Painting</td>
      <td scope="col">Quantity</td>
      <td scope="col">Price</td>
      <td scope="col">Total price</td>
      <td scope="col"></td>
    </tr>
  </thead>
  <tbody class="text-center">
  <?php
	if(isset($_SESSION['cart'])){
		foreach($_SESSION['cart'] as $key => $value){
			$sr=$key+1;
			
		      echo"
   			 <tr>
      				<td>$sr</td>
				<td>$value[paint_no]</td>
      				<td>$value[title]</td>
      				<td><img src='$value[painting]' width='200' height='200'/></td>
     			 	<td>
					<form action='mycart.php' method='POST'>
					<input class='text-center iquantity' name='qty' onChange='this.form.submit();' type='number' value='$value[qty]' min='1' max='5'/>
					<input type='hidden' name='paint_no' value='$value[paint_no]'/>
					</form>

				</td>
     			 	<td>$value[price]<input type='hidden' class='iprice' value='$value[price]'/></td>
				<td class='itotal'></td>
				<td>
				 	<form action='mycart.php' method='POST'>
					<button class='bg-danger' name='remove'> REMOVE</button> 
					<input type='hidden' name='paint_no' value='$value[paint_no]'/>
					</form>
				</td>
   			</tr> ";
		}
	}
   
?>
  </tbody>
</table>
</div>
<div class="col-lg-3">
<div class=" text-center border bg-warning rounded p-4 my-5">
<h1> GRAND TOTAL</h1>
<h2 class="text center" id="gtotal"></h2>
</br>
<?php
	if(isset($_SESSION['cart']) && count($_SESSION['cart'])==0){
		echo"<script>alert('Your Cart Is Empty');
				window.location=['shop.php'];</script>";
	}
?>
<form action="purchase.php">
	<button class="bg-info">Make Purchase</button>
</form>
	
	
		
	

</div>
</div>
</div>
<script type="text/javascript">
var gt=0;
	var iprice=document.getElementsByClassName("iprice");  
	
	var iquantity=document.getElementsByClassName("iquantity"); 
	var itotal=document.getElementsByClassName("itotal"); 
	var gtotal=document.getElementById("gtotal"); 
	function subtotal()
	{
		gt=0;
		for(i=0;i<iprice.length;i++)
		{
			itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
			gt=gt+(iprice[i].value)*(iquantity[i].value);
		}
		gtotal.innerText=gt;
	}
	subtotal();
 
</script>
</section>

 

   



 
    
    <!-- Custom Scripts -->

   
    <script src="./js/slider.js"></script>
    <script src="./js/index.js"></script>
  </body>
</html>
