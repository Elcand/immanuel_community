<?php  include('includes/header.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                    Daftar Pengguna
                    <a href="users-create.php" class="btn btn-primary float-end">Tambahkan User/Admin</a>
                    </h4>
                </div>
                <div class="card-body">

                  <?= alertMessage(); ?>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Is Ban</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                           $users = getAll('users');
                           if(mysqli_num_rows($users) > 0)
                           {
                                foreach($users as $userItem)
                                {
                                    ?>
                                         <tr>
                                        <td><?= $userItem['id'] ;?></td>
                                        <td><?= $userItem['name'] ;?></td>
                                        <td><?= $userItem['email'] ;?></td>
                                        <td><?= $userItem['phone'] ;?></td>
                                        <td><?= $userItem['role'] ;?></td>
                                        <td><?= $userItem['is_ban'] == 1 ?'Dilarang':'Aktif' ;?></td>
                                        <td>
                                            <a href="users-edit.php?id=<?= $userItem['id'] ;?>" class="btn btn-success btn-sm">Edit</a>
                                            <a href="users-delete.php?id=<?= $userItem['id'] ;?>" 
                                                class="btn btn-danger btn-sm mx-2"
                                                onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')"
                                                 >
                                                Hapus
                                            </a>
                                        </td>
                        </tr>
                                    <?php
                                }
                           }
                           else
                           {
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

<?php  include('includes/footer.php'); ?>