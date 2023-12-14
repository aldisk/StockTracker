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

                <div class="menu-items">
                    <form action="{{ route('insertTransaksi') }}" method="post">
                        @csrf
                        <select name="tipe">
                            <option value="1">keluar</option>
                            <option value="0">masuk</option>
                        </select> <br> <br>
                        <div id="stuffContainer">
                            <!-- Dynamic form elements will be added here -->
                        </div>
                        <button type="button" id="addStuff"> + Tambah Stok </button>
                        <button type="button" id="removeStuff"> - Hapus Barang </button>
                        <br> <br>
                        <div id="newStuffContainer">
                            <!-- Dynamic form elements will be added here -->
                        </div>
                        <button type="button" id="addNewStuff"> + Tambah Stok Barang Baru </button>
                        <button type="button" id="removeNewStuff"> - Hapus Barang </button> <br> <br>
                        <button type="submit">Submit</button>
                    </form>
                </div>
                
            </div>
        </div>
    </section>

    <script src="js/script.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
    $(document).ready(function () {
        // Initial stuff element
        var stuffElement = '<div>' +
                              '<select name="stuff[]" required class="barang-select">' +
                                '<option value="" disabled selected>Select Barang</option>' +
                                '@foreach($data as $barang)' +
                                    '<option value="{{ $barang->id }}">{{ $barang->nama }}</option>' +
                                '@endforeach' +
                              '</select>' +
                              '<input type="number" name="amount[]" min="1" required placeholder="Jumlah">' +
                              '<br>' +
                           '</div>';

        // Add stuff
        $('#addStuff').click(function () {
            $('#stuffContainer').append(stuffElement);
        });

        // Remove stuff
        $('#removeStuff').click(function () {
            $('#stuffContainer div:last-child').remove();
        });
    });
</script>
<script>
    $(document).ready(function () {
        // Initial stuff element
        var newStuffElement = '<div>' +
                                  '<input type="text" name="newStuff[]" required placeholder="Nama Barang">' +
                                  '<input type="number" name="newStuffAmount[]" min="1" required placeholder="Jumlah">' +
                                  '<br>' +
                               '</div>';

        // Add stuff
        $('#addNewStuff').click(function () {
            $('#newStuffContainer').append(newStuffElement);
        });

        // Remove stuff
        $('#removeNewStuff').click(function () {
            $('#newStuffContainer div:last-child').remove();
        });
    });
</script>
</body>
</html>