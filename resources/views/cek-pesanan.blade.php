<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cek Pesanan - ApotekSehat</title>

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/cek-pesanan.css') }}">
</head>

<body>

    <!-- ================= NAVBAR ================= -->

    <header class="navbar">

        <div class="logo">

            <div class="logo-icon">
                <i class="fa-solid fa-plus"></i>
            </div>

            <div>
                <b>ApotekSehat</b>
                <small>PHARMACY & HEALTHCARE</small>
            </div>

        </div>


        <nav>

            <a href="{{ route('beranda') }}">
                Beranda
            </a>

            <a href="#">
                Tebus Resep
            </a>

            <a href="#">
                Katalog Obat
            </a>

            <a href="{{ route('keranjang') }}">
                Keranjang
            </a>

            <a href="{{ route('cek-pesanan') }}" class="active">
                Cek Pesanan
            </a>

        </nav>


        <div class="nav-icons">

            <i class="fa-regular fa-bell"></i>

            <a href="{{ route('keranjang') }}">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>

            <i class="fa-regular fa-circle-user"></i>

        </div>

    </header>



    <!-- ================= CONTAINER ================= -->

    <main class="container">

        <!-- SEARCH BAR -->

        <div class="search-box">

            <i class="fa-solid fa-magnifying-glass"></i>

            <input
                type="text"
                id="search-input"
                placeholder="Cari berdasarkan No. Pesanan atau Nama Obat..."
            >

        </div>


        <!-- LIST PESANAN -->

        <div
            id="order-list-container"
            class="order-list"
        >

            <!-- Tampilan jika belum ada pesanan -->

            <div class="empty-state">

                <i class="fa-solid fa-receipt"></i>

                <h3>
                    Belum Ada Pesanan
                </h3>

                <p>
                    Pesanan yang telah Anda bayar akan muncul di halaman ini.
                </p>

            </div>

        </div>

    </main>



    <!-- ================= FOOTER ================= -->

    <footer class="footer">

        <div class="footer-contact">

            <span>
                <i class="fa-solid fa-phone"></i>
                (021) 555-0192
            </span>

            <span>
                <i class="fa-brands fa-whatsapp"></i>
                WhatsApp: 0812-3456-7890
            </span>

        </div>


        <p class="copyright">
            © 2026 Apotek Sehat.
            Layanan farmasi resmi dan berizin.
        </p>

    </footer>



    <!-- ================= JAVASCRIPT ================= -->

    <script src="{{ asset('js/cek-pesanan.js') }}"></script>

</body>

</html>