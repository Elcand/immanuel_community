<?php
// Start the session before any output is sent
session_start();
include_once("inc_header.php");
require '../config/fungsi-users.php';
?>

<div class="container mt-4">
    <div class="row">

        <!-- Tampilkan pesan notifikasi -->
        <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= htmlspecialchars($_SESSION['success']); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['success']); ?>
        <?php endif; ?>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= htmlspecialchars($_SESSION['error']); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['error']); ?>
        <?php endif; ?>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Masukan Notifikasinya Ya!!!</h4>
                    <a href="halaman.php" class="btn btn-outline-success">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="fungsi_notifications.php" method="POST">
                        <div class="row">
                            <!-- Input Nama Pengirim -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Nama Pengirim</label>
                                    <input type="text" id="title" name="title" class="form-control" placeholder="Masukkan nama pengirim" required>
                                </div>
                            </div>

                            <!-- Input Pesan -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="message" class="form-label">Pesan</label>
                                    <input type="text" id="message" name="message" class="form-control" placeholder="Masukkan pesan" required>
                                </div>
                            </div>

                            <!-- Input Waktu -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="created_at" class="form-label">Waktu</label>
                                    <input type="datetime-local" id="created_at" name="created_at" class="form-control" required readonly>
                                </div>
                            </div>
                        </div>

                        <!-- Tombol Simpan dan Batal -->
                        <div class="row mt-4">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary me-2">Simpan</button>
                                <a href="halaman.php" class="btn btn-secondary">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Tambahkan JavaScript di sini -->
<script>
    // Fungsi untuk mengatur waktu input secara otomatis
    function setCurrentDateTime() {
        const now = new Date(); // Ambil waktu sekarang
        const year = now.getFullYear();
        const month = String(now.getMonth() + 1).padStart(2, '0'); // Bulan (0-indexed)
        const date = String(now.getDate()).padStart(2, '0'); // Tanggal
        const hours = String(now.getHours()).padStart(2, '0'); // Jam
        const minutes = String(now.getMinutes()).padStart(2, '0'); // Menit

        // Format datetime sesuai input type datetime-local
        const formattedDateTime = `${year}-${month}-${date}T${hours}:${minutes}`;

        // Isi value input dengan ID "created_at"
        document.getElementById('created_at').value = formattedDateTime;
    }

    // Panggil fungsi saat halaman selesai dimuat
    window.onload = setCurrentDateTime;
</script>

<?php
include_once("inc_footer.php");
?>