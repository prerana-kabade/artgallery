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

           
        </li>
      </ul>
      <label for="" class="btn open-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
  <!--cart-->
  <section class="section products">
  <div class="container">

    <div class="col-lg-12 text-center border  bg-light rounded  my-5">
    
      <h1>Payment Form For Customers</h1>
    </div>
<form action="order.php" method="POST" >
	<div class="col-lg-9">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="textbox" name="fullname" class="form-control"   placeholder="FullName" required>
</div>
<div class="col-lg-9">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="textbox" name="email" class="form-control" placeholder="Email" required>
</div>
<div class="col-lg-9">
  <label for="exampleFormControlTextarea1" class="form-label">Address For Delivery</label>
  <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="2" required></textarea>
</div></br>
Mode Of Payment
<div class="form-check">
  <input class="form-check-input" type="radio" name="pay_mode" id="COD"  value="COD" checked>
  <label class="form-check-label" for="flexRadioDefault2">
 Cash On Delivery
  </label>
</div>

</br>

<button class="bg-info" name="purchases">Purchase</button>
</form>
</br></br>

  </div>
</section>

</body>
</html>


















