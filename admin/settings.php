<?php
include_once("inc_header.php");
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Penggaturan Home</h4>
            </div>
            <div class="card-body">
                <form action="code.php" method="post">

                    <input type="hidden" name="settingId" value="insert" />

                    <!-- Pengaturan Home -->
                    <div class="mb-3">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="3"></textarea>
                    </div>

                    <!-- Pengaturan Churches -->
                    <h4>Penggaturan Churches</h4>
                    <div class="mb-3">
                        <label>Judul Gereja</label>
                        <input type="text" name="judul_gereja" class="form-control"></input>
                    </div>
                    <div class="mb-3">
                        <label>Deskripsi Gereja</label>
                        <textarea name="deskripsi_gereja" class="form-control" rows="3"></textarea>
                    </div>

                    <!-- Pengaturan Services -->
                    <h4>Penggaturan Services</h4>
                    <div class="mb-3">
                        <label>Judul Services</label>
                        <input type="text" name="judul_services" class="form-control"></input>
                    </div>
                    <div class="mb-3">
                        <label>Deskripsi Services</label>
                        <textarea name="deskripsi_services" class="form-control" rows="3"></textarea>
                    </div>

                    <!-- Pengaturan Media -->
                     <h4>Penggaturan Media</h4>
                     <div class="mb-3">
                        <label>Judul Media</label>
                        <input type="text" name="judul_media" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>URL Media</label>
                        <input type="text" name="slug" class="form-control">
                     </div>
                     

                    <!-- Pengaturan Contact -->
                    <h4>Penggaturan Contact</h4>
                    <div class="mb-3">
                        <label>Judul Contact</label>
                        <input type="text" name="judul_contact" class="form-control"></input>
                    </div>
                    <div class="mb-3">
                        <label>Alamat</label>
                        <textarea name="adderss" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control"></input>
                    </div>
                    <div class="mb-3">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control"></input>
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

<?php
include_once("inc_footer.php");
?>