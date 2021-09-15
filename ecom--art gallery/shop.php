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
  

  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="./css/styles.css" />
  <title>ART GALLERY-PRODUCTS</title>
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
          <a href="" class="desktop-item">Shop <span><i class="fas fa-chevron-down"></i></span></a>
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
                <header>Artist</header>
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
            <img src="./images/shoppingBag.svg" alt="" />Cart
            <small class="count d-flex"><?php echo $count; ?></small>
          </span>
          <span><img src="./images/search.svg" alt="" /></span>
        </li>
      </ul>
      <label for="" class="btn open-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
<section class="section promotion">
    <div class="title">
      <h2>ART Collections</h2>
      <span>Based On Types Of Painting</span>
    </div>

    <div class="promotion-layout container">
      <div class="promotion-item">
        <img src="./images/a.jpg" alt="" />
        <div class="promotion-content">
          <h3>ABSTRACT ART</h3>
          <a href="abstract.php">SHOP NOW</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="./images/b.jpg" alt="" />
        <div class="promotion-content">
          <h3>OIL PAINTING</h3>
          <a href="oil paint.php">SHOP NOW</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="./images/c.jpg" alt="" />
        <div class="promotion-content">
          <h3>PASTEL</h3>
          <a href="pastel.php">SHOP NOW</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="./images/d.jpg" alt="" />
        <div class="promotion-content">
          <h3>PORTRAITURE</h3>
          <a href="port.php">SHOP NOW</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="./images/e.jpg" alt="" />
        <div class="promotion-content">
          <h3>SCULPTURE PAINTING</h3>
          <a href="">SHOP NOW</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="./images/f.jpg" alt="" />
        <div class="promotion-content">
          <h3>MANY MORE</h3>
          <a href="">SHOP NOW</a>
        </div>
      </div>
    </div>
  </section>


  <!--artists-->

  <section class="section promotion">
    <div class="title">
      <h2>ART Collections</h2>
      <span>Based On The Artists</span>
    </div>

    <div class="promotion-layout container">
      <div class="promotion-item">
        <img src="./images/picasso2.jpg" alt="" />
        <div class="promotion-content">
          <h3>PABLO PICASSO</h3>
          <a href="pablo picasso.php">SHOP NOW</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="./images/david2.jpg" alt="" />
        <div class="promotion-content">
          <h3>DAVID HOCKNEY</h3>
          <a href="david_hockney.php">SHOP NOW</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="./images/ravi1.jpg" alt="" />
        <div class="promotion-content">
          <h3>RAJA RAVI VERMA</h3>
          <a href="ravikumar.php">SHOP NOW</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="./images/arpita2.jpg" alt="" />
        <div class="promotion-content">
          <h3>ARPITA SINGH</h3>
          <a href="arpita.php">SHOP NOW</a>
        </div>
      </div>

      



</section>













   

  

  <!-- Custom Scripts -->
  <script src="./js/products.js"></script>
  <script src="./js/slider.js"></script>
  <script src="./js/index.js"></script>
</body>

</html>