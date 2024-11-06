<?php
session_start();

require 'dbcon.php';

function validate($inputData){

    global $conn;

    return mysqli_real_escape_string($conn, $inputData);
}

    function redirect($url, $status)
    {
        $_SESSION['status'] = $status;
        header('Location: '.$url);
        exit(0);
    }

    function alertMessage()
{
    if(isset($_SESSION['status']))
    {
        echo '<div class="alert alert-success" style="color: green;">
            <h6>'.$_SESSION['status'].'</h6>
        </div>';
        unset($_SESSION['status']);
    }
}

function checkParamId($paramType){
    if(isset($_GET[$paramType])){
        if($_GET[$paramType] != null){
            return $_GET[$paramType];
        }else{
            return 'No Id Found';     
        }
    }else{
        return 'No Id Given';
    }
}

function getAll($tableName)
{
    global $conn;

    $table = validate($tableName);

    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    return $result;
}


function getById($tableName, $id)
{
    global $conn;

    $table = validate($tableName);
    $id = validate($id);

    $query = "SELECT * FROM $table WHERE id='$id' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result)
    {
        if(mysqli_num_rows($result) == 1)
        {

        }
        else
        
    }
    else
    {
        $response = [
            'status' => 500,
            'message' => 'Something Went Wrong'
        ];
        return $response;
    }
}

?>
