<?php
include_once("inc_header.php");
include("../config/fungsi-users.php"); // Include fungsi checkParamId

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Fetch the user data based on the ID
    $query = "SELECT * FROM users WHERE id = '$userId'";
    $result = mysqli_query($koneksi, $query);
    
    if (mysqli_num_rows($result) > 0) {
        $userData = mysqli_fetch_assoc($result);
    } else {
        header('Location: users.php');
        exit();
    }
} else {
    header('Location: users.php');
    exit();
}

// Optional: Check if there's a status message set in the session to display
// The following lines were removed to avoid session messages:
$statusMessage = isset($_SESSION['status']) ? $_SESSION['status'] : null;
unset($_SESSION['status']); // Removed

?>

<style>
    /* Styling for the password field and icon */
    .input-group {
        display: flex;
        align-items: center;
    }

    #passwordField {
        flex-grow: 1;
    }

    #togglePassword {
        cursor: pointer;
        background: none;
        border: none;
        padding: 0;
        margin-left: 5px; /* Small margin to keep the icon inside the input group */
    }

    #togglePassword i {
        font-size: 20px;
    }

    /* Styling for the form layout */
    .row > .col-md-6 {
        margin-bottom: 15px;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .form-group {
        display: flex;
        align-items: center;
    }

    .form-group label {
        flex-shrink: 0;
        margin-right: 10px;
    }

    .form-group input,
    .form-group select {
        flex-grow: 1;
    }

    /* Styling for the checkbox to align it nicely */
    .checkbox-container {
        display: flex;
        align-items: center;
    }

    .checkbox-container input {
        width: 30px;
        height: 30px;
        margin-left: 10px;
    }

    .col-md-6 {
        margin-bottom: 15px;
    }
</style>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Edit Pengguna
                    <a href="users.php" class="btn btn-outline-success float-end">Kembali</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="code.php" method="POST">

                    <?php
                    // Mengambil ID dari URL dan memvalidasinya
                    $paramResult = checkParamId('id');
                    if (!is_numeric($paramResult)) {
                        echo '<h5>' . $paramResult . '</h5>';
                        return false;
                    }

                    // Fetch data dari database berdasarkan ID
                    include("../inc/db.php");
                    $query = "SELECT * FROM users WHERE id = '$paramResult' LIMIT 1";
                    $result = mysqli_query($koneksi, $query);

                    if (mysqli_num_rows($result) > 0) {
                        $user = mysqli_fetch_assoc($result);
                    } else {
                        echo "<h5>User not found</h5>";
                        return false;
                    }
                    ?>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Nama Pengguna</label>
                                <input type="text" name="name" value="<?= $user['name'] ?>" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>No. Phone</label>
                                <input type="text" name="phone" value="<?= $user['phone'] ?>" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" value="<?= $user['email'] ?>" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" id="passwordField" value="<?= $user['password'] ?>" required class="form-control">
                                    <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                                        <i class="fas fa-eye" id="passwordIcon"></i> <!-- Ikon mata -->
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Pilih Role</label>
                                <select name="role" required class="form-select">
                                    <option value="">Pilih Role</option>
                                    <option value="verifikator" <?= $user['role'] == 'verifikator' ? 'selected' : '' ?>>Verifikator</option>
                                    <option value="editor" <?= $user['role'] == 'editor' ? 'selected' : '' ?>>Editor</option>
                                    <option value="admin" <?= $user['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3 checkbox-container">
                                <label>Aktivitas</label>
                                <input type="checkbox" name="is_ban" <?= $user['is_ban'] ? 'checked' : '' ?> />
                            </div>
                        </div>

                        <div class="col-md" style="text-align: center;">
                            <div class="mb-3">
                                <button type="submit" name="updateUser" class="btn btn-primary">Edit</button>
                                <input type="hidden" name="id" value="<?= $paramResult ?>">
                            </div>
                        </div>
                    </div>

            </div>
            </form>
        </div>
    </div>
</div>
</div>

<script>
    // Dapatkan elemen-elemen yang diperlukan
    const togglePassword = document.getElementById('togglePassword');
    const passwordField = document.getElementById('passwordField');
    const passwordIcon = document.getElementById('passwordIcon');

    // Tambahkan event listener pada tombol untuk toggle password
    togglePassword.addEventListener('click', function () {
        // Toggle tipe input antara 'password' dan 'text'
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);

        // Ubah ikon mata berdasarkan tipe input
        if (type === 'password') {
            passwordIcon.classList.remove('fa-eye-slash');
            passwordIcon.classList.add('fa-eye');
        } else {
            passwordIcon.classList.remove('fa-eye');
            passwordIcon.classList.add('fa-eye-slash');
        }
    });
</script>

<?php
include_once("inc_footer.php");
?> 
