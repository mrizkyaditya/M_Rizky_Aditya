<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1 class="display-4">Data Produk</h1>
            <a href="add_product.php" class="btn btn-success">Tambah Produk</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Gambar Produk</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require './config/db.php';

                        $products = mysqli_query($db_connect,"SELECT * FROM products");
                        $no = 1;

                        while($row = mysqli_fetch_assoc($products)) {
                    ?>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$row['name'];?></td>
                        <td>Rp <?=number_format($row['price'], 0, ',', '.');?></td>
                        <td>
                            <a href="<?=$row['image'];?>" target="_blank" class="btn btn-info btn-sm">Unduh</a>
                        </td>
                        <td>
                            <a href="edit.php?id=<?=$row['id'];?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete.php?id=<?=$row['id'];?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus produk ini?');">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
