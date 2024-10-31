<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
} else {
    if ($_SESSION['level'] == "admin") {
        header("Location: admin");
    } else {
        header("Location: user_dashboard.php");
    }
}
?>
