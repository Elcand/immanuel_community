<?php
include_once("inc_header.php");
require_once '../config/fungsi-users.php';
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    List Para Pengguna
                    <a href="users-buat.php" class="btn btn-primary float-end">Tambah Pengguna</a>
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
                        // Retrieve all users from the database
                        $users = getAll('users');
                        if (mysqli_num_rows($users) > 0) {
                            // Loop through each user and display the data
                            foreach ($users as $userItem) {
                        ?>
                                <tr>
                                    <td><?= $userItem['id']; ?></td>
                                    <td><?= $userItem['name']; ?></td>
                                    <td><?= $userItem['email']; ?></td>
                                    <td><?= $userItem['phone']; ?></td>
                                    <td><?= $userItem['role']; ?></td>
                                    <td><?= $userItem['is_ban'] == 1 ? 'Banned' : 'Aktif'; ?></td>
                                    <td>
                                        <a href="users-edit.php?id=<?= $userItem['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="users-delete.php?id=<?= $userItem['id']; ?>"
                                            class="btn btn-danger btn-sm mx-2"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?');">
                                            Hapus
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="7">Tidak Ada Catatan yang Ditemukan</td>
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