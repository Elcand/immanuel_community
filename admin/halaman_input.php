<?php include("inc_header.php") ?>

<?php
$judul  = "";
$isi    = "";
$error  = "";
$sukses = "";

if (isset($_GET['id']) && $_GET['id'] != "") {
    $id = $_GET['id'];

    $sql1 = "SELECT * FROM halaman WHERE id = '$id'";
    $q1 = mysqli_query($koneksi, $sql1);

    if ($q1 && mysqli_num_rows($q1) > 0) {
        $r1 = mysqli_fetch_array($q1);
        $judul = $r1['judul'];
        $isi = $r1['isi'];
    } else {
        $error = "Data tidak ditemukan!";
    }
} else {
    $id = "";
}

if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    if ($judul == '' || $isi == '') {
        $error = "Silakan masukkan semua data yakni Judul dan Isi.";
    }

    if (empty($error)) {
        if ($id != "") {
            $sql1 = "UPDATE halaman SET judul = '$judul', isi = '$isi', tgl_isi = NOW() WHERE id = '$id'";
        } else {
            $sql1 = "INSERT INTO halaman (judul, isi) VALUES ('$judul', '$isi')";
        }

        $q1 = mysqli_query($koneksi, $sql1);

        if ($q1) {
            $sukses = "Sukses menyimpan data.";
        } else {
            $error = "Gagal menyimpan data.";
        }
    }
}
?>

<div class="d-flex justify-content-between align-items-center">
    <h1 class="mb-3" style="margin-left: 10px;">Halaman Admin Input Data</h1>
    <a href="halaman.php" class="btn btn-outline-success">Kembali</a>
</div>

<?php if ($error) { ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error; ?>
    </div>
<?php } ?>

<?php if ($sukses) { ?>
    <div class="alert alert-primary" role="alert">
        <?php echo $sukses; ?>
    </div>
<?php } ?>

<form action="" method="post">
    <div class="mb-3 row">
        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="judul" value="<?php echo $judul; ?>" name="judul">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="isi" class="col-sm-2 col-form-label">Isi</label>
        <div class="col-sm-10">
            <textarea name="isi" class="form-control" id="summernote"><?php echo $isi; ?></textarea>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
        </div>
    </div>
</form>

<?php include("inc_footer.php") ?>
