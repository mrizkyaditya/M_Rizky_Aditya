<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1 class="display-4">Tambah Produk</h1>
            <a href="show.php" class="btn btn-primary mt-2">Lihat Data Produk</a>
        </div>
        <div class="card shadow-sm">
            <div class="card-body">
                <form action="./backend/create.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Produk</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Input nama produk" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga Produk</label>
                        <input type="number" name="price" id="price" class="form-control" placeholder="Input harga produk" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar Produk</label>
                        <input type="file" name="image" id="image" class="form-control" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
