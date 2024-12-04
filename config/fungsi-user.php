<?php

session_start();
include("../inc/db.php");
function validate($inputData)
{
    global $koneksi;
    return mysqli_real_escape_string($koneksi, $inputData); // Menggunakan mysqli_real_escape_string
}


function redirect($url, $status)
{
    $_SESSION['status'] = "Please fill all input fields";
    header('Location: user-buat.php');
    exit(0);
}

function alertMesagge(){
    if(isset($_SESSION['status']))
    {
        echo '<div class="alert alert-success">
            <h4>'.$_SESSION['status'].'</h4>
        </div>';
        unset($_SESSION['status']);
    }
}
