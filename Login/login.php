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
    <link rel="stylesheet" href="Login.css"/>
</head>

<body>
<?php
include 'Header.php';
/*include 'db.php';
$email= $_POST['email'];
$password= $_POST['password'];

if (empty($_POST['email'])) {
    echo "<h1>Please input your Email Address</h1>";
} 
if (empty($_POST['password'])) {
    echo "<h1>Please input your Password</h1>";
} 
    else {
$sql="insert into users (userID, email, password)
values('$userID', '$email', '$password')";

if($conn->query($sql) === TRUE) {
    echo "New connexion ";
}
else
{
    echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();

}
?>
*/
?>
<div class="main">
    <div class="container">
        <div class="Header">
            <h2>LOG IN</h2>
        </div>
        <form class="form-control">
            <label for="email">Email</label>
            <input id="email" type="email" placeholder="" name="email"/>
            <small>Error message</small>
            <div class="form-control">
                <label for="password">Password</label>
                <input id="password" type="password" placeholder="" name="password"/>
                <small>Error message</small>
            </div>

			
            <button>Login</button>
        </form>

    </div>

	<?php
	include 'Footer.php';
	?>
</div>

</body>
</html>

<?php
$email = "";
$password= "";
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
}
  if (empty($_POST["password"])) {
    $nameErr = "Password is required";
  } else {
    $name = test_input($_POST["password"]);
  }
  
  
ECHO "<h2>Your Input:</h2>";
ECHO $email;
ECHO "<br>";
ECHO $password;
ECHO "<br>";

?>