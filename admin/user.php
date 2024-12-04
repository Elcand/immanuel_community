<?php 
include_once("inc_header.php");
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    List Para Pengguna
                    <a href="user-buat.php" class="btn btn-primary float-end"> Tambah Pengguna</a>
                </h4>
            </div>
            <div class="card-body">


                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama Pengguna</th>
                            <th>Email</th>
                            <th>No.Phone</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>nama</td>
                            <td>email</td>
                            <td>nophone</td>
                            <td>
                                <a href="user-edit.php" class="btn btn-success btn-sm">Edit</a>
                                <a href="user-delete.php" class="btn btn-danger btn-sm mx-2">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
include_once("inc_footer.php");
?>
