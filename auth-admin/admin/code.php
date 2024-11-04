<?php 

    require '../admin/config/function.php';

    if(isset($_POST['saveUser']))
    {
        $nama= validate($conn, $_POST['nama']);
        $phone= validate($conn, $_POST['phone']);
        $email= validate($conn, $_POST['email']);
        $password= validate($conn, $_POST['password']);
        $is_ban= validate($conn, $_POST['is_ban']) == true ? 1:0;
        $role= validate($conn, $_POST['role']);

        if($nama != '' || $email != '' || $phone !='' || $password != '')
        {
            $query = "INSERT INTO user (nama,phone,email,password,is_ban,role) VALUES 
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


    if(isset($_POST['updateUser']))
    {
        $nama= validate($conn, $_POST['nama']);
        $phone= validate($conn, $_POST['phone']);
        $email= validate($conn, $_POST['email']);
        $password= validate($conn, $_POST['password']);
        $is_ban= validate($conn, $_POST['is_ban']) == true ? 1:0;
        $role= validate($conn, $_POST['role']);

        $userId = validate($_POST['userId']);

        $user = getById('user', $userId);
        if($user['status'] != 200 ){
            redirect('user-edit.php?id='.$userId,'No such id found');
        }

        if($nama != '' || $email != '' || $phone !='' || $password != '')
        {

        $query = "UPDATE user SET
             nama='$nama',
             phone='$phone',
             email='$email',
             password='$password',
             is_ban='$is_ban',
             role='$role' 
             WHERE id='$userId' " ;

            $result = mysqli_query($conn,$query);

            if($result){
                redirect('user- edit.php?id='.$userId,'User/Admin Updated Successfully');
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