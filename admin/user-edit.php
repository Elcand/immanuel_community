<?php
include_once("inc_header.php");
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Edit Pengguna
                    <a href="user.php" class="btn btn-outline-success float-end">Kembali</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Nama Pengguna</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>No.Phone</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Pilih Role</label>
                                <select name="role" class="form-select">
                                    <option value="">Pilih Role</option>
                                    <option value="verifikator">Verifikator</option>
                                    <option value="editor">Editor</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="b-3">
                                <label>Aktivitas</label>
                                <br />
                                <input type="checkbox" name="di_ban" style="width:30px;height:30px" />
                            </div>
                        </div>
                        <div class="col-md"  style="text-align: center;">
                            <div class="mb-3">
                                <button type="submit" name="simpanPengguna" class="btn btn-primary">Edit</button>
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