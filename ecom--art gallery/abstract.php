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
                  <li><a href="#">abstract </a></li>
                  <li><a href="port.php">portiature</a></li>
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
      <h2>ABSTRACT ART</h2>
      <span>Abstract art is art that does not attempt to represent an accurate depiction of a visual reality but instead use shapes, colours, forms and gestural marks to achieve its effect.</span>
    </div>


              <div class="product-layout">
      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/picasso2.jpg" alt="" />
          <div class="addCart">
           <input type="hidden" name="paint_no" value="1"/>
	    <input type="hidden" name="title" value="LADY"/>
	    <input type="hidden" name="painting" value="./images/picasso2.jpg"/>
	     <input type="hidden" name="price" value="1500"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

          
        </div>
        <div class="bottom">
          <a href="">LADY</a>
          <div class="price">
            <span>₹ 1500</span>
          </div>
	</form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/picasso6.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="2"/>
	    <input type="hidden" name="title" value="MUSICAL INSTRUMENTS"/>
	    <input type="hidden" name="painting" value="./images/picasso6.jpg"/>
	     <input type="hidden" name="price" value="2300"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

         </div>
        <div class="bottom">
          <a href="">MUSICAL INSTRUMENTS</a>
          <div class="price">
            <span>₹ 2300 </span>
            <span class="cancel">₹ 2600 </span>
          </div>
	</form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/picasso5.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="3"/>
	    <input type="hidden" name="title" value="VILLA"/>
	    <input type="hidden" name="painting" value="./images/picasso5.jpg"/>
	     <input type="hidden" name="price" value="1200"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

         
        </div>
        <div class="bottom">
          <a href="">VILLA</a>
          <div class="price">
            <span>₹ 1200 </span>
          </div>
	</form>
        </div>
      </div>

      

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/a.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="5"/>
	    <input type="hidden" name="title" value="CAT"/>
	    <input type="hidden" name="painting" value="./images/a.jpg"/>
	     <input type="hidden" name="price" value="2000"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

        </div>
        <div class="bottom">
          <a href="">CAT</a>
          <div class="price">
            <span>₹ 2000 </span>
          </div>
	</form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/p6.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="6"/>
	    <input type="hidden" name="title" value="MANDALA ART"/>
	    <input type="hidden" name="painting" value="./images/p6.jpg"/>
	     <input type="hidden" name="price" value="1900"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

          
        </div>
        <div class="bottom">
          <a href="">MANDALA ART</a>

          <div class="price">
            <span>₹ 1900</span>
          </div>
	</form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/p8.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="7"/>
	    <input type="hidden" name="title" value="BAMBI PRINT"/>
	    <input type="hidden" name="painting" value="./images/p8.jpg"/>
	     <input type="hidden" name="price" value="1800"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

          
        </div>
        <div class="bottom">
          <a href="">BAMBI PRINT</a>

          <div class="price">
            <span>₹ 1800 </span>
            <span class="cancel">₹ 2000 </span>
          </div>
	</form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/c.jpg" alt="" />
          <div class="addCart">
           <input type="hidden" name="paint_no" value="8"/>
	    <input type="hidden" name="title" value="ABSTRACT NATURE"/>
	    <input type="hidden" name="painting" value="./images/c.jpg"/>
	     <input type="hidden" name="price" value="1180"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

        
        </div>
        <div class="bottom">
          <a href="">ABSTRACT NATURE </a>
          <div class="price">
            <span>₹ 1180</span>
            <span class="cancel">₹ 1200</span>
          </div>
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