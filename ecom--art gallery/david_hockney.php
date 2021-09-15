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
                  <li><a href="oil paint.php">OIL PAINTING</a></li>
                  <li><a href="abstract.php">ABSTRACT </a></li>
                  <li><a href="port.php">PORTIATURE</a></li>
                  <li><a href="pastel.php">PASTEL</a></li>
                </ul>
              </div>

              <div class="row">
                <header>Other Products</header>
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
            <li><a href="login.php">Login</a></li>
            <li><a href="registration.php">Register</a></li>
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
	  <a href="cart.php">
            <img src="./images/shoppingBag.svg" alt="" />
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
      <h2>DAVID HOCKNEY</h2>
      <span>Hockney has experimented with painting, drawing, printmaking, watercolours, photography, and many other media including a fax machine, paper pulp, computer applications and iPad drawing programs.</span>
    </div>


              <div class="product-layout">
      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/david1.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="34"/>
	    <input type="hidden" name="title" value="WILD WOOD"/>
	    <input type="hidden" name="painting" value="./images/david1.jpg"/>
	     <input type="hidden" name="price" value="1500"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

         
        </div>
        <div class="bottom">
          <a href="">Wild Wood</a>
          <div class="price">
            <span>1500 rs</span>
          </div>
	</form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/david2.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="35"/>
	    <input type="hidden" name="title" value="OLD COUPLE"/>
	    <input type="hidden" name="painting" value="./images/david2.jpg"/>
	     <input type="hidden" name="price" value="1300"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

         
        </div>
        <div class="bottom">
          <a href="">old couple</a>
          <div class="price">
            <span>1300 rs</span>
            <span class="cancel">1600 rs</span>
          </div>
	</form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/david3.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="36"/>
	    <input type="hidden" name="title" value="BEDECKED"/>
	    <input type="hidden" name="painting" value="./images/david3.jpg"/>
	     <input type="hidden" name="price" value="1500"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

        
        </div>
        <div class="bottom">
          <a href="">Bedecked</a>
          <div class="price">
            <span>1500 rs</span>
          </div>
	</form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/david4.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="37"/>
	    <input type="hidden" name="title" value="ROUTINE"/>
	    <input type="hidden" name="painting" value="./images/david4.jpg"/>
	     <input type="hidden" name="price" value="1400"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

         
        </div>
        <div class="bottom">
          <a href="">Routine</a>
          <div class="price">
            <span>1400 rs</span>
            <span class="cancel">1600</span>
          </div>
	</form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/david5.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="38"/>
	    <input type="hidden" name="title" value="FARM HOUSE"/>
	    <input type="hidden" name="painting" value="./images/david5.jpg"/>
	     <input type="hidden" name="price" value="2000"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

         
        </div>
        <div class="bottom">
          <a href="">farm house</a>
          <div class="price">
            <span>2000 rs</span>
          </div>
	</form >
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/david6.jpeg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="39"/>
	    <input type="hidden" name="title" value="POOL HOUSE"/>
	    <input type="hidden" name="painting" value="./images/david6.jpeg"/>
	     <input type="hidden" name="price" value="1900"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

         
        </div>
        <div class="bottom">
          <a href="">Pool House</a>

          <div class="price">
            <span>1900 rs</span>
          </div>
	</form >
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/david7.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="40"/>
	    <input type="hidden" name="title" value="DAILY BASIS 1"/>
	    <input type="hidden" name="painting" value="./images/david7.jpg"/>
	     <input type="hidden" name="price" value="2300"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

         
        </div>
        <div class="bottom">
          <a href="">Daily Basis 1</a>

          <div class="price">
            <span>2300 rs</span>
            <span class="cancel">2400 rs</span>
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