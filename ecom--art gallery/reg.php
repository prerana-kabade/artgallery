<?php
session_start();
?>
  <!DOCTYPE html>
<html lang="en">


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
		
            <img src="./images/shoppingBag.svg" alt="" />
            <small class="count d-flex">0</small>
          </span>
          
        </li>
      </ul>
      <label for="" class="btn open-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>

  <title>Welcome To Registration Form</title>
  <link rel="stylesheet" href="./css/reg.css" />
  <script src="./js/reg.js"></script>
  </head>

    <body>
    <!-- Main div code -->
    <div id="main">
    <div class="h-tag">
    <h2>Create Your Account</h2>
    </div>
    <!-- create account div -->
     <form action="register.php" method="POST">
    <div class="login">
    <table cellspacing="2" align="center" cellpadding="8" border="0">
    <tr>
    <td align="right">Enter Name :</td>
    <td><input type="text" name="fullname" placeholder="Enter user here" id="t1" class="tb" /></td>
    </tr>
    <tr>
    <td align="right">Enter Email ID :</td>
    <td><input type="text" name="email" placeholder="Enter Email ID here" id="t2" class="tb" /></td>
    </tr>
    <tr>
    <td align="right">Enter Username :</td>
    <td><input type="text" name="username" placeholder="Enter Username here" id="t3" class="tb" /></td>
    </tr>
    <tr>
    <td align="right">Enter Password :</td>
    <td><input type="password" name="password" placeholder="Enter Password here" id="t4" class="tb" /></td>
    </tr>
    <tr>
    <td align="right">Enter Confirm Password :</td>
    <td><input type="password" name="conpassword" placeholder="Enter Password here" id="t5" class="tb" /></td>
    </tr>
    <tr>
    <td></td>
    <td>
    <input type="reset" value="Clear Form" id="res" class="btn" />
    <input type="submit" value="Create Account" class="btn" onclick="registration()" /></td>
    </tr>
    
    </table>
    </div>
    </form>
    <!-- create account box ending here.. -->
    </div>
    <!-- Main div ending here... -->
    </body>
    </html>