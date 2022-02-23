
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
include 'header.php'; ?>



<div class="container">
<h2> Update Profile <h2>
        <br>
        
<form action="profileupdate.php" method="post">
   First Name: <input type="text" name="fname"><br>
    <br>
   Last Name: <input type="text" name="lname"><br>
    <br>
   Email: <input type="email" name="email"><br>
    <br>
   Password: <input type="password" name="password"><br>
   <br>
   <input type="submit" name="edit">
   
</form>
</div>

<?php
include 'footer.php' ?>