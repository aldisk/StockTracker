<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
    <title>StockTracker</title>
</head>
<body>
    @include('navbar')

    <section class="dashboard">
    <div class="dash-content">
        <div class="title">
                    <span class="text">Input Transaksi</span>
                </div>
            </div>

        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

        </div>

            <div class="activity">
              <div class="activity-data">
                      <div class="data names">
                          <span class="data-title">Nama Barang</span>
                          @foreach($transaksis as $transaksi)
                              <span class="data-list">{{ $transaksi->barang_nama }}</span>
                          @endforeach
                      </div>
                      <div class="data email">
                          <span class="data-title">Jumlah Barang</span>
                          @foreach($transaksis as $transaksi)
                              <span class="data-list">{{ $transaksi->jumlah }}</span>
                          @endforeach
                      </div>
                      <div class="data email">
                          <span class="data-title">ID</span>
                          @foreach($transaksis as $transaksi)
                              <span class="data-list">{{ $transaksi->id }}</span>
                          @endforeach
                      </div>
                      <div class="data email">
                          <span class="data-title">Tipe</span>
                          @foreach($transaksis as $transaksi)
                              <span class="data-list">{{ $transaksi->type }}</span>
                          @endforeach
                      </div>
                      <div class="data type">
                          <span class="data-title">Rollback</span>
                          @foreach($transaksis as $transaksi)
                              <a class="data-list" href="/input-transaksi/rollback/{!! $transaksi->id !!}">X</a>
                          @endforeach
                      </div>
                  </div>
            </div>
        </div>
    </section>

    <script src="js/script.js"></script>

</body>
</html>