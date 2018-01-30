<?php
	function display_title(){
		echo "Register Page";
	}

	function display_content(){ ?>
	<form class="form-horizontal" action="register_endpoint.php" method="POST">
	  <div class="form-group">
	    <label class="control-label col-sm-4" for="full_name">Full Name:</label>
	    <div class="col-sm-8">
	      <input type="text" class="form-control" id="full_name" name="name"placeholder="Enter Full Name">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-4" for="username">Userame:</label>
	    <div class="col-sm-8">
	      <input type="text" class="form-control" id="username" name="username"placeholder="Enter Username">
	      <span id="username_error"></span>
	    </div>
      </div>
      <div class="form-group">
	    <label class="control-label col-sm-4" for="username">Email:</label>
	    <div class="col-sm-8">
	      <input type="email" class="form-control" id="email" name="email"placeholder="Enter Email">
	      <span id="email_error"></span>
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-4" for="pw">Password:</label>
	    <div class="col-sm-8"> 
	      <input type="password" class="form-control" id="pw" name="pw"placeholder="Enter password">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-4" for="cpw">Confirm Password:</label>
	    <div class="col-sm-8"> 
	      <input type="password" class="form-control" id="cpw" name="cpw"placeholder="Confirm password">
	      <span id="pw_error"></span>
	    </div>
	  </div>
	  <div class="form-group"> 
	    <div class="col-sm-offset-4 col-sm-8">
	      <div class="checkbox">
	        <label><input type="checkbox"> Remember me</label>
	      </div>
	    </div>
	  </div>
	  <div class="form-group"> 
	    <div class="col-sm-offset-2 col-sm-10">
	      <input type="submit" class="btn btn-default" name="register" value="Register">
	    </div>
	  </div>
	</form>

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
			if($('input[name=pw]').val() != $('input[name=cpw]').val()){
				$('input[name=register]').attr('disabled',true)
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
