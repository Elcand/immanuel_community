<?php
include_once("inc_header.php");
require_once '../config/fungsi-users.php';
?>

<!-- SweetAlert2 CSS & JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Penggaturan Home</h4>
            </div>
            <div class="card-body">

                <!-- Form -->
                <form action="code.php" method="post">
                    <?php
                        $setting = getById('settings', 1);
                    ?>
                    <input type="hidden" name="settingId" value="<?= $setting['data']['id'] ?? 'insert' ?>" />

                    <!-- Pengaturan Home -->
                    <div class="mb-3">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control" value="<?= $setting['data']['judul'] ?? '' ?>">
                    </div>
                    <div class="mb-3">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="3"><?= $setting['data']['deskripsi'] ?? '' ?></textarea>
                    </div>

                    <!-- Pengaturan Churches -->
                    <h4>Penggaturan Churches</h4>
                    <div class="mb-3">
                        <label>Judul Gereja</label>
                        <input type="text" name="judul_gereja" class="form-control" value="<?= $setting['data']['judul_gereja'] ?? '' ?>">
                    </div>
                    <div class="mb-3">
                        <label>Deskripsi Gereja</label>
                        <textarea name="deskripsi_gereja" class="form-control" rows="3"><?= $setting['data']['deskripsi_gereja'] ?? '' ?></textarea>
                    </div>

                    <!-- Pengaturan Services -->
                    <h4>Penggaturan Services</h4>
                    <div class="mb-3">
                        <label>Judul Services</label>
                        <input type="text" name="judul_services" class="form-control" value="<?= $setting['data']['judul_services'] ?? '' ?>">
                    </div>
                    <div class="mb-3">
                        <label>Deskripsi Services</label>
                        <textarea name="deskripsi_services" class="form-control" rows="3"><?= $setting['data']['deskripsi_services'] ?? '' ?></textarea>
                    </div>

                    <!-- Pengaturan Media -->
                    <h4>Penggaturan Media</h4>
                    <div class="mb-3">
                        <label>Judul Media</label>
                        <input type="text" name="judul_media" class="form-control" value="<?= $setting['data']['judul_media'] ?? '' ?>">
                    </div>
                    <div class="mb-3">
                        <label>URL Media</label>
                        <input type="text" name="slug" class="form-control" value="<?= $setting['data']['slug'] ?? '' ?>">
                    </div>

                    <!-- Pengaturan Contact -->
                    <h4>Penggaturan Contact</h4>
                    <div class="mb-3">
                        <label>Judul Contact</label>
                        <input type="text" name="judul_contact" class="form-control" value="<?= $setting['data']['judul_contact'] ?? '' ?>">
                    </div>
                    <div class="mb-3">
                        <label>Alamat</label>
                        <textarea name="adderss" class="form-control" rows="3"><?= $setting['data']['adderss'] ?? '' ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="<?= $setting['data']['email'] ?? '' ?>">
                    </div>
                    <div class="mb-3">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control" value="<?= $setting['data']['phone'] ?? '' ?>">
                    </div>

                    <!-- Tombol Simpan -->
                    <div class="mb-3 text-center">
                        <div class="d-flex justify-content-center gap-2">
                            <button type="submit" name="saveSetting" class="btn btn-primary">Simpan</button>
                            <a href="halaman.php" class="btn btn-outline-success">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- SweetAlert2 Logic -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Ambil parameter URL
        const urlParams = new URLSearchParams(window.location.search);
        const status = urlParams.get('status');
        const message = urlParams.get('message');

        // Tampilkan alert sesuai status
        if (status === 'success') {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: message || 'Data berhasil disimpan!',
            });
        } else if (status === 'error') {
            Swal.fire({
                icon: 'error',
                title: 'Kesalahan',
                text: message || 'Terjadi kesalahan saat menyimpan data!',
            });
        }
    });
</script>

<?php
include_once("inc_footer.php");
?>
