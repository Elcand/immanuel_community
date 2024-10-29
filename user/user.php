<?php include('layouts/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    List User
                    <a href="user-create.php" class="btn btn-primary float-end">Tambah User</a>
                </h4>
            </div>
            <div class="card-body">

                <?php alertMessage(); ?>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No Phone</th>
                            <th>Action</th>
                        </tr>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>nama</td>
                            <td>email</td>
                            <td>no phone</td>
                            <td>
                                <a href="user-edit.php" class="btn btn-success btn-sm">Edit</a>
                                <a href="user-delete.php" class="btn btn-danger btn-sm mx-2">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>