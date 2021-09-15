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
                <header>PAINTING</header>
                <ul class="mega-links">
                  <li><a href="oil paint.php">OIL PAINTING</a></li>
                  <li><a href="abstract.php">ABSTRACT </a></li>
                  <li><a href="port.php">PORTIATURE</a></li>
                  <li><a href="pastel.php">PASTEL</a></li>
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
            <img src="./images/shoppingBag.svg" alt="" />
            <small class="count d-flex"><?php echo $count; ?></small>
          </span>
          
          
        </li>
      </ul>
      <label for="" class="btn open-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>

  <div class="hero">
    <div class="left">
      
      <h1>The Modern Art</h1>
      <small>Get all exclusive ART </small>
      
      <a href="#opening">View Collection </a>
    </div>
    <div class="right">
      <img src="./images/2.jpg" alt="" />
    </div>
  </div>

  <!-- Promotion -->

  <section class="section promotion">
    <div class="title">
      <h2>ART Collections</h2>
      <span>Select from the premium art product and save plenty money</span>

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

  <!-- Products -->
  <section class="section products">
    <div class="title">
      <p id="opening"style="color:red;font-size:30px;"><strong>check out</strong></p>
      <h2>New Products</h2>
      <span>Select from the premium art and save plenty money</span>
    </div>

    <div class="product-layout">
      <div class="product">
        
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/p1.jpg" alt="" />
          <div class="addCart">
           <input type="hidden" name="paint_no" value="57"/>
	    <input type="hidden" name="title" value="BALLERINA BALLET DANCER"/>
	    <input type="hidden" name="painting" value="./images/p1.jpg"/>
	     <input type="hidden" name="price" value="1500"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
        


          </div>

          
        </div>
        <div class="bottom">
          <a href="">Ballerina Ballet Dancer</a>
          <div class="price">
            <span>₹ 1500</span>
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
          <a href="">Lion</a>
          <div class="price">
            <span>₹ 1200 </span>
            <span class="cancel">₹ 1600</span>
          </div>
	</form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/p5.jpg" alt="" />
          <div class="addCart">
             
           <input type="hidden" name="paint_no" value="58"/>
	    <input type="hidden" name="title" value="BUDDHA"/>
	    <input type="hidden" name="painting" value="./images/p5.jpg"/>
	     <input type="hidden" name="price" value="2000"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
        


         
          </div>

         
        </div>
        <div class="bottom">
          <a href="">Buddha</a>
          <div class="price">
            <span>₹ 2000</span>
          </div>
	</form>
        </div>
      </div>

      

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/p7.jpg" alt="" />
          <div class="addCart">
            
           <input type="hidden" name="paint_no" value="59"/>
	    <input type="hidden" name="title" value="3-AFRICAN MODELS"/>
	    <input type="hidden" name="painting" value="./images/p7.jpg"/>
	     <input type="hidden" name="price" value="2300"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
        


          
          </div>

          
        </div>
        <div class="bottom">
          <a href="">3- Afracian Models</a>

          <div class="price">
            <span> ₹ 2300 </span>
            <span class="cancel">₹ 2600 </span>
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

