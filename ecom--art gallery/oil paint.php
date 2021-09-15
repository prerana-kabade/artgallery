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
		<small class="count d-flex" ><?php echo $count; ?></small>
	    </a>
          </span>
          
        </li>
      </ul>
      <label for="" class="btn open-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>


  <!-- Products -->
  <section class="section products">
    <div class="title">
      <h2>OIL PAINTING</h2>
      <span>.</span>
    </div>
    
              <div class="product-layout">
      <div class="product">
        <div class="img-container">
	   <form action="mycart.php" method="POST">
          <img src="./images/op1.jpg" alt="" />
          <div class="addCart">
            <input type="hidden" name="paint_no" value="9"/>
	    <input type="hidden" name="title" value="FOGGY STROLE"/>
	    <input type="hidden" name="painting" value="./images/op1.jpg"/>
	     <input type="hidden" name="price" value="1500"/>
		<input type="hidden" name="qty" value="1"/>
		<button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
	
          </div>
	

          
        </div>
        <div class="bottom">
          <a href="">"FOGGY STROLE"</a>
          <div class="price">
            <span>₹1500  </span>
          </div>
	</form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	   <form action="mycart.php" method="POST">
          <img src="./images/op2.jpg" alt="" />
          <div class="addCart">
            <button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
	     <input type="hidden" name="paint_no" value="10"/>
	     <input type="hidden" name="title" value="INTRIGUING"/>
	     <input type="hidden" name="painting" value="./images/op2.jpg"/>
	     <input type="hidden" name="price" value="1300"/>
		<input type="hidden" name="qty" value="1"/>
          </div>

          
        </div>
        <div class="bottom">
          <a href="">INTRIGUING</a>
          <div class="price">
            <span>₹ 1300 </span>
            <span class="cancel">₹ 1600 </span>
          </div>
	  </form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	  <form action="mycart.php" method="POST">
          <img src="./images/op6.jpg" alt="" />
          <div class="addCart">
            <button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
	      <input type="hidden" name="paint_no" value="11"/>
	      <input type="hidden" name="title" value="2 PEACOCKS"/>
	     <input type="hidden" name="painting" value="./images/op6.jpg"/>
	     <input type="hidden" name="price" value="1500"/>
		<input type="hidden" name="qty" value="1"/>
          </div>

         
        </div>
        <div class="bottom">
          <a href="">2 PECOCKS</a>
          <div class="price">
            <span>₹ 1500</span>
          </div>
	  </form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/op9.jpg" alt="" />
          <div class="addCart">
            <button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="paint_no" value="12"/>
	    <input type="hidden" name="title" value="NATURE"/>
	     <input type="hidden" name="painting" value="./images/op9.jpg"/>
	     <input type="hidden" name="price" value="1400"/>
		<input type="hidden" name="qty" value="1"/>
          </div>

          
        </div>
        <div class="bottom">
          <a href="">NATURE</a>
          <div class="price">
            <span>₹ 1400 </span>
            <span class="cancel">₹ 1600 </span>
          </div>
	</form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/op8.jpg" alt="" />
          <div class="addCart">
            <button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="paint_no" value="13"/>
	    <input type="hidden" name="title" value="GARDERN CAFE"/>
	     <input type="hidden" name="painting" value="./images/op8.jpg"/>
	     <input type="hidden" name="price" value="2000"/>
		<input type="hidden" name="qty" value="1"/>
          </div>

         
        </div>
        <div class="bottom">
          <a href="">GARDERN CAFE</a>
          <div class="price">
            <span>₹ 2000 </span>
          </div>
	</form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/op3.jpg" alt="" />
          <div class="addCart">
            <button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="paint_no" value="14"/>
	    <input type="hidden" name="title" value="BUDDHA OIL PAINTING"/>
	     <input type="hidden" name="painting" value="./images/op3.jpg"/>
	     <input type="hidden" name="price" value="1900"/>
		<input type="hidden" name="qty" value="1"/>
          </div>

         
        </div>
        <div class="bottom">
          <a href="">BUDDHA OIL PAINTING </a>

          <div class="price">
            <span>₹ 1900 </span>
          </div>
	</form>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/op4.jpg" alt="" />
          <div class="addCart">
           <button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="paint_no" value="15"/>
	    <input type="hidden" name="title" value="HOT TREE OIL PAINTING"/>
	     <input type="hidden" name="painting" value="./images/op4.jpg"/>
	     <input type="hidden" name="price" value="2300"/>
		<input type="hidden" name="qty" value="1"/>
          </div>

         
        </div>
        <div class="bottom">
          <a href="">HOT TREE OIL PAINTING</a>

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
          <img src="./images/op5.jpg" alt="" />
          <div class="addCart">
            <button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="paint_no" value="16"/>
	    <input type="hidden" name="title" value="PARIS EIFFEL TOWER"/>
	     <input type="hidden" name="painting" value="./images/op5.jpg"/>
	     <input type="hidden" name="price" value="1800"/>
		<input type="hidden" name="qty" value="1"/>
          </div>

          
        </div>
        <div class="bottom">
          <a href="">PARIS EIFFEL TOWER</a>
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
          <img src="./images/op7.jpeg" alt="" />
          <div class="addCart">
            <button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="paint_no" value="17"/>
	    <input type="hidden" name="title" value="DANCE OF ANGELS"/>
	     <input type="hidden" name="painting" value="./images/op7.jpeg"/>
	     <input type="hidden" name="price" value="1300"/>
		<input type="hidden" name="qty" value="1"/>
          </div>

          
        </div>
        <div class="bottom">
          <a href="">DANCE OF ANGELS</a>
          <div class="price">
            <span>₹ 1300</span>
            <span class="cancel">₹ 1600 </span>
          </div>
	</form>
        </div>
      </div>


      <div class="product">
        <div class="img-container">
	<form action="mycart.php" method="POST">
          <img src="./images/p7.jpg" alt="" />
          <div class="addCart">
           <button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="paint_no" value="18"/>
	    <input type="hidden" name="title" value="3-AFRICAN MODELS"/>
	     <input type="hidden" name="painting" value="./images/p7.jpg"/>
	     <input type="hidden" name="price" value="2600"/>
	<input type="hidden" name="qty" value="1"/>
          </div>

          
        </div>
        <div class="bottom">
          <a href="">3-AFRICAN MODELS</a>
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
          <img src="./images/david5.jpg" alt="" />
          <div class="addCart">
            <button type="submit" name="add"><i class="fas fa-shopping-cart"></i></button>
            <input type="hidden" name="paint_no" value="19"/>
	    <input type="hidden" name="title" value="FARM HOUSE"/>
	     <input type="hidden" name="painting" value="./images/david5.jpg"/>
	     <input type="hidden" name="price" value="2000"/>
		<input type="hidden" name="qty" value="1"/>
          </div>

         
        </div>
        <div class="bottom">
          <a href="">FARM HOUSE</a>
          <div class="price">
            <span>₹ 2000 </span>
            
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
