<?php
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
    <title>Project</title>
    <link rel="stylesheet" href="profile.css"/>
</head>
<?php
include 'Header.php'; 
include "db.php";


$email=$_SESSION['email'];
$password=$_SESSION['password'];

$sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
$result = $conn->query($sql);
$obj = $result->fetch_object();
$name = $obj->fname;
$result = $conn->query($sql);
$count = mysqli_num_rows($result);
if ($count != 1) {
    header("location:login.php");
    exit();
}
?>

<div class="container">
<?php
    if($result-> num_rows > 0){
        echo '<table class = "table"><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th>';
        while($row=$result-> fetch_assoc()){
            echo "<tr><td>".$row["userID"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["email"]."</td></tr>";
        }
        echo "</table>";
    }
?>
</div>
<div class="container">
<?
$result=mysqli_query($conn,"SELECT * FROM users WHERE email = '$email'");

$row = mysqli_fetch_array($result);


echo "<h1>Welcome $name</h1>" ?>
<br><h2> Update Profile <h2><br>
        
<form action="" method="post">
   First Name: <input type="text" name="fname" value = "<?php $name1=$row['fname']; echo $name1 ?> "><br>
    <br>
   Last Name: <input type="text" name="lname" value = "<?php echo $row['lname']; ?> "><br>
    <br>
   Email: <input type="email" name="email" value = "<?php echo $row['email']; ?> "><br>
    <br>
   Password: <input type="password" name="password" value = "<?php echo $row['password']; ?> "><br>
   <br>
   <input type="submit" name="submit">
   
</form>

<?php

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $newEmail = $_POST['email'];
    $newPassword = $_POST['password'];
    mysqli_query($conn, query: "UPDATE users SET fname='$fname', lname ='$lname', email ='$newEmail', password = '$newPassword' WHERE email = '$email' and password = '$password'");
    
}

?>

</div>

<?php
include 'Footer.php' ?>