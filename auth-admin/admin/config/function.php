<?php 
    session_start();

    require 'dbcon.php';

    function validate($inputData){

        global $conn;

        $validatedData = mysqli_real_escape_string($conn, $inputData);
        return trim($validatedData);
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

        function checkParamId($paramtype) {

            if(isset($_GET[$paramtype])){
                if($_GET[$paramtype] != null){
                    return $_GET[$paramtype]; 
                }else{
                     return 'No id found';
                }
            }else{
                return 'No id given';
            }
        }

        function getAll($tableNama)
        {
            global $conn;

            $table = validate($tableNama);

            $query = "SELECT * FROM $table";
            $result = mysqli_query($conn, $query);
            return $result;
        }


        function getById($tableNama, $id)
        {
            global $conn;

            $table = validate($tableNama);
            $id = validate($id);

            $query = "SELECT * FROM $table WHERE id='$id' LIMIT 1";
            $result = mysqli_query($conn, $query);

            if($result)
            {
                if(mysqli_num_rows($result) == 1)
                {
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $response = [
                        'status' => 200,
                        'message' => 'Fected Data',
                        'data' => $row
                    ];
                    return $response;
                }
                else
                {
                    $response = [
                        'status' => 404,
                        'message' => 'No Data Record'
                    ];
                    return $response;
                }
            }
            else
            {
                $response = [
                    'status' => 500,
                    'message' => 'Something when wrong'
                ];
                return $response;
            }
        }
    ?>