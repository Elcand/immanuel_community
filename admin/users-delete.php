<?php

require '../config/function.php';

$paraResult =  checkParamId('id');
if(is_numeric($paraResult)){

    $userId = validate($paraResult);

    $user =getById('users', $userId);
    if($user['status'] == 200){

        $userDelete = deleteQuery('users', $userId);
        if($userDeleteRes){

            redirect('users.php', 'Hallo Admin');
        }else{

            redirect('users.php', 'Pengguna/Admin Sukses Dihapus');
        }

    }else{
        redirect('users.php', $user['message']);

    }

}else{
    redirect('users.php', $paraResult);
}

?>