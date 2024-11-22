</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f2f5;
        }

        form {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        form input {
            width: 100%;
            padding: 10px;
            margin-top: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        form input:focus {
            border-color: #007bff;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: #ffffff;
            font-size: 16px;
            border-radius: 5px;
            margin-top: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="./backend/login.php" method="POST">
        <input type="email" name="email" id="email" placeholder="Email"/>
        <input type="password" name="password" id="password" placeholder="Password"/>
        <button type="submit">Login</button>
    </form>

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
            } else if (status == "invalid_email") {
                Swal.fire({
                    title: 'Email Tidak Valid',
                    text: 'Email harus mengandung huruf dan setidaknya satu angka.',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                });
            } else if (status == "invalid_password") {
                Swal.fire({
                    title: 'Password Tidak Valid',
                    text: 'Password harus terdiri dari minimal 6 digit angka.',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                });
            }
        </script>
    <?php endif; ?>
</body>
</html>

