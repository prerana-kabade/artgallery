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
                  <li><a href="port.php">portiature</a></li>
                  <li><a href="pastel.php">pastel</a></li>
                </ul>
              </div>

              <div class="row">
                <header>Artists</header>
                <ul class="mega-links">
                  <li><a href="#">PABLO PICASSO</a></li>
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
            <li><a href="login.php">Login</a></li>
            <li><a href="registration.php">Register</a></li>
          </ul>
        </li>
          <li><a href="contactus.php">Contact Us</a></li>
        
        <!-- icons -->
        <li class="icons">
          <span> <?php
		$count=0;
		if(isset($_SESSION['cart'])){
			$count=count($_SESSION['cart']);
		}
		?>
            <a href="cart.php">
            <img src="./images/shoppingBag.svg" alt="" />Cart
            <small class="count d-flex"><?php echo $count; ?></small>
          </span>
         
        </li>
      </ul>
      <label for="" class="btn open-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>


  <!-- Products -->
  <section class="section products">
    <div class="title">
      <h2>PABLO PICASSO</h2>
      <span>Pablo Ruiz Picasso (25 October 1881 – 8 April 1973) was a Spanish painter, sculptor, printmaker, ceramicist and theatre designer who spent most of his adult life in France.</span>
    </div>


              <div class="product-layout">

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/picasso.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="29"/>
	    <input type="hidden" name="title" value="Abstract Women"/>
	    <input type="hidden" name="painting" value="./images/picasso.jpg"/>
	     <input type="hidden" name="price" value="1500"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

          
        </div>
        <div class="bottom">
          <a href="">Abstract Women</a>
          <div class="price">
            <span>1500 rs</span>
            <span class="cancel">1700 rs</span>
          </div>
	</form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/picasso1.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="30"/>
	    <input type="hidden" name="title" value="Gun Man"/>
	    <input type="hidden" name="painting" value="./images/picasso1.jpg"/>
	     <input type="hidden" name="price" value="1400"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

          
        </div>
        <div class="bottom">
          <a href="">Gun Man</a>
          <div class="price">
            <span>1400 rs</span>
          </div>
	</form>
        </div>
      </div>


      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/picasso3.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="31"/>
	    <input type="hidden" name="title" value="Abstract Lady"/>
	    <input type="hidden" name="painting" value="./images/picasso3.jpg"/>
	     <input type="hidden" name="price" value="2000"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

         
        </div>
        <div class="bottom">
          <a href="">Abstract lady</a>
          <div class="price">
            <span>2000 rs</span>
          </div>
	</form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/picasso4.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="32"/>
	    <input type="hidden" name="title" value="Abstract Girl"/>
	    <input type="hidden" name="painting" value="./images/picasso4.jpg"/>
	     <input type="hidden" name="price" value="1900"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

          
        </div>
        <div class="bottom">
          <a href="">Abstract Girl</a>

          <div class="price">
            <span>1900 rs</span>
          </div>
	</form>
        </div>
      </div>

      

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/picasso7.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="33"/>
	    <input type="hidden" name="title" value="2-faced Women"/>
	    <input type="hidden" name="painting" value="./images/picasso7.jpg"/>
	     <input type="hidden" name="price" value="1800"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

          
        </div>
        <div class="bottom">
          <a href="">2-faced Women </a>
          <div class="price">
            <span>1800 rs</span>
            <span class="cancel">2000 rs</span>
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
