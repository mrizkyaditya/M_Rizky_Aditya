<?php
require './config/db.php';

$id = $_GET['id'];
$product = mysqli_query($db_connect, "SELECT * FROM products WHERE id = $id");
$row = mysqli_fetch_assoc($product);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image']; 

    mysqli_query($db_connect, "UPDATE products SET name='$name', price='$price', image='$image' WHERE id=$id");

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1 class="display-4">Edit Produk</h1>
            <a href="index.php" class="btn btn-secondary mt-2">Kembali ke Data Produk</a>
        </div>
        <div class="card shadow-sm">
            <div class="card-body">
                <form method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Produk</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?= $row['name']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga</label>
                        <input type="text" name="price" id="price" class="form-control" value="<?= $row['price']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar URL</label>
                        <input type="text" name="image" id="image" class="form-control" value="<?= $row['image']; ?>">
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="update" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
