<?php
require '../inc/db.php';

function validate($koneksi, $inputData)
{
    if (!is_string($inputData)) {
        error_log("Input bukan string: " . print_r($inputData, true));
    }
    return is_string($inputData) ? mysqli_real_escape_string($koneksi, $inputData) : $inputData;
}

function redirect($url, $status)
{
    session_start(); // Ensure session is started
    $_SESSION['status'] = $status; // Set the status message in session
    header('Location: ' . $url);
    exit(0);
}

function checkParamId($paramType)
{
    if (isset($_GET[$paramType])) {
        return $_GET[$paramType] !== null ? $_GET[$paramType] : 'No Id Found';
    }
    return 'No Id Given';
}

function getAll($tableName)
{
    global $koneksi;

    // Ensure the table name is a valid identifier
    $allowedTables = ['users', 'posts', 'categories']; // Example list of allowed tables
    if (!in_array($tableName, $allowedTables)) {
        die("Invalid table name provided");
    }

    $query = "SELECT * FROM $tableName";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query Failed: " . mysqli_error($koneksi)); // Debugging error message
    }

    return $result; // Returns the raw query result
}

/**
 * Display an alert message on the page if available in the session.
 *
 * @return void
 */
function alertMessage()
{
    if (isset($_SESSION['status'])) {
        $message = $_SESSION['status'];
        echo "<div class='alert alert-error'>$message</div>";
        unset($_SESSION['status']); // Clear the session message after displaying
    }
}
?>
