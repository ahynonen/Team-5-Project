<?php
include_once 'header.php';
?>

<div class="container">
	<div class="Header">
		<h2>LOG IN</h2>
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
		
		<button>Login</button>
	</form>
</div>


    <?php
include_once 'footer.php';
?>
