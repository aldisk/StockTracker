<nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">StockTracker</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="/">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="/stok">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Lihat Stok</span>
                </a></li>
                <li><a href="/transaksi">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Lihat Transaksi</span>
                </a></li>
                @if(session('type') == 0)
                <li><a href="/input-transaksi">
                    <i class="uil uil-clipboard-notes"></i>
                    <span class="link-name">Input Transaksi</span>
                </a></li>
                <li><a href="/input-barang">
                    <i class="uil uil-box"></i>
                    <span class="link-name">Daftar Barang</span>
                </a></li>
                @endif
                @if(session('type') == 1)
                <li><a href="/register">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">Registrasi Akun</span>
                </a></li>
                @endif
            </ul>
            
            <ul class="logout-mode">
                <li><a href="/logout">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>