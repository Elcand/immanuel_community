<?php
include_once("inc_header.php");
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    List Para Pengguna
                    <a href="users-buat.php" class="btn btn-primary float-end"> Tambah Pengguna</a>
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
                            <th>Role</th>
                            <th>Aktivitas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $users = getAll('users');
                        if (mysqli_num_rows($users) > 0) {
                            foreach ($users as $userItem); {
                        ?>
                                <tr>
                                    <td><?= $userItem['id']; ?></td>
                                    <td><?= $userItem['name']; ?></td>
                                    <td><?= $userItem['email']; ?></td>
                                    <td><?= $userItem['phone']; ?></td>
                                    <td><?= $userItem['role']; ?></td>
                                    <td><?= $userItem['is_ban']; ?></td>
                                    <td>
                                        <a href="users-edit.php" class="btn btn-success btn-sm">Edit</a>
                                        <a href="users-delete.php" class="btn btn-danger btn-sm mx-2">Hapus</a>
                                    </td>
                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="7">No Record Found</td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
include_once("inc_footer.php");
?>