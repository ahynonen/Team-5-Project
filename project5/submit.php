
<?php 
include 'db.php';
include_once 'Header.php';
?>
<?php 
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$pwd= $_POST['pwd'];

//insert Data into mysql database
$sql="insert into users (fname, lname, email, pwd)
values('$fname', '$lname', '$email', '$pwd')";

if($conn->query($sql) === TRUE) {
   
    echo "<a href='login.php?' class='top'>Login </a>";
    echo "<p class=\"try\"> Account created Successfully. Please:</p>";
  
}
else
{
    echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();


include_once 'Footer.php';

?>
