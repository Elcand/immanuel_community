<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Website Setting</h4>
            </div>
            <div class="card-body">

                <?= alertMessage(); ?>

                <form action="code.php" method="POST">

                    <?php
                    $settings = getById('settings', 1)
                    ?>

                    <input type="hidden" name="settingId" value="<?= $settings['data']['id'] ?? 'insert' ?>" />

                    <div class="mb-3">
                        <label>Title</label>
                        <input type="text" name="title" value="<?= $settings['data']['title'] ?? "" ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>URL</label>
                        <input type="text" name="slug" value="<?= $settings['data']['slug'] ?? "" ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Deskripsi Kecil</label>
                        <input type="text" name="small_description" value="<?= $settings['data']['small_description'] ?? "" ?>" class="form-control">
                    </div>

                    <h4 class="my-3">Admin Setting</h4>
                    <div class="mb-3">
                        <label>Deskripsi Meta</label>
                        <textarea name="meta_description" class="form-control" rows="3"><?= $settings['data']['meta_description'] ?? "" ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Kata Kunci Meta</label>
                        <textarea name="meta_keyword" class="form-control" rows="3"><?= $settings['data']['meta_keyword'] ?? "" ?></textarea>
                    </div>

                    <h4 class="my-3">Informasi Kontak</h4>
                    <div class="row">


                        <div class="col-md-6 mb-3">
                            <label>Email 1</label>
                            <input type="email" name="email1" value="<?= $settings['data']['email1'] ?? "" ?>" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Email 2</label>
                            <input type="email" name="email2" value="<?= $settings['data']['email2'] ?? "" ?>" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Phone 1</label>
                            <input type="text" name="phone1" value="<?= $settings['data']['phone1'] ?? "" ?>" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Phone 2</label>
                            <input type="text" name="phone2" value="<?= $settings['data']['phone2'] ?? "" ?>" class="form-control">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Alamat</label>
                            <textarea name="address" class="form-control" rows="3"><?= $settings['data']['address'] ?? "" ?></textarea>
                        </div>
                    </div>

                    <div class="mb-3 text-center">
                        <button type="submit" name="saveSetting" class="btn btn-primary">Save Setting</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>