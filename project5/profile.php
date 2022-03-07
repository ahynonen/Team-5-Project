<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Project</title>

    <link rel="stylesheet" href="profile.css" />
</head>
<?php
include 'Header.php';
include "db.php";


$email = $_SESSION['email'];

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);
$obj = $result->fetch_object();
$name = $obj->fname;
$result = $conn->query($sql);
$count = mysqli_num_rows($result);

if ($count != 1) {
    header("Location:login.php");
    exit();
}
?>

<div class="container">
    <div>
        <?php

        echo "<h1>Welcome $name</h1>";
        if ($result->num_rows > 0) {
            echo '<table class = "table"><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th>';
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["userID"] . "</td><td>" . $row["fname"] . "</td><td>" . $row["lname"] . "</td><td>" . $row["email"] . "</td></tr>";
            }
            echo "</table>";
        }

        $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

        $row = mysqli_fetch_array($result);

        ?>
    </div>
    <div>
        <h2>Update<h2>
                <form action="" method="post">
                    <h5>First Name: </h5><input type="text" class="border" name="fname" value="<?php echo $row['fname']; ?>"><br>
                    
                    <h5>Last Name:</h5> <input type="text" class="border" name="lname" value="<?php echo $row['lname']; ?>"><br>
                    
                    <h5>Password:</h5> <input class="password border" type="password" name="password" value="<?php echo $row['password']; ?>"><br>
                    <span class="error-message"></span>
                    
                    <input class="button" type="submit" name="submit">
                    

                </form>
    </div>
    <?php

    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $newPassword = $_POST['password'];
        mysqli_query($conn, query: "UPDATE users SET fname='$fname', lname ='$lname', password = '$newPassword' WHERE email = '$email'");
        echo "Refresh page to see changes";
    }

    ?>

</div>

<script>
    const message = document.querySelector(".error-message")
    const passwordField = document.querySelector(".password")

    passwordField.addEventListener("input", (e) => {
        if (passwordField.value.length < 8) {
            message.innerHTML = "Hint: increase the password length for better strength"
        } else {
            message.innerHTML = ""
        }
    })
</script>

<?php
include 'Footer.php' ?>