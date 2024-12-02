<?php 
function url_dasar(){
    //$_SERVER['SERVER_NAME'] : alamat website, misalkan websiteimmanuelcommunity.com
    //$_SERVER['SCRIPT_NAME'] : directory website, websiteimmanuelcommunity.com/blog/ $_SERVER['SCRIPT_NAME'] : blog
    $url_dasar = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']);
    return $url_dasar;
}
function ambil_gambar($id_tulisan){
    global $koneksi;
    $sql1 = "select * from halaman where id = '$id_tulisan'";
    $q1   = mysqli_query($koneksi,$sql1);
    $r1   = mysqli_fetch_array($q1);
    $text = $r1['isi'];  // Corrected this line

    preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $text, $img);
    $gambar = $img[1];
    $gambar = str_replace("../gambar/",url_dasar()."/gambar/",$gambar);
    return $gambar;
}

?>