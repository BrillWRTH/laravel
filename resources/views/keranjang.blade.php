<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Keranjang</title>

    <link rel="stylesheet" href="{{ asset('css/keranjang.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

    <!-- Navbar -->
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
            <a href="{{ route('beranda') }}">Beranda</a>
            <a href="#">Tebus Resep</a>
            <a href="#">Katalog Obat</a>
            <a href="{{ route('cek-pesanan') }}">Cek Pesanan</a>
        </nav>

        <div class="nav-icons">
            <i class="fa-regular fa-bell"></i>

            <a href="{{ route('keranjang') }}">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>

            <i class="fa-regular fa-circle-user"></i>
        </div>

    </header>


    <!-- Isi Keranjang -->
    <main class="container">

        <section class="cart-section">

            <div class="cart-title">
                <h1>Keranjang Belanja</h1>
                <span id="jumlah-produk">0 Produk Dipilih</span>
            </div>

            <!-- Produk dari JavaScript akan muncul di sini -->

            <a href="/beranda" class="add-product">
                ← &nbsp;Tambah Obat Lain
            </a>

        </section>


        <!-- Ringkasan Belanja -->
        <aside class="summary">

            <h3>Ringkasan Belanja</h3>

            <div class="summary-row">
                <span>Subtotal</span>
                <span id="subtotal">Rp 0</span>
            </div>

            <div class="summary-row">
                <span>Ongkos Kirim</span>
                <span id="ongkir">Rp 0</span>
            </div>

            <hr>

            <div class="total">
                <span>Total Pembayaran</span>

                <strong id="total">
                    Rp 0
                </strong>
            </div>

            <a href="{{ route('pembayaran') }}" class="checkout">
                Lanjut ke Pembayaran
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </aside>

    </main>


    <script src="{{ asset('js/keranjang.js') }}"></script>

</body>
</html>