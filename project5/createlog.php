<?php 
include 'db.php';
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$password= $_POST['password'];

if (empty($_POST['email'])) {
    echo "<h1>Please input your Email Address</h1>";
} 
if (empty($_POST['password'])) {
    echo "<h1>Please input your Password</h1>";
} 
    else {
$sql="insert into users (fname, lname, email, pwd)
values('$fname', '$lname', '$email', '$password')";

if($conn->query($sql) === TRUE) {
    echo "New record added";
    echo "<a href='login.php?' class='top'>Login </a>";
}
else
{
    echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();

}
















?>
