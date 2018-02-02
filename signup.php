<?php
	function display_title(){
		echo "Signup Page";
	}

    function display_content(){ ?>
    <section class="section-form" id="redirect">
        <div class="map2"></div>
        <div class="row">
            <h2 class="signup-h2">Register Form</h2>
        </div>

        <form class="contact-form" action="signup_endpoint.php" method="POST">
            <div class="row">
                <div class="col span-1-of-3">
                    <label class="label1" for="fullname">Full Name:</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter Full Name">
                </div>
            </div>

            <div class="row">
                <div class="col span-1-of-3">
                    <label class="label1" for="email">Email:</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="email" class="form-control" id="email" name="email"placeholder="Enter Email" required>
                    <span id="email_error"></span>
                </div>
            </div>

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
                    <label class="label1" for="cpw">Confirm Password:</label>
                </div>
                <div class="col span-2-of-3"> 
                    <input type="password" class="form-control" id="cpw" name="cpw"placeholder="Confirm password">
                    <span id="password_error"></span>
                </div>
            </div>

            <div class="row"> 
                <div class="col span-1-of-3">
                    <label class="label1">&nbsp;</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="submit" class="btn btn-default" name="register" value="Register">
                </div>
            </div>
        </form>
    </section>

	<script type="text/javascript">
		var users;
		$.getJSON("assets/users.json", function(json){
			users = json
		})

		$('input[name=username]').on('input', function(){
			var username = $('input[name=username]').val()
			if (typeof users[username] !== 'undefined') {
				$('#username_error').css('color','red')
				$('#username_error').html('username exists')
			} else {
				$('#username_error').css('color','green')
				$('#username_error').html('available')
			}
		})		

		$('input[name=cpw]').on('input', function(){
			if($('input[fullname=pw]').val() != $('input[fullname=cpw]').val()){
				$('input[fullname=register]').attr('disabled',true)
				$('#pw_error').css('color','red')
				$('#pw_error').html('passwords do not match')
			} else {
				$('input[name=register]').removeAttr('disabled')
				$('#pw_error').css('color','green')
				$('#pw_error').html('passwords matched')
			}
		})
		
	</script>
<?php 
	} 

	require "index.php";
?>
