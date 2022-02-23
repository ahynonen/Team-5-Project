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
    <link rel="stylesheet" href="styles.css"/>
    <link rel="stylesheet" href="homepage.css"/>
</head>
<body>

<?php
include_once 'Header.php';
?>

<div class="content">
    <div class="titles">
        <h1>Welcome shit!</h1>
        <h3>we are happy to have you here :)</h3>
    </div>
    <div class="div-big-logo"><img class="big-logo" src="images/AMW-white.png" alt="AMW White logo"></div>
    <button onclick="myFunction()">Login</button>
    <script>
       function myFunction() {
       document.getElementById("demo").innerHTML = "You will log in now";
}
</div>
<?php
	include 'Footer.php';
	?>
</body>
</html>
