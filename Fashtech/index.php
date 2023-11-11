<?php

$conn = new  mysqli('localhost', 'root', '', 'product');

$sql_featured = "SELECT * FROM featured_product";
$featured  = $conn->query($sql_featured);

$sql_newArrival = "SELECT * FROM new_arrivals";
$newArrival  = $conn->query($sql_newArrival);

$conn = new  mysqli('localhost', 'root', '', 'others');
$feature_img = "SELECT * FROM  feature";
$feature  = $conn->query($feature_img);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fashtech</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css" />
</head>

<body>
  <section id="header">
    <a href="index.php"><img src="img/logo.png" class="logo" alt /></a>

    <div>
      <ul id="navbar">
        <li><a class="active" href="index.php"> Home</a></li>
        <li><a href="shop.php"> Shop</a></li>
        <li><a href="blog.php"> Blog</a></li>
        <li><a href="about.php"> About</a></li>
        <li><a href="contact.php"> Contact</a></li>
        <li>
          <a href="cart.php">
            <i class="fa-solid fa-bag-shopping"></i>
          </a>
        </li>
      </ul>
    </div>
  </section>

  <section id="hero">
    <h4>Trade-in-offer</h4>
    <h2>Super value deals</h2>
    <h1>On all products</h1>
    <p>Save more with coupons & up to 70% off!</p>
    <button>Shop Now</button>
  </section>

  <section id="feature" class="section-p1">
    <?php
    while ($row = mysqli_fetch_assoc($feature)) {
    ?>
      <div class="fe-box">
        <img src="<?php echo $row["image"] ?>" alt="" />
        <h6><?php echo $row["heading"] ?></h6>
      </div>
    <?php
    }
    ?>
  </section>

  <section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">

      <?php
      while ($row = mysqli_fetch_assoc($featured)) {
      ?>
        <div class="pro">
          <img src="<?php echo $row["image"] ?>" alt="" />
          <div class="des">
            <span><?php echo $row["brand"] ?></span>
            <h5><?php echo $row["name"] ?></h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4>৳<?php echo $row["price"] ?></h4>
          </div>
          <a href="#"><i class="fa-solid fa-cart-plus cart"></i></a>
        </div>
      <?php
      }
      ?>

    </div>
  </section>

  <section id="banner" class="section-m1">
    <h4>Repair Services</h4>
    <h2>Upto <span>70% Off</span> - All t-shirt & Accessories</h2>
    <button class="normal">Explore More</button>
  </section>

  <section id="product1" class="section-p1">
    <h2>New Arraivals</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">

      <?php
      while ($row = mysqli_fetch_assoc($newArrival)) {
      ?>
        <div class="pro">
          <img src="<?php echo $row["image"] ?>" alt="" />
          <div class="des">
            <span><?php echo $row["brand"] ?></span>
            <h5><?php echo $row["name"] ?></h5>
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h4><?php echo $row["price"] ?></h4>
          </div>
          <a href="#"><i class="fa-solid fa-cart-plus cart"></i></a>
        </div>

      <?php
      }
      ?>
    </div>
  </section>

  <section id="sm-banner" class="section-p1">
    <div class="banner-box">
      <h4>crazy deals</h4>
      <h2>buy 1 & get 1 free</h2>
      <span>The best classic dress in on sale at Fashtech</span>
      <button class="white">Lern More</button>
    </div>
    <div class="banner-box banner-box2">
      <h4>Spring/Summer</h4>
      <h2>Upcoming Season</h2>
      <span>The best classic dress in on sale at Fashtech</span>
      <button class="white">Collections</button>
    </div>
  </section>

  <section id="banner3">
    <div class="banner-box">
      <h2>Seasonal Sale</h2>
      <h3>Winter Collection 50% OFF</h3>
    </div>

    <div class="banner-box banner-box2">
      <h2>New Footwear Collection</h2>
      <h3>Spring/Summer 2023</h3>
    </div>

    <div class="banner-box banner-box3">
      <h2>T-Shirt</h2>
      <h3>New trendy Prints</h3>
    </div>
  </section>

  <section id="newsletter" class="section-p1">
    <div class="newstext">
      <h4>Sign Up For Newsletters</h4>
      <p>
        Get e-mail updates about our leatest shop and
        <span>special offers.</span>
      </p>
    </div>
    <div class="form">
      <input type="email" placeholder="Your e-mail address" />
      <button class="normal">Sign Up</button>
    </div>
  </section>

  <footer class="section-p1">
    <div class="col">
      <img src="img/logo.png" class="logo" />
      <h4>Contact</h4>
      <p><strong>Address: </strong>Shaheb Bazar, Rajshahi</p>
      <p><strong>Phone: </strong>01771431724, 01521768694</p>
      <p><strong>Open: </strong>10am-10pm, Sat-Thu</p>

      <div class="follow">
        <h4>Follow us</h4>
        <div class="icon">
          <i class="fa-brands fa-facebook"></i>
          <i class="fa-brands fa-x-twitter"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-youtube"></i>
        </div>
      </div>
    </div>

    <div class="col">
      <h4>About</h4>
      <a href="#">About us</a>
      <a href="#">Delivary Information</a>
      <a href="#">Privacy ploicy</a>
      <a href="#">Trams & contidions</a>
      <a href="#">Contact us</a>
    </div>

    <div class="col">
      <h4>My Account</h4>
      <a href="#">Sign In</a>
      <a href="#">View Cart</a>
      <a href="#">My Wishlist</a>
      <a href="#">Track my order</a>
      <a href="#">Help</a>
    </div>

    <div class="col install">
      <h4>Install app</h4>
      <p>From App Store or Google Play</p>
      <div class="row">
        <img src="img/pay/app.jpg" />
        <img src="img/pay/play.jpg" />
      </div>
      <div>
        <p>Secured payment gateway</p>
        <img src="img/pay/pay.png" />
      </div>
    </div>
  </footer>

  <script src="script.js"></script>
</body>

</html>