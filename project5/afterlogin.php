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
    <?php
    if (isset($_POST['submit'])) {
        $Email = $_POST['Email'];
        $sql = "INSERT INTO Newsletter (Email) values ('$Email')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script> alert(' Subscribed successfully!You will hear from us soon') </script>";
        } else {
            die(mysqli_error($conn));
        }
    }
    ?>
    <script>
        function validateemail() {
            var x = document.Newsletter.Email.value;
            var atposition = x.indexOf("@");
            var dotposition = x.lastIndexOf(".");
            if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= x.length) {
                alert("Please enter a valid e-mail address \n atpostion:" + atposition + "\n dotposition:" + dotposition);
                return false;
            }
        }
    </script>

    </div>

    <?php

    include 'Footer.php';
    ?>
</body>

</html>