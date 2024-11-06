<?php

define('DB_SERVE',"localhost");
define('DB_USERNAME',"root");
define('DB_PASSWORD',"");
define('DB_DATABASE', "immanuel_com");

$conn = mysqli_connect(DB_SERVE,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if(!$conn){
    die("Connection Failed: ". mysqli_connect_error());
}

?>
