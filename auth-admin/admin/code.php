<?php 

    require '../config/function.php';

    if(isset($_POST['saveUser']))
    {
        $nama= validate($conn, $_POST['nama']);
        $phone= validate($conn, $_POST['phone']);
        $email= validate($conn, $_POST['email']);
        $password= validate($conn, $_POST['password']);
        $is_ban= validate($conn, $_POST['is_ban']) == true ? 1:0;
        $role= validate($conn, $_POST['role']);

        if($nama != '' || $email != '' || $password )
        {
            $query = "INSERT INTO users (nama,phone,email,password,is_ban,role) VALUES 
            ('$nama','$phone','$email','$password','$is_ban',role)";
            $result = mysqli_query($conn,$query);

            if($result){
                redirect('user.php','User/Admin Added Successfully');
            }else{
                redirect('user-create.php','There is a problem');
            }
        }
        else
        {
            redirect('user-create.php','silakan isi semua kolom input');
        }
    }

?>