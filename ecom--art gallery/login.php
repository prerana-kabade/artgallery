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
  <script src="./js/log.js"></script>


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
  <title>Welcome To Login Form</title>

<link rel="stylesheet" href="./css/logsty.css" />  
<script src="./js/log.js"></script>
  </head>

  <body>
  <!-- Main div code -->
  <div id="main">
  <div class="h-tag">
  <h2>Welcome To Login</h2>
  </div>
  <!-- Login box -->
  <form action="login1.php" method="POST">
  <div class="login">
  <table cellspacing="2" align="center" cellpadding="8" border="0">
  <tr>
  <td>Enter User email :</td>
  <td><input type="text"  name= "email" placeholder="Enter user email here" id="email" class="tb" /></td>
  </tr>
  <tr>
  <td>Enter Password :</td>
  <td><input type="password" name ="password" placeholder="Enter Password here" id="pwd1" class="tb" /></td>
  </tr>
  <tr>
  <td></td>
  <td>
  <input type="submit" value="Reset" onclick="clearFunc()" class="btn" />
  <input type="submit" value="Login" class="btn" onClick="login()" /></td>
  </tr>
  </table>
  </div>
     <!-- login box div ending here.. -->
  </form>
  </div>
  <!-- Main div ending here... -->
    
  </body>
  </html>
