<?php
include 'db.php';

$email = "";
$password= "";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){



$email= $_POST['email'];
$password= $_POST['password'];


if (empty($_POST['email'])) {
    echo "<script> alert('Please input your Email Address')</script>";
} else if (empty($_POST['password'])) {
    echo "<script> alert('Please input your Password')</script>";
} else {
$sql="insert into users (userID, email, password)
values('$userID', '$email', '$password')";
    }
}

?>