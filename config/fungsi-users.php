<?php
require_once '../inc/db.php';

function validate($koneksi, $inputData)
{
    if (is_array($inputData)) {
        foreach ($inputData as $key => $value) {
            $inputData[$key] = mysqli_real_escape_string($koneksi, $value);
        }
        return $inputData;
    }

    return is_string($inputData) ? mysqli_real_escape_string($koneksi, $inputData) : $inputData;
}

if (!function_exists('redirect')) {
    function redirect($url, $status)
    {
        session_start();
        $_SESSION['status'] = $status;
        header('Location: ' . $url);
        exit(0);
    }
}

function webSetting($columnName)
{
    $setting = getById('settings', 1);
    if ($setting['data'] !== null) {
        return $setting['data'][$columnName] ?? null; // Mengembalikan kolom atau null jika tidak ada
    }
    return null; // Jika data tidak ditemukan
}

if (!function_exists('logoutSession')) {
    function logoutSession()
    {
        session_unset();
        session_destroy();
    }
}

if (!function_exists('checkParamId')) {
    function checkParamId($paramType)
    {
        return isset($_GET[$paramType]) ? $_GET[$paramType] : 'No Id Given';
    }
}

if (!function_exists('getAll')) {
    function getAll($tableName)
    {
        global $koneksi;
        $allowedTables = ['users', 'posts', 'categories'];
        if (!in_array($tableName, $allowedTables)) {
            die("Invalid table name provided");
        }

        $query = "SELECT * FROM $tableName";
        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Query Failed: " . mysqli_error($koneksi));
        }

        return $result;
    }
}

if (!function_exists('alertMessage')) {
    function alertMessage()
    {
        if (isset($_SESSION['status'])) {
            $message = $_SESSION['status'];
            echo "<div class='alert alert-error'>$message</div>";
            unset($_SESSION['status']);
        }
    }
}

function getById($table, $id)
{
    global $koneksi;

    if (!$koneksi) {
        die("Koneksi ke database gagal");
    }

    $sql = "SELECT * FROM $table WHERE id = ?";
    $stmt = $koneksi->prepare($sql);
    if (!$stmt) {
        die("Kesalahan pada query: " . $koneksi->error);
    }

    $stmt->bind_param("i", $id);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        return ['data' => $result->fetch_assoc()];
    } else {
        return ['data' => null];
    }
}


?>
