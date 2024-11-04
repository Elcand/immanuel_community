<?php

require '../admin/config/function.php';

$paraResult = checkParamId('id');
if(is_numeric($paraResult)){

    $userId = validate($paraResult);

    $user = getById('user', $userId);
    if($user['status'] == 200){

    }else{

        redirect('user.php', $paraResult);
    }


}else{
    redirect('user.php', $paraResult);
}

?>

