<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM customers
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop | Bonsai</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/product_style.css">

</head>
<body>
     <!-- HEADER -->
     <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="index.php" class="logo"> Bonsai <i class="" ></i></a>

        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="about.php">about</a>
            <a href="products.php">products</a>
            <a href="blog.php">Blog</a>
            <a href="research.php">Research</a>
        </nav>
        <?php if (isset($user)): ?>
            <a href="logout.php" class="btn"><?= htmlspecialchars($user["uname"]) ?>, Logout</a>
        
        
    <?php else: ?>
        <a href="login.php" class="btn">Login</a>

        
    <?php endif; ?>
        
     </header>
    <main class="container" style="padding-top: 12rem;">
      <!-- Left Column / Headphones Image -->
      <div class="left-column">
        <img  data-image="yellow"  class="active"  src="image/yellow.jpg"  alt=""/>
        <img data-image="pink" src="image/pink.jpg" alt="" />
        <img data-image="white" src="image/white.jpg" alt="" />
      </div>

      <!-- Right Column -->
      <div class="right-column">
        <!-- Product Description -->
        <div class="product-description">
          <span>Indoor Flowering Plants</span>
          <h1>Bonsai</h1>
          <p>
            Professionally curated for your indoors use.
          </p>
        </div>
        <!-- Product Configuration -->
        <form action="process-purchase.php" method="post" class="product-configuration">
          <!-- Product Color -->
          <div class="product-color">
            <span>Color</span>

            <div class="color-choose">
              <div>
                <input  data-image="yellow"  type="radio"  id="yellow"  name="color"  value="yellow"  checked/>
                <label for="yellow"><span></span></label>
              </div>
              <div>
                <input  data-image="pink"  type="radio"  id="pink"  name="color"  value="pink"/>
                <label for="pink"><span></span></label>
              </div>
              <div>
                <input  data-image="white"  type="radio"  id="white"  name="color"  value="white"
                />
                <label for="white"><span></span></label>
              </div>
            </div>
          </div>
    
        <!-- Product Pricing -->
        <div class="product-price">
          <span>Rs. 1,250</span>
          <input type="submit" value="purchase" class="btn">
        </div>
        </form>
      </div>
    </main>
        <!-- FOOTER -->
        <section class="footer" style="padding-top: 18rem;">
          <div class="box-container">
  
              <div class="box">
                  <h3>quick links</h3>
                  <a href="index.php"><i class="fas fa-arrow-right"></i> home</a>
                  <a href="about.php"><i class="fas fa-arrow-right"></i> about</a>
                  <a href="products.php"><i class="fas fa-arrow-right"></i> Products</a>
                  <a href="blog.php"><i class="fas fa-arrow-right"></i> Blog</a>
                  <a href="research.php"><i class="fas fa-arrow-right"></i> Research</a>
              </div>
  
              <div class="box">
                  <h3>contact info</h3>
                  <a href="#"><i class="fas fa-phone"></i> (+977) 981-234-5678</a>
                  <a href="#"><i class="fas fa-envelope"></i> bonsai@gmail.com</a>
                  <a href="#"><i class="fas fa-envelope"></i> Kathmandu, Nepal</a>
              </div>
  
              <div class="box">
                  <h3>Social Media</h3>
                  <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
                  <a href="#"><i class="fab fa-twitter"></i> twitter</a>
                  <a href="#"><i class="fab fa-instagram"></i> instagram</a>
                  <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
                  <a href="#"><i class="fab fa-twitter"></i> twitter</a>
              </div>
          </div>
  
          <div class="credit">created by <span>Ragin Shrestha</span> | all rights reserved 2023</div>
      </section>
    <!-- Scripts -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"
      charset="utf-8"
    ></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="js/product_script.js" charset="utf-8"></script>
  </body>
</html>
