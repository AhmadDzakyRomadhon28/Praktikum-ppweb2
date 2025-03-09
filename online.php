<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Belanja Online</h2>

        <form method="POST" action="">
            <div class="form-group">
                <label for="customer">Customer</label>
                <input type="text" id="customer" name="customer" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Pilih Produk</label><br>
                <input type="radio" id="tv" name="product" value="TV" required>
                <label for="tv">TV (Rp 4.200.000,-)</label><br>
                
                <input type="radio" id="kulkas" name="product" value="KULKAS">
                <label for="kulkas">Kulkas (Rp 3.100.000,-)</label><br>
                
                <input type="radio" id="mesin_cuci" name="product" value="MESIN CUCi">
                <label for="mesin_cuci">Mesin Cuci (Rp 3.800.000,-)</label>
            </div>

            <div class="form-group">
                <label for="quantity">Jumlah Beli</label>
                <input type="number" id="quantity" name="quantity" class="form-control" min="1" required>
            </div>

            <button type="submit" class="btn btn-success">Kirim</button>
        </form>

        <div class="mt-4">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $customer = $_POST['customer'];
                $product = $_POST['product'];
                $quantity = $_POST['quantity'];

                // Daftar Harga
                $prices = [
                    'TV' => 4200000,
                    'KULKAS' => 3100000,
                    'MESIN CUCi' => 3800000,
                ];

                // Menghitung total
                $total = $prices[$product] * $quantity;

                // Menampilkan hasil
                echo "<h4>Hasil Pembelian</h4>";
                echo "<p>Nama Customer: $customer</p>";
                echo "<p>Produk Pilihan: $product</p>";
                echo "<p>Jumlah Beli: $quantity</p>";
                echo "<p>Total Belanja: Rp " . number_format($total, 0, ',', '.') . ",-</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>