<?php

require '../admin/config/function.php';

$paraResult = checkParamId('id');
if(is_numeric($paraResult)){

    $userId = validate($paraResult);

    $user = getById('user', $userId);
    if($user['status'] == 200){
        
        $userDeleteRes = deleteQuery('user', $userId);
        if($userDeleteRes){

            redirect('user.php', 'Penghapusan Sukses');
        }else{

            redirect('user.php', 'Something went wrong');
        }

    }else{

        redirect('user.php', $user['message']);
    }


}else{
    redirect('user.php', $paraResult);
}

?>

