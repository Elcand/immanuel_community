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
    $_SESSION['status'] = "Please fill all input fields";
    header('Location: users-buat.php');
    exit(0);
}

function getAll($tableName)
{
    global $koneksi;

    $table = validate($tableName);

    $query = "SELECT * FROM $table";
    $result = mysqli_query($koneksi, $query);
    return $result;
}
