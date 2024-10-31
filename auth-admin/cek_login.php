<?php
session_start();
include('koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['level'] = $user['level'];
        if ($user['level'] == "admin") {
            header("Location:admin");
        } else {
            header("Location:user_dashboard.php");
        }
    } else {
        header("Location: login.php?message=error");
    }
} else {
    header("Location: login.php?message=error");
}
?>
