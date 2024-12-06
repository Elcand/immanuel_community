<?php
include("../inc/db.php");

// Fetch notifications from the database
$query = "SELECT title, message, created_at FROM notifications ORDER BY created_at DESC LIMIT 10";
$result = $koneksi->query($query);

$notifications = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $notifications[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($notifications);
?>
