<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Tambah User
                    <a href="user.php" class="btn btn-danger float-end">Kembali</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="code.php" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>No Tlp</label>
                                <input type="text" name="tlp" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Pilih Role</label>
                        <select name="role" class="form-select">
                            <option value="">Pilih Role Anda</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <label>Is Ban</label>
                    <br />
                    <input type="checkbox" name="is_ban" style="width: 30px;height: 30px" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3 text-end">
                    <br />
                    <button type="submit" name="saveUser" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
</div>
</div>