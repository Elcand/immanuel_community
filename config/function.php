<?php 
    session_start();

    require 'dbcon.php';

    function validate($inputData){
        global $conn;

        return mysqli_real_escape_string($conn,$inputData);
    }

        function redirect($url, $status)
        {  
        $_SESSION['status'] ="silakan isi semua kolom input";
        header('Location: '.$url);
        exit(0);
        }

        function alertMessage()
        {
            if (isset($_SESSION['status']))
            {
                echo '<div class="alert alert-success">
                    <h4>'.$_SESSION['status'].'</h4>
                </div>';
                unset($_SESSION['status']);
            }
        }

    ?>