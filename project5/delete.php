<?php
include 'db.php';

$id = $_POST['id'];

mysqli_query($conn, "DELETE FROM users where userID='$id'");

header("Location: admin.php")
?>