<?php 
include 'db.php';
include_once 'Header.php';
?>
<?php 
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$password= $_POST['password'];

//insert Data into mysql database
$sql="insert into users (fname, lname, email, password)
values('$fname', '$lname', '$email', '$password')";

if($conn->query($sql) === TRUE) {
    echo "Account created Successfully. Please ";
    echo "<a href='login.php?' class='top'>Login </a>";
  
}
else
{
    echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();


include_once 'Footer.php';

?>