<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stock Tracker</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, html {
      height: 100%;
    }
    .sidebar {
      background-color: #f8f9fa;
      padding: 20px;
      height: 100%; /* Full height */
    }
    .main-content {
      padding: 20px;
      background-color: #efefef;
      height: 100vh;
    }
    .logout-btn {
      position: absolute;
      bottom: 20px;
      left: 20px;
    }
  </style>
</head>
<body>
  <div class="container-fluid h-100">
    <div class="row h-100">
      <!-- Sidebar -->
      <div class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
        <h4>StockTracker</h4>
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">Lihat Stok</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Lihat Transaksi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Input Transaksi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Registrasi Akun</a>
          </li>
        </ul>
        <button class="btn btn-danger logout-btn">Log Out</button>
      </div>

      <!-- Main Content -->
      <div class="col-md-9 ml-sm-auto col-lg-10 px-md-4 main-content">
        <div class="row">
          <div class="col-12">
            <!-- Table -->
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama Barang</th>
                  <th>Stok</th>
                </tr>
              </thead>
              <tbody>
                <!-- Populate table rows here -->
              </tbody>
            </table>
          </div>
          <div class="col-12">
            <!-- Form -->
            <form>
              <h5>Produk</h5>
              <div class="form-group">
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id">
              </div>
              <div class="form-group">
                <label for="namaBarang">Nama Barang</label>
                <input type="text" class="form-control" id="namaBarang">
              </div>
              <div class="form-group">
                <label for="jumlahStok">Jumlah Stok</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary" type="button">-</button>
                  </div>
                  <input type="text" class="form-control text-center" id="jumlahStok" value="01">
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">+</button>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Confirm</button>
              <button type="button" class="btn btn-secondary">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
