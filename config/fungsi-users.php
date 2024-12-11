<?php
require_once '../inc/db.php';

if (!function_exists('validate')) {
    function validate($koneksi, $inputData)
    {
        if (!is_string($inputData)) {
            error_log("Input bukan string: " . print_r($inputData, true));
        }
        return is_string($inputData) ? mysqli_real_escape_string($koneksi, $inputData) : $inputData;
    }
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

// Fungsi untuk mengambil data berdasarkan ID dari tabel tertentu
function getById($table, $id) {
    // Koneksi ke database (pastikan Anda sudah mengonfigurasi koneksi dengan benar)
    global $koneksi;

    // Query untuk mengambil data berdasarkan ID
    $sql = "SELECT * FROM $table WHERE id = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("i", $id);  // Bind parameter sebagai integer
    $stmt->execute();

    // Menyimpan hasilnya
    $result = $stmt->get_result();

    // Mengembalikan data sebagai array
    if ($result->num_rows > 0) {
        return ['data' => $result->fetch_assoc()];
    } else {
        return ['data' => null];
    }
}


?>
