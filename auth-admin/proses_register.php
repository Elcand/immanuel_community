<?php
include('koneksi.php');

$email = $_POST['email'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$level = $_POST['level'];

// Insert into database
$sql = "INSERT INTO users (email, username, password, level) VALUES ('$email', '$username', '$password', '$level')";
if ($conn->query($sql) === TRUE) {
    header("Location: register.php?message=success");
} else {
    header("Location: register.php?message=error");
}
?>
