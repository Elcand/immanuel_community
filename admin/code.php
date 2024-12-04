<?php
require '../inc/inc_fungsi.php';

if(isset($_POST['simpanPengguna']))
{
    $nama = validate($koneksi,$_POST['nama']);
    $phone = validate($koneksi,$_POST['phone']);
    $email = validate($koneksi,$_POST['email']);
    $password = validate($koneksi,$_POST['password']);
    $di_ban = validate($koneksi,$_POST['di_ban']) == true ? 1:0 ;
    $role = validate($koneksi,$_POST['role']);

    if($nama != '' || $email != '' || $phone != '' || $password != '')
    {
        $query = "INSERT INTO users (nama,phone,email,password,di_ban,role) 
                VALUES ('$nama','$phone','$email','$password','$di_ban','$role')";
        $result = mysqli_query($koneksi, $query);

        if($result){
            redirect('user.php','Verifikator/editor/admin sukses ditambahkan');
        }else{
            redirect('user-buat.php','Something whent wrong');
        }
    }
        else
    {
        redirect('user-buat.php','Please fill all input fields');
    }
}

?>