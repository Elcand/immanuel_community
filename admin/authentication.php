<?php 

if(isset($_SESSION['auth']))
{
    if(isset($_SESSION['loggedInUserRole'])){

        $role = validate($_SESSION['loggedInUserRole']);
        $email = validate($_SESSION['loggedInUser']['email']);

        $query = "SELECT * FROM users WHERE email='$email' AND role='$role' LIMIT 1 ";
        $result = mysqli_query($conn, $query);
        if($result){

            if(mysqli_num_rows($result) == 0){

                logoutSession();
                redirect('../login.php', 'Akses ditolak');
            }
            else
            {
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
               if ($row['role'] != 'admin'){

                logoutSession();
                redirect('../login.php', 'Akses ditolak.');
               }

                if ($row['is_ban'] == 1) {
                    logoutSession();
                    redirect('../login.php', 'Akun Anda telah diblokir. Silakan hubungi Admin');
                }


            }
        }else{

            logoutSession();
            redirect('../login.php', 'Ada Masalah');
       }
    }
}else{
    redirect('../login.php', 'Masuk Untuk Melanjutkan...');

}

?>