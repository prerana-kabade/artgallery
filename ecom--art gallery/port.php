<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <!-- Glidejs -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css">

  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="./css/styles.css" />
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
        <li><a href="index.html">Home</a></li>
        
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
                  <li><a href="">portiature</a></li>
                  <li><a href="pastel.php">pastel</a></li>
                </ul>
              </div>

              <div class="row">
                <header>Other Products</header>
                <ul class="mega-links">
                  <li><a href="Pablo Picasso.php">PABLO PICASSO</a></li>
                  <li><a href="david_hockney.php">David Hockney</a></li>
                  <li><a href="ravikumar.php">Raja Ravi Varma</a></li>
                  <li><a href="arpita.php">Arpita Singh</a></li>
                  
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li><a href="">Blog</a></li>
        <li>
          <a href="" class="desktop-item">Customer <span><i class="fas fa-chevron-down"></i></span></a>
          <input type="checkbox" id="showdrop1" />
          <label for="showdrop1" class="mobile-item">Vendors <span><i class="fas fa-chevron-down"></i></span></label>
          <ul class="drop-menu1">
            <li><a href="login.html">Login</a></li>
            <li><a href="registration.html">Register</a></li>
          </ul>
        </li>
          <li><a href="contactus.html">Contact Us</a></li>
        
        <!-- icons -->
        <li class="icons">
          <span>
	<?php
		$count=0;
		if(isset($_SESSION['cart'])){
			$count=count($_SESSION['cart']);
		}
	?>
	  <a href="cart.php">
            <img src="./images/shoppingBag.svg" alt="" />Cart
            <small class="count d-flex"><?php echo $count; ?></small>
          </span>
          <span><img src="./images/search.svg" alt="" /></span>
        </li>
      </ul>
      <label for="" class="btn open-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>


  <!-- Products -->
  <section class="section products">
    <div class="title">
      <h2>PORTIATURE</h2>
      
    </div>


              <div class="product-layout">
      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/d.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="20"/>
	    <input type="hidden" name="title" value="ABDUL KALAM"/>
	    <input type="hidden" name="painting" value="./images/d.jpg"/>
	     <input type="hidden" name="price" value="1500"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

          
        </div>
        <div class="bottom">
          <a href="">ABDUL KALAM</a>
          <div class="price">
            <span>₹ 1500</span>
          </div>
	</form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/ravi6.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="21"/>
	    <input type="hidden" name="title" value="A WOMAN"/>
	    <input type="hidden" name="painting" value="./images/ravi6.jpg"/>
	     <input type="hidden" name="price" value="2300"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

          
        </div>
        <div class="bottom">
          <a href="">A WOMAN</a>
          <div class="price">
            <span>₹ 2300</span>
            <span class="cancel">₹ 2600 </span>
          </div>
	</form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/ravi3" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="22"/>
	    <input type="hidden" name="title" value="WOMAN 2"/>
	    <input type="hidden" name="painting" value="./images/ravi3.jpg"/>
	     <input type="hidden" name="price" value="1200"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

         
        </div>
        <div class="bottom">
          <a href="">WOMAN 2</a>
          <div class="price">
            <span>₹ 1200</span>
          </div>
	</form>
        </div>
      </div>

      

   
  </section>



               <!-- Glidejs -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>

  <!-- Custom Scripts -->
  <script src="./js/products.js"></script>
  <script src="./js/slider.js"></script>
  <script src="./js/index.js"></script>
</body>

</html>