<?php
	function display_title(){
		echo "Login Page";
	}

    function display_content(){ ?>
    <section class="section-form">
        <div class="map2"></div>
        <div class="row">
            <h2 class="signup-h2">Login Form</h2>
        </div>

        <form class="contact-form" action="authenticate.php" method="POST">
            <div class="row">
                <div class="col span-1-of-3">
                    <label class="label1" for="username">Username:</label>
                </div>    
                <div class="col span-2-of-3">
                    <input type="text" class="form-control" id="username" name="username"placeholder="Enter Username">
                    <span id="username_error"></span>
                </div>
            </div>

            <div class="row">
                <div class="col span-1-of-3">
                    <label class="label1" for="password">Password:</label>
                </div>
                <div class="col span-2-of-3"> 
                    <input type="password" class="form-control" id="password" name="password"placeholder="Enter password">
                </div>
            </div>

            <div class="row"> 
                <div class="col span-1-of-3">  
                <div class="col span-2-of-3">
                    <label class="label1"><input type="checkbox"> Remember me</label>
                </div>
                </div>
            </div>

            <div class="row"> 
                <div class="col span-1-of-3">
                    <label class="label1">&nbsp;</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="submit" class="btn btn-default" name="register" value="Login">
                </div>
            </div>
        </form>
    </section>

<?php 
	} 

	require "index.php";
?>
