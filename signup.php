<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>The Brothers</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

        <link rel="stylesheet" href="styles.css">
    </head>

    <body>

        <section id="header">
            <a href="#"><img src="#" class="logo" alt=""></a>

            <div>
                <ul id="navbar">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="shop.php">SHOP</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
                    <li id="lg-bag"><a class="active" href="signup.php"><i class="far fa-user"></i></a></li>
                    <a href="#" id="close"><i class="far fa-times"></i></a>
                </ul>
            </div>
            <div id="mobile">
                <a href="cart.html"><i class="far fa-shopping-bag"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>
        </section>

        <section id="sign-up">
            <div class="form-container">
                <form action=" " method= "post">
                    <h3>register now</h3>
                    <input type="text" name="name" required placeholder="enter your name" class="box">
                    <input type="email" name="email" required placeholder="enter your email" class="box">
                    <input type="password" name="password" required placeholder="enter your password" class="box">
                    <input type="password" name="cpassword" required placeholder="confirm your password" class="box">
                    <select name="user_type" class="box">
                        <option value="user">user</option>
                        <option value="admin">admin</option>
                    </select>
                    <input type="submit" name="submit" value="register now" class="btn">
                    <p>already have an account? <a href="login.php">login now</a></p>
                </form>
            </div>
        </section>
        
        
        <section id="newletter" class="section-p1 section-m1">
            <div class="newstext">
                <h4>Sign Up For Newletters</h4>
                <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
            </div>
            <div class="form">
                <input type="text" placeholder="Your email address">
                <button class="normal">Sign Up</button>
            </div>
        </section>

        <footer class="section-p1">
            <div class="col">
                <img class="logo" src="#" alt="">
                <h4>Contact</h4><br>
                <p><strong>Address: </strong>1 Jan Smuts Ave, Braamfontein, Johannesburg</p>
                <p><strong>Phone: </strong>(+27) 603526307</p>
                <p><strong>Hours: </strong>08:00 - 16:00</p>
                <div class="follow">
                    <h4>Follow us</h4>
                    <div class="icon">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a><br>
                    </div>
                    <div class="copyright">
                        <p>&copy; 2024 The Brothers</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <h4>About</h4>
                <a href="about.html">About Us</a><br>
                <a href="shop.html">Shop</a><br>
                <a href="about.html">Privacy Policy</a><br>
                <a href="about.html">Terms & Conditions</a><br>
                <a href="contact.html">Contact</a><br>
            </div>

            <div class="col">
                <h4>My Account</h4>
                <a href="about.html">Sign In</a><br>
                <a href="cart.html">View Cart</a><br>
                <a href="about.html">My wishlist</a><br>
                <a href="about.html">Track My Order</a><br>
                <a href="contact.html">Help</a>
            </div>

            <div class="col install">
                <h4>Install App</h4>
                <p>From App Store or Google Play</p>
                <div class="row">
                    <img src="app.jpg" alt="">
                    <img src="play.jpg" alt="">
                </div>
                <p>Secure Payment Gateways</p><br>
                <img src="pay.png" alt="">
            </div>

        </footer>

        <script src="script.js"></script>

    </body>

</html>