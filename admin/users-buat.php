<?php
// Start the session before any output is sent
session_start();
include_once("inc_header.php");
require '../config/fungsi-users.php';
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Tambah Pengguna Baru
                    <a href="users.php" class="btn btn-outline-success float-end">Kembali</a>
                </h4>
            </div>
            <div class="card-body">
                
                <!-- Removed alert message block -->

                <form action="code.php" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Nama Pengguna</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>No. Phone</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Pilih Role</label>
                                <select name="role" class="form-select" required>
                                    <option value="">Pilih Role</option>
                                    <option value="verifikator">Verifikator</option>
                                    <option value="editor">Editor</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Aktivitas</label>
                                <input type="checkbox" name="is_ban" style="width:30px;height:30px" />
                            </div>
                        </div>
                        <div class="col-md" style="text-align: center;">
                            <div class="mb-3">
                                <button type="submit" name="saveUser" class="btn btn-primary">Simpan</button>
                            </div>
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
