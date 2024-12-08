<?php include("inc_header.php") ?>

<?php
$sukses = "";
$katakunci = (isset($_GET['katakunci'])) ? $_GET['katakunci'] : "";
if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if ($op == 'delete') {
    $id = $_GET['id'];
    $sql1 = "DELETE FROM halaman WHERE id ='$id'";
    $q1   = mysqli_query($koneksi, $sql1);
    if ($q1) {
        $sukses = "Berhasil Menghapus Data";
    }
}
?>

<h1>Halaman Admin Home</h1>

<!-- Tombol Create dan Notifikasi -->
<div class="d-flex justify-content-between mb-3">
    <a href="halaman_input.php">
        <input type="button" class="btn btn-primary" value="Buat Halaman">
    </a>
    <a href="add_notification.php">
        <input type="button" class="btn btn-primary" value="Masukan Notifikasi">
    </a>
</div>

<!-- Menampilkan Notifikasi Sukses -->
<?php
if ($sukses) {
?>
    <div class="alert alert-primary" role="alert">
        <?php echo $sukses ?>
    </div>
<?php
}
?>

<!-- Form Pencarian -->
<form class="row g-3 mb-4" method="get">
    <div class="col-auto">
        <input type="text" class="form-control" placeholder="Masukan Kata Kunci" name="katakunci" value="<?php echo $katakunci ?>" />
    </div>
    <div class="col-auto">
        <input type="submit" name="cari" value="Cari Tulisan" class="btn btn-secondary" />
    </div>
</form>

<!-- Tabel Data Halaman -->
<table class="table table-striped">
    <thead>
        <tr>
            <th class="col-1">No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th class="col-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $per_halaman = 5;
        $sqltambahan = "";

        if ($katakunci != '') {
            $array_katakunci = explode(" ", $katakunci);
            for ($x = 0; $x < count($array_katakunci); $x++) {
                $sqlcari[] = "(judul LIKE '%" . $array_katakunci[$x] . "%' OR isi LIKE '%" . $array_katakunci[$x] . "%')";
            }
            $sqltambahan = "WHERE " . implode(" OR ", $sqlcari);
        }

        $sql_count = "SELECT COUNT(*) as total FROM halaman $sqltambahan";
        $result_count = mysqli_query($koneksi, $sql_count);
        $data_count = mysqli_fetch_assoc($result_count);
        $total = $data_count['total'];

        $page  = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $mulai = ($page > 1) ? ($page * $per_halaman) - $per_halaman : 0;
        $pages = ceil($total / $per_halaman);

        $sql1  = "SELECT * FROM halaman $sqltambahan ORDER BY id DESC LIMIT $mulai, $per_halaman";
        $q1    = mysqli_query($koneksi, $sql1);
        $nomor = $mulai + 1;

        while ($r1 = mysqli_fetch_array($q1)) {
        ?>
            <tr>
                <td><?php echo $nomor++ ?></td>
                <td><?php echo $r1['judul'] ?></td>
                <td><?php echo $r1['isi'] ?></td>
                <td>
                    <a href="halaman_input.php?id=<?php echo $r1['id'] ?>" class="badge bg-warning text-dark">
                        Edit
                    </a>
                    <a href="halaman.php?op=delete&id=<?php echo $r1['id'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" class="badge bg-danger">
                        Delete
                    </a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<!-- Pagination -->
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <?php
        for ($i = 1; $i <= $pages; $i++) {
            $active = ($i == $page) ? 'active' : '';
        ?>
            <li class="page-item <?php echo $active ?>">
                <a class="page-link" href="halaman.php?katakunci=<?php echo $katakunci ?>&page=<?php echo $i ?>"><?php echo $i ?></a>
            </li>
        <?php
        }
        ?>
    </ul>
</nav>

<?php include("inc_footer.php") ?>
