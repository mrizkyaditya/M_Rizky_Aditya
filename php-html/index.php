<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-4" style="max-width: 400px; width: 100%;">
            <h3 class="text-center mb-4">Login</h3>
            <form action="./backend/login.php" method="POST">
                <div class="mb-3">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>
    </div>

    <?php if (isset($_GET['status'])): ?>
        <script>
            var status = "<?php echo $_GET['status']; ?>";
            if (status == "success") {
                Swal.fire({
                    title: 'Login Berhasil',
                    text: 'Anda telah berhasil masuk!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            } else if (status == "error") {
                Swal.fire({
                    title: 'Login Gagal',
                    text: 'Email atau password yang Anda masukkan salah.',
                    icon: 'error',
                    confirmButtonText: 'Coba Lagi'
                });
            }
        </script>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
