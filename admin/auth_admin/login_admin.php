<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary" style="background-image: url('../assets/img/bg_login.jpeg'); background-size:50% 100%;">
</body>
<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-xl-6 col-lg-8 col-md-10">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Masokkkkk</h1>
                    </div>
                    <form action="process_login.php" method="POST">
                        <div class="form-group">
                            <input name="text" type="text" class="form-control form-control-user"
                                placeholder="Masukkan Username" required>
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" class="form-control form-control-user"
                                placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input name="remember" type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label" for="customCheck">Ingatkan saya</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-secondary btn-block" a href="./auth_admin/home_admin.php">Masokk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</body>

</html>