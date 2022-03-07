<?php include 'db.php'; 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    
    
    <link rel="stylesheet" href="signup.css"/>
    <link rel="stylesheet" href="css.css"/>
</head>

<body>
<?php
include_once 'Header.php';
?>
 
<div class="container">     
	<div class="header"> 
		
		<h2>Create Account</h2>
	</div>
	<form class ="form" name="RegForm" action="submit.php" 
          onsubmit="return formvalidation()" method="post">
		<div class="form-control">
			<label for="fname">First name</label> 
			
			<input type="text" size="65" name = "fname" id="fname"  />
			
				
		</div>
    <div class="form-control">
			<label for="lname">Last name</label>
			<input type="text" size="65" name = "lname" id="lname" />
		

		</div>
    <div class="form-control">
			<label for="email">Email</label>
			<input type="email" size="65" name = "email" id="email"  />
	
			
		</div>
		<div class="form-control">
			<label for="pwd">Password</label>
			<input type="password" size="65" name = "password"  id="password" />
			
			
		</div>
		<div class="form-control">
			<label for="password2">Confirm Password</label>
			<input type="password" size="65" id="password2"  />
			
			
		</div>
		<button type="submit" name="submit" > Sign up</button>
		
	</form>
</div>
<div class ="text-login">
			<h5>Already have an Account? <a href="login.php">Login</a> </h5>
		</div>

		<script>

			// checkinputs function

        function formvalidation() {
        var fname = document.forms["RegForm"]["fname"];
		var lname = document.forms["RegForm"]["lname"];
        var email = document.forms["RegForm"]["email"];
        var pwd = document.forms["RegForm"]["password"];
		var pwd2 = document.forms["RegForm"]["password2"];
        
  
        if (fname.value == "") {
            window.alert("Please enter your First Name.");
            fname.focus();
            return false;
        }
  
        if (lname.value == "") {
            window.alert("Please enter your Last Name.");
            lname.focus();
            return false;
        }
  
        if (email.value == "") {
            window.alert("Please enter a valid E-mail address.");
            email.focus();
            return false;
        }
  
  
        if (password.value == "") {
            window.alert("Please enter your password");
            password.focus();
            return false;
        }

		if (password2.value == "") {
            window.alert("Please confirm your password");
            password2.focus();
            return false;
        } else if (password.value !== password2.value){
			window.alert("Your password doesn't match");
            password2.focus();
			return false;
		}
    }
</script>


    <?php
include_once 'Footer.php';
?>


