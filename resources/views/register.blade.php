<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register Page</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 bg-light">
            <!-- Sidebar -->
            <div class="d-flex flex-column p-3">
                <h2>StockTracker</h2>
                <a href="#" class="btn btn-light btn-block">Lihat Stok</a>
                <a href="#" class="btn btn-light btn-block">Lihat Transaksi</a>
                <a href="#" class="btn btn-light btn-block">Input Transaksi</a>
                <a href="#" class="btn btn-primary btn-block">Registrasi Akun</a>
                <a href="#" class="btn btn-light btn-block">Log Out</a>
            </div>
        </div>
        <div class="col-md-9">
            <!-- Register Form -->
            <div class="register-container">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="employeeName" class="form-label">Nama Karyawan</label>
                        <input type="text" class="form-control" id="employeeName" name='nama' required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name='username' required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name='password' required>
                    </div>
                    <button type="submit" class="btn btn-dark">Daftarkan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
