<?php
require './../config/db.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = mysqli_query($db_connect, "SELECT * FROM users WHERE email = '$email'");
    if (mysqli_num_rows($user) > 0) {
        $data = mysqli_fetch_assoc($user);
        if (password_verify($password, $data['password'])) {
            echo "Selamat datang " . $data['name'];
            die;
        } else {
            echo "Password salah";
            die;
        }
    } else {
        echo "Email atau password salah";
        die;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h1 class="text-center mb-4">Login</h1>
                <form action="./login.php" method="post" class="p-4 border rounded bg-light shadow">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password anda" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
