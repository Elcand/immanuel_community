<?php
define('DB_SERVER',"localhost");
define('DB_USERNAME',"root");
define('DB_PASSWORD',"");
define('DB_DATABASE',"immanuel_community");

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if(!$conn){
    die("Gagal Terkoneksi:". mysqli_connect_error());
}
?>