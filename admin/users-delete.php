<?php
session_start();
require '../config/fungsi-users.php';

// Check if the 'id' parameter is provided
if (isset($_GET['id']) && $_GET['id']) {
    $userId = $_GET['id'];

    // Validate and sanitize the user ID
    $userId = validate($koneksi, $userId);

    if ($userId) {
        // Check if the user exists in the database
        $query = "SELECT * FROM users WHERE id = '$userId'";
        $result = mysqli_query($koneksi, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            // Proceed with deletion if the user exists
            $deleteQuery = "DELETE FROM users WHERE id = '$userId'";
            $deleteResult = mysqli_query($koneksi, $deleteQuery);

            // Removed the session status messages
        } 
    }
    // Redirect back to the users list page
    header('Location: users.php');
    exit();
} else {
    // If the 'id' parameter is missing, redirect back to the users page
    header('Location: users.php');
    exit();
}
?>
