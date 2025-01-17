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
    <title>Blog | Bonsai</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

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
    <!-- ABOUT -->
    <section class="about" id="about" style="padding-top: 18rem">
      <h1 class="heading">
        <span>how technology has affected daily life and business</span>
      </h1>

      <div class="row">
        <div class="content" style="padding-top: 8rem">
          <h3 class="title">Placeholder Heading</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
            bibendum, mi at congue semper, ex est sagittis diam, id faucibus
            lorem nisl eget ipsum. Phasellus fermentum sapien et diam porttitor
            bibendum. Nulla ac quam sagittis, tempor libero blandit, commodo
            erat. Nulla tempor tortor ornare, tempus libero vel, tempus est.
            Proin ut lacus dapibus, commodo risus vitae, pulvinar quam. Praesent
            lobortis et ante quis accumsan. Fusce mattis blandit nunc, a
            dignissim purus feugiat vitae. Proin non tristique nibh.
          </p>
          <h3 class="title">Placeholder Heading</h3>
          <p>
            Maecenas dapibus placerat leo eget interdum. Vivamus eget ante odio.
            Donec tincidunt neque tellus, quis suscipit nisi aliquet ut. Sed
            euismod urna eu diam elementum, quis pellentesque augue fringilla.
            Pellentesque habitant morbi tristique senectus et netus et malesuada
            fames ac turpis egestas. Vestibulum vestibulum ultrices enim ut
            venenatis. Nunc congue enim interdum, accumsan lacus vel, finibus
            dui. Nulla sit amet ex eget lorem suscipit sodales sed sit amet ex.
            Ut tempus non sapien sit amet euismod. Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Duis tincidunt orci at libero volutpat,
            in ornare libero consectetur. Pellentesque tellus diam, dapibus sed
            ex quis, tempus maximus felis. In vel augue ac risus finibus
            eleifend.
          </p>
          <h3 class="title">Placeholder Heading</h3>
          <p>
            Etiam fermentum mauris ac dui molestie, at commodo odio commodo.
            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia curae; Aliquam in arcu eu ante rutrum ullamcorper.
            Cras et neque ipsum. Quisque pretium auctor odio, sed scelerisque
            nulla aliquet ut. In gravida urna mauris, id mattis nulla mattis
            quis. Morbi porttitor, diam in dapibus iaculis, est velit imperdiet
            ante, eget interdum urna dolor et tortor. Cras turpis est, efficitur
            sed arcu sit amet, placerat tempor elit.
          </p>

          <h3 class="title">Placeholder Heading</h3>
          <p>
            Suspendisse magna diam, consectetur vel ante id, scelerisque
            molestie diam. Pellentesque molestie nisi non eros egestas, vitae
            malesuada lorem euismod. Praesent tincidunt, nunc ut ultricies
            accumsan, nibh velit pharetra tellus, eget tincidunt lacus metus a
            sapien. Sed quis lorem neque. Nulla id congue arcu. Pellentesque
            imperdiet augue a felis suscipit, ut tristique lorem iaculis. Sed ut
            aliquet lacus. Duis justo nunc, volutpat id ex non, finibus auctor
            diam. Nunc at quam augue. Curabitur nec accumsan est. Nullam est mi,
            pulvinar quis volutpat eu, vehicula id magna. Proin et cursus ante.
            Nulla maximus et enim sed vehicula. Aenean sodales, mauris id luctus
            suscipit, leo orci maximus enim, non dictum sapien quam mollis mi.
            Quisque vel elit porttitor, dignissim massa sed, pellentesque
            sapien.
          </p>
          <h3 class="title">Placeholder Heading</h3>
          <p>
            Maecenas quis malesuada elit. Sed nec condimentum ante. Nullam
            sodales velit dolor, a suscipit odio pretium ac. Praesent aliquam
            tincidunt convallis. Morbi eleifend elit a ipsum convallis, in
            volutpat ex blandit. Aliquam nec venenatis metus, nec commodo
            turpis. Donec sit amet elit vitae metus cursus tempor et nec risus.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
            porta condimentum nisi, id placerat lectus facilisis at. Nam ac
            placerat mi. Praesent placerat purus eget nisl sollicitudin varius.
          </p>
        </div>
      </div>
    </section>
    <!-- FOOTER -->
    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>quick links</h3>
          <a href="index.php"><i class="fas fa-arrow-right"></i> home</a>
          <a href="about.php"><i class="fas fa-arrow-right"></i> about</a>
          <a href="products.php"
            ><i class="fas fa-arrow-right"></i> Products</a
          >
          <a href="blog.php"><i class="fas fa-arrow-right"></i> Blog</a>
          <a href="research.php"
            ><i class="fas fa-arrow-right"></i> Research</a
          >
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

      <div class="credit">
        created by <span>Ragin Shrestha</span> | all rights reserved 2023
      </div>
    </section>

    <!-- SWIPER -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- Custom JS File Link  -->
    <script src="js/script.js"></script>
  </body>
</html>
