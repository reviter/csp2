<header>
    <nav class="sticky">
        <div class="logo-row">
            <ul class="main-nav js--main-nav">
                <li><a href="#">My Account</a></li>
            </ul>
        </div>
    </nav>
    <nav class="sticky">
        <div class="logo-row">
            <img src="resources/img/designfusion.png" alt="Omnifood logo" class="logo1">
            <ul class="main-nav js--main-nav">
                <li><a href="home.php">Home</a></li>
                <li><a href="menu.php#redirect">Menu</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="cart.php#redirect"><i class="ion-ios-cart"></i><strong><?php if(isset($_SESSION['cart'])): ?>
                <?php echo array_sum($_SESSION['cart']) ?>
<?php else: ?>
<?php echo 0 ?>
<?php endif; ?></strong>&nbsp;&nbsp; Cart</a></li>
                <li><a href="signup.php#redirect">Sign up</a></li>
                <?php
      echo isset($_SESSION['username']) ? '<li><a href="logout.php">Logout</a></li>' : ' <li><a href="login.php#redirect">Log-In</a></li>' ;
      ?>                       
            </ul>
            <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
        </div>
    </nav>
    <div class="hero-text-box">
        <h1>Build your future with us.<br>Customize your ideal home.</h1>
    </div>
</header>