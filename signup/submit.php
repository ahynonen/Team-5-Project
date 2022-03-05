<?php 
include 'db.php';
include_once 'header.php';
?>
<?php 
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$pwd= $_POST['pwd'];

<<<<<<< HEAD:signup/submit.php
//insert Data into mysql database
=======
if (empty($_POST['email'])) {
    echo "<h1>Please input your Email Address</h1>";
} 
if (empty($_POST['pwd'])) {
    echo "<h1>Please input your Password</h1>";
}
    else {
>>>>>>> d195e8733538eabdb684222b13185458c75a51be:signup/create.php
$sql="insert into users (fname, lname, email, pwd)
values('$fname', '$lname', '$email', '$pwd')";

if($conn->query($sql) === TRUE) {
    echo "Account created Successfully. Please ";
    echo "<a href='login.php?' class='top'>Login </a>";
  
}
else
{
    echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();


include_once 'footer.php';

?>