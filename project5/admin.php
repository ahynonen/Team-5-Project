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

?>

<div class="container">
    <h3> Update Profiles <h3><br>
<?php
$sql="SELECT * FROM users";
$result = $conn-> query($sql);
if ($result -> num_rows >0) {
    while ($row = $result -> fetch_assoc()){
        echo '<form action="" method="post">
        <input name = "id" hidden value=' . $row['userID'] . '>
        First Name: <input class="border" type="text" name="fname" value = ' . $row['fname'] . '>
        Last Name: <input class="border" type="text" name="lname" value = ' . $row['lname'] . '>
        Password: <input class="border" type="text" name="password" value = ' . $row['password'] . '>
        <input class="button" type="submit" name="submit">
        <button class="button" formaction="delete.php">delete</button>
        </form>';
    }
}


?>
<?php

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $newPassword = $_POST['password'];
    $id = $_POST["id"];
    mysqli_query($conn, query: "UPDATE users SET fname='$fname', lname ='$lname', password = '$newPassword' WHERE userID='$id'");
    
}

?>

</div>

<?php
include 'Footer.php' ?>