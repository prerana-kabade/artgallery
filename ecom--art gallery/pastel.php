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
                <header>PAINTING</header>
                <ul class="mega-links">
                  <li><a href="oil paint.php">OIL PAINTING</a></li>
                  <li><a href="abstract.php">ABSTRACT </a></li>
                  <li><a href="port.php">PORTIATURE</a></li>
                  <li><a href="">PASTEL</a></li>
                </ul>
              </div>

              <div class="row">
                <header>ARTIST</header>
                <ul class="mega-links">
                  <li><a href="pablo picasso.php">PABLO PICASSO</a></li>
                  <li><a href="david_hockney.php">DAVID HOCKNEY</a></li>
                  <li><a href="ravikumar.php">RAJA RAVI VERMA</a></li>
                  <li><a href="arpita.php">ARPITA SINGH</a></li>
                  
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
      <h2>PASTEL ART</h2>
      <span>A pastel is an art medium in the form of a stick, consisting of powdered pigment and a binder. The pigments used in pastels are similar to those used to produce some other colored visual arts media, such as oil paints; the binder is of a neutral hue and low saturation. The color effect of pastels is closer to the natural dry pigments than that of any other process.</span>
    </div>


      <div class="product-layout">
      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/david2.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="23"/>
	    <input type="hidden" name="title" value="SWEET HOME"/>
	    <input type="hidden" name="painting" value="./images/david2.jpg"/>
	     <input type="hidden" name="price" value="2300"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>
          

        </div>
        <div class="bottom">
          <a href="">SWEET HOME</a>
          <div class="price">
            <span> ₹ 2300 </span>
            <span class="cancel"> ₹ 2600 </span>
          </div>
	</form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/p4.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="24"/>
	    <input type="hidden" name="title" value="LION"/>
	    <input type="hidden" name="painting" value="./images/p4.jpg"/>
	     <input type="hidden" name="price" value="1200"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>
         

        </div>
        <div class="bottom">
          <a href="">LION</a>
          <div class="price">
            <span> ₹ 1200</span>
          </div>
	</form>
        </div>
      </div>


      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/p2.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="25"/>
	    <input type="hidden" name="title" value="HORSE"/>
	    <input type="hidden" name="painting" value="./images/p2.jpg"/>
	     <input type="hidden" name="price" value="2000"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
         
          </div>

        </div>
        <div class="bottom">
          <a href="">HORSE</a>
          <div class="price">
            <span> ₹ 2000 </span>
          </div>
	</form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/david4.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="26"/>
	    <input type="hidden" name="title" value="A DREAMLAND"/>
	    <input type="hidden" name="painting" value="./images/david4.jpg"/>
	     <input type="hidden" name="price" value="1900"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>
          

        </div>
        <div class="bottom">
          <a href="">A DREAMLAND</a>

          <div class="price">
            <span> ₹ 1900 </span>
          </div>
	</form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/p3.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="27"/>
	    <input type="hidden" name="title" value="BUTTERFLY"/>
	    <input type="hidden" name="painting" value="./images/p3.jpg"/>
	     <input type="hidden" name="price" value="1800"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>
          

  
        </div>
        <div class="bottom">
          <a href="">BUTTERFLY</a>

          <div class="price">
            <span>₹ 1800 </span>
            <span class="cancel"> ₹ 2000 </span>
          </div>
	</form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/p5.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="28"/>
	    <input type="hidden" name="title" value="BUDDHA RELICS"/>
	    <input type="hidden" name="painting" value="./images/p5.jpg"/>
	     <input type="hidden" name="price" value="1180"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>
          

         
        </div>
        <div class="bottom">
          <a href="">BUDDHA RELICS </a>
          <div class="price">
            <span>₹ 11800 </span>
            <span class="cancel"> ₹ 12000 </span>
          </div>
	</form>
        </div>
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