<?php include('loginserver.php'); ?>
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
    <title>Project</title>
    <link rel="stylesheet" href="Login.css"/>
</head>

<body>
<?php include 'header.php' ?>


<div class="main">
    <div class="container">
        <div class="Header">
            <h2>LOG IN</h2>
        </div>
        <form class="form-control" action="login.php" method="post">
            <label for="email">Email</label>
            <input id="email" type="email" placeholder="" name="email"/>
            <small>Error message</small>
            <div class="form-control">
                <label for="password">Password</label>
                <input id="password" type="password" placeholder="" name="password"/>
                <small>Error message</small>
            </div>
             <button onclick="myFunction()">Login</button>
			 <p id="demo"></p>
        </form>
    </div>

	<?php include 'Footer.php';?>

<script>
function myFunction() {
  document.getElementById("demo").innerHTML = "You will log in now";
}
</script>
</body>
</html>