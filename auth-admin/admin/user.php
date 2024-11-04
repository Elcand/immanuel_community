<?php include('includes/header.php'); ?>

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
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No Phone</th>
                            <th>Role</th>
                            <th>Is Ban</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $user = getAll('user'); // Mengambil semua data dari tabel 'user'
                            if(mysqli_num_rows($user) > 0)
                            {
                                foreach($user as $userItem)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $userItem['id']; ?></td>
                                        <td><?= $userItem['nama']; ?></td>
                                        <td><?= $userItem['email']; ?></td>
                                        <td><?= $userItem['phone']; ?></td> <!-- Pastikan nama kolom benar -->
                                        <td><?= $userItem['role']; ?></td>
                                        <td><?= $userItem['is_ban'] == 1 ? 'Banned' : 'Active'; ?></td>
                                        <td>
                                            <a href="user-edit.php?id=<?= $userItem['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                            <a href="user-delete.php?id=<?= $userItem['id']; ?>" class="btn btn-danger btn-sm mx-2">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
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

<?php include('includes/footer.php'); ?>
