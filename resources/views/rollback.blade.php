<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stock Tracker</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .sidebar {
      min-height: 100vh;
      background-color: #f8f9fa;
      padding: 20px;
    }
    .main-content {
      padding: 20px;
      background-color: #efefef;
    }
    .btn-logout {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 200px;
    }
    .sidebar-fit-content {
      width: auto;
      display: inline-flex;
      flex-direction: column;
      align-items: center;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Adjusted Sidebar -->
      <div class="col-auto sidebar sidebar-fit-content">
        <h2>StockTracker</h2>
        <button class="btn btn-light w-100 mb-2">Lihat Stok</button>
        <button class="btn btn-light w-100 mb-2">Lihat Transaksi</button>
        <button class="btn btn-light w-100 mb-2">Input Transaksi</button>
        <button class="btn btn-light w-100 mb-2">Registrasi Akun</button>
      </div>

      <!-- Main Content -->
      <div class="col main-content">
        <!-- Table -->
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>Tipe</th>
              <th>Barang</th>
              <th>Jumlah</th>
              <th>User</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <!-- Table rows should be inserted here based on your data -->
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Log Out Button -->
  <button class="btn btn-danger btn-logout">Log Out</button>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
