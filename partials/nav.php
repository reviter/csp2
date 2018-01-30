<header>
    <nav>
        <div class="row">
            <img src="resources/img/designfusion.png" alt="Omnifood logo" class="logo1">
            <ul class="main-nav">
                <li><a href="home.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="location.php">Store Location</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="signup.php">Sign up</a></li>
                <li><a href="login.php">Log-In</a></li>
                <?php
      echo isset($_SESSION['username']) ? '<li><a href="logout.php">Logout</a></li>' : '' ;
      ?>                       
            </ul>
        </div>
    </nav>
    <div class="hero-text-box">
        <h1>Build your future with us.<br>Customize your ideal home.</h1>
        <a class="btn btn-full" href="#">I'm sleepy</a>
        <a class="btn btn-ghost" href="#">Show me more</a>
    </div>
</header>