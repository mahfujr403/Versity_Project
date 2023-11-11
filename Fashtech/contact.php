<?php

$conn = new  mysqli('localhost', 'root', '', 'others');

$sql = "SELECT * FROM contact_page";
$item  = $conn->query($sql);


$sql1 = "SELECT * FROM cp_people";
$people  = $conn->query($sql1);
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
                <li><a href="about.php"> About</a></li>
                <li><a class="active" href="contact.php"> Contact</a></li>
                <li>
                    <a href="cart.php">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section id="page-header" class="about-header">
        <h2>#We Are Here</h2>
        <p>LEAVE A MESSAGE, We love to hear from you!</p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our outlate locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <?php
                while ($row = mysqli_fetch_assoc($item)) {
                ?>
                    <li>
                        <?php echo $row["icon"] ?>
                        <p><?php echo $row["address"] ?></p>
                    </li>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3634.
                    23910368289!2d88.59932701142266!3d24.372984278160043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
                    1!3m3!1m2!1s0x39fbefad023fd3b5%3A0x91e5843fe8317ba2!2sTheme%20Omor%20Plaza!5e0!3m2!1sen!2sbd!4v1699691218113!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>

    <section id="form-details" class="section-p1">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your name">
            <input type="email" placeholder="Your email">
            <input type="text" placeholder="subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your message"></textarea>
            <button class="normal">Submit</button>
        </form>


        <div class="people">
            <div>
                <?php
                while ($row = mysqli_fetch_assoc($people)) {
                ?>
                    <div>
                        <img src="<?php echo $row["image"] ?>" alt="">
                        <p><span><?php echo $row["name"] ?></span> <?php echo $row["designation"] ?>
                            <br> <?php echo $row["phone"] ?> <br> <?php echo $row["email"] ?>
                        </p>
                    </div>

                <?php
                }
                ?>
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