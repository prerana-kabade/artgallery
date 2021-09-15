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
      <h2>ARPITA SINGH</h2>
      <span> Arpita Singh's early paintings were mainly water colors on paper.In the 90s, Arpita's style of painting shifted to oil on canvas, but she continued to paint women-centric art.</span>
    </div>


              <div class="product-layout">
      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/arpita1.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="48"/>
	    <input type="hidden" name="title" value="FIGURES AND FLOWERS"/>
	    <input type="hidden" name="painting" value="./images/arpita1.jpg"/>
	     <input type="hidden" name="price" value="1550"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

        </div>
        <div class="bottom">
          <a href="">Figures and Flowers</a>
          <div class="price">
            <span>₹ 1550 </span>
          </div>
	</form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/arpita2.jpg" alt="" />
          <div class="addCart">
           <input type="hidden" name="paint_no" value="49"/>
	    <input type="hidden" name="title" value="WHATEVER IS HERE"/>
	    <input type="hidden" name="painting" value="./images/arpita2.jpg"/>
	     <input type="hidden" name="price" value="1300"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

         
        </div>
        <div class="bottom">
          <a href="">Whatever Is Here</a>
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
          <img src="./images/arpita3jpg.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="50"/>
	    <input type="hidden" name="title" value="THE NEWYORK TIMES"/>
	    <input type="hidden" name="painting" value="./images/arpita3.jpg"/>
	     <input type="hidden" name="price" value="1500"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

        
        </div>
        <div class="bottom">
          <a href="">The Newyork Times</a>
          <div class="price">
            <span>1500 rs</span>
          </div>
	</form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/arpita4.jpg" alt="" />
          <div class="addCart">
           <input type="hidden" name="paint_no" value="51"/>
	    <input type="hidden" name="title" value="SPRING ART AUCTION"/>
	    <input type="hidden" name="painting" value="./images/arpita4.jpg"/>
	     <input type="hidden" name="price" value="1400"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

        
        </div>
        <div class="bottom">
          <a href="">Spring Art Auction</a>
          <div class="price">
            <span>1400 rs</span>
            <span class="cancel">1600 rs</span>
          </div>
	</form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/arpita5.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="52"/>
	    <input type="hidden" name="title" value="SHOW ON ARTSY"/>
	    <input type="hidden" name="painting" value="./images/arpita5.jpg"/>
	     <input type="hidden" name="price" value="2000"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

        </div>
        <div class="bottom">
          <a href="">Show On Artsy</a>
          <div class="price">
            <span>2000 rs</span>
          </div>
	</form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/arpita6.jpg" alt="" />
          <div class="addCart">
           <input type="hidden" name="paint_no" value="53"/>
	    <input type="hidden" name="title" value="SAFFRONART WISH DREAM"/>
	    <input type="hidden" name="painting" value="./images/arpita6.jpg"/>
	     <input type="hidden" name="price" value="3000"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
          </div>

         
        </div>
        <div class="bottom">
          <a href="">Saffronart's Wish Dream</a>
          <div class="price">
            <span>3000 rs</span>
          </div>
	</form>
        </div>
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