<?php

$conn = new  mysqli('localhost', 'root', '', 'others');

$sql = "SELECT * FROM about_page";
$item  = $conn->query($sql);

$sql1 = "SELECT * FROM app_video";
$vdo  = $conn->query($sql1);

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
                <li><a href="index.php"> Home</a></li>
                <li><a href="shop.php"> Shop</a></li>
                <li><a href="blog.php"> Blog</a></li>
                <li><a class="active" href="about.php"> About</a></li>
                <li><a href="contact.php"> Contact</a></li>
                <li>
                    <a href="cart.php">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section id="page-header" class="about-header">
        <h2>#Know about Us</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, culpa?</p>
    </section>

    <section id="about-head" class="section-p1">
        <?php
        while ($row = mysqli_fetch_assoc($item)) {
        ?>
            <img src="<?php echo $row["image"] ?>" alt="">
            <div>
                <h2><?php echo $row["heading"] ?></h2>
                <p><?php echo $row["detail"] ?></p>
                <abbr title=""><?php echo $row["abbr"] ?></abbr>
                <br><br>
                <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%"><?php echo $row["abbr"] ?></marquee>
            </div>

        <?php
        }
        ?>

    </section>

    <section id="about-app" class="section-p1">
        <h1>Download Our <a href="#">App</a></h1>
        <?php
        while ($row1 = mysqli_fetch_assoc($vdo)) {
        ?>
            <div class="video">
                <video autoplay muted loop src="<?php echo $row1["video"] ?>"></video>
            </div>
        <?php
        }
        ?>
    </section>

    <section id="feature" class="section-p1">
        <?php
        while ($row = mysqli_fetch_assoc($feature)) {
        ?>
            <div class="fe-box">
                <img src="<?php echo $row["image"] ?>" alt="">
                <h6><?php echo $row["heading"] ?></h6>
            </div>
        <?php
        }
        ?>
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