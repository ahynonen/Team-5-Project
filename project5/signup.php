<?php
include_once 'header.php';
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
			<input type="password" size="65" name = "pwd"  id="pwd" />
			
			
		</div>
		<div class="form-control">
			<label for="pwd2">Confirm Password</label>
			<input type="password" size="65" id="pwd2"  />
			
			
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
        var pwd = document.forms["RegForm"]["pwd"];
		var pwd2 = document.forms["RegForm"]["pwd2"];
        
  
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
  
  
        if (pwd.value == "") {
            window.alert("Please enter your password");
            pwd.focus();
            return false;
        }

		if (pwd2.value == "") {
            window.alert("Please confirm your password");
            pwd2.focus();
            return false;
        } else if (pwd.value !== pwd2.value){
			window.alert("Your password doesn't match");
            pwd2.focus();
			return false;
		}
    }
</script>


    <?php
include_once 'footer.php';
?>


