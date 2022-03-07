<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Project</title>
    <link rel="stylesheet" href="afterlogin.css" />
</head>
<?php
include_once 'Header.php';
?>

<body>

    <div class="content">
        <div class="titles">
            <h1>Welcome among us!</h1>
            <h3>we are happy to have you here :) you want to hear from us more ? </h3>
            <h3>SIGN UP FOR NEWSLETTER</h3>
            <form class="input-group" name=Newsletter method="post" action="#" onsubmit="return validateemail();">
                <label>Email</label>
                <input type="Email" class="form-control form-control-sm" placeholder="Enter your email..." name="Email" aria-label="Your Email" aria-describedby="basic-addon2">

                <div class="input-group-append">
                    <button class="btn btn-sm btn-outline-white my-0" type="submit" name="submit">Sign Up *,*</button>
                </div>
            </form>
        </div>

        <div class="div-big-logo"><img class="big-logo" src="images/AMW-white.png" alt="AMW White logo"></div>

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