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
	<form id="form" class="form" action="create.php" method="post">
		<div class="form-control">
			<label for="fname">First name</label>
			<input type="text" placeholder="" name="fname" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
    <div class="form-control">
			<label for="lname">Last name</label>
			<input type="text" placeholder="" name="lname" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
    <div class="form-control">
			<label for="email">Email</label>
			<input type="email" placeholder="" name="email" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="pwd">Password</label>
			<input type="password" placeholder=""  name="pwd"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="pwd2">Confirm Password</label>
			<input type="password" placeholder=""name="pwd2" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<button>Sign up</button>
	</form>
</div>


    <?php
include_once 'footer.php';
?>
