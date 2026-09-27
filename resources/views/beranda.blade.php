<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Beranda - Apotek Sehat</title>

    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
 

    <!-- ================= HEADER ================= -->

    <header class="header">
        <div class="header-inner">

            <!-- Logo -->
            <a href="{{ route('beranda') }}" class="logo">

               <div class="logo-icon">
                    <i class="fa-solid fa-plus"></i>
              </div>

                <div class="logo-text">
                    <strong>ApotekSehat</strong>
                    <span>PHARMACY & HEALTHCARE</span>
                </div>

            </a>


            <!-- Menu -->
            <nav class="nav-menu">

                <a href="{{ route('beranda') }}" class="active">
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

                <a href="{{ route('cek-pesanan') }}">
                    Cek Pesanan
                </a>

            </nav>


            <!-- Sebelum Login -->
            @if (!$isLoggedIn)

                <div class="auth-buttons">

                    <a href="{{ route('login') }}" class="login-btn">
                        Masuk
                    </a>

                    <a href="{{ route('register') }}" class="register-btn">
                        Daftar
                    </a>

                </div>

            @else

                <!-- Sesudah Login -->
            <div class="user-icons">

                 <a href="#" class="icon-btn" title="Notifikasi">
                    <i class="fa-solid fa-bell"></i>
                 </a>

                 <a href="{{ route('keranjang') }}" class="icon-btn" title="Keranjang">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>

                 <a href="#" class="profile-btn" title="Profil">
                   <i class="fa-solid fa-user"></i>
                 </a>

</div>

            @endif

        </div>
    </header>



    <!-- ================= HERO ================= -->

    <section class="hero">

        <h1>
            Apotek Sehat Online
        </h1>

        <p>
            Pesan obat resep dan suplemen kesehatan harian secara mudah,
            aman, dan langsung dikirim ke alamat Anda.
        </p>


        <div class="hero-buttons">

           <a href="#" class="primary-btn">
                <i class="fa-solid fa-cart-shopping"></i>
                 &nbsp; Beli Obat
                </a>

            <a href="#" class="secondary-btn">
                <i class="fa-solid fa-file-upload"></i>
                &nbsp; Upload Resep
            </a>

        </div>

    </section>



    <!-- ================= FITUR ================= -->

    <section class="features">

        <!-- Tebus Resep -->
        <div class="feature-card">

            <div class="feature-icon">
                <i class="fa-solid fa-file-prescription"></i>
            </div>

            <div>
                <h3>
                    Tebus Resep
                </h3>

                <p>
                    Verifikasi cepat & aman
                </p>
            </div>

        </div>


        <!-- Obat -->
        <div class="feature-card">

            <div class="feature-icon">
                 <i class="fa-solid fa-pills"></i>
            </div>

            <div>
                <h3>
                    Obat Bebas & Vitamin
                </h3>

                <p>
                    Suplemen & P3K lengkap
                </p>
            </div>

        </div>


        <!-- Lokasi -->
        <div class="feature-card">

            <div class="feature-icon">
                <i class="fa-solid fa-map-marker-alt"></i>
            </div>

            <div>
                <h3>
                    Lokasi Apotek
                </h3>

                <p>
                    Kota Surabaya
                </p>
            </div>

        </div>

    </section>



<!-- ================= PRODUK POPULER ================= -->

<section class="products-section">
    <div class="section-container">
        <h2>Produk Populer</h2>

        <div class="products-wrapper">
            <button class="arrow-btn">←</button>

            <div class="products">

                <div class="product-card">
                    <div class="product-image">

                        <img src="https://via.placeholder.com/200" alt="Panadol Extra 500mg">
                    </div>
                    <h3>Panadol Extra 500mg</h3>
                    <p>Pereda sakit kepala dengan cepat.</p>
                    <div class="product-bottom">
                        <strong>Rp14.500</strong>
                       <button class="btn-tambah" data-name="Panadol Extra 500mg" data-price="14500">
                            <i class="fa-solid fa-cart-plus"></i>Tambah
                        </button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="https://via.placeholder.com/200" alt="Blackmores Bio C 1000mg">
                    </div>
                    <h3>Blackmores Bio C 1000mg</h3>
                    <p>Vitamin C untuk menjaga daya tahan tubuh.</p>
                    <div class="product-bottom">
                        <strong>Rp132.000</strong>
                        <button class="btn-tambah" data-name="Blackmores Bio C 1000mg" data-price="132000">
                            <i class="fa-solid fa-cart-plus"></i>Tambah
                        </button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="https://via.placeholder.com/200" alt="Sanmol Sirup Anak 60ml">
                    </div>
                    <h3>Sanmol Sirup Anak 60ml</h3>
                    <p>Sirup penurun panas dan pereda nyeri anak.</p>
                    <div class="product-bottom">
                        <strong>Rp21.000</strong>
                        <button class="btn-tambah" data-name="Sanmol Sirup Anak 60ml" data-price="21000">
                            <i class="fa-solid fa-cart-plus"></i>Tambah
                        </button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="https://via.placeholder.com/200" alt="Mylanta Sirup Maag 150ml">
                    </div>
                    <h3>Mylanta Sirup Maag 150ml</h3>
                    <p>Meredakan gejala asam lambung dan sakit maag.</p>
                    <div class="product-bottom">
                        <strong>Rp48.000</strong>
                        <button class="btn-tambah" data-name="Mylanta Sirup Maag 150ml" data-price="48000">
                            <i class="fa-solid fa-cart-plus"></i>Tambah
                        </button>
                    </div>
                </div>

            </div>

            <button class="arrow-btn">→</button>
        </div>
    </div>
</section>

    <!-- ================= CARA PESAN ================= -->

    <section class="how-section">

        <h2>
            Cara Pesan Obat
        </h2>

        <p class="section-subtitle">
            Langkah mudah memesan obat dari rumah
        </p>


        <div class="steps">

            <!-- Langkah 1 -->
            <div class="step-card">

                <div class="step-number">
                    1
                </div>

                <h3>
                    Pilih Obat / Unggah Resep
                </h3>

                <p>
                    Cari obat yang Anda butuhkan atau unggah
                    foto resep dokter Anda.
                </p>

            </div>


            <!-- Langkah 2 -->
            <div class="step-card">

                <div class="step-number">
                    2
                </div>

                <h3>
                    Konfirmasi & Bayar
                </h3>

                <p>
                    Apoteker mengonfirmasi pesanan Anda,
                    lalu lakukan pembayaran instan.
                </p>

            </div>


            <!-- Langkah 3 -->
            <div class="step-card">

                <div class="step-number">
                    3
                </div>

                <h3>
                    Obat Dikirim Cepat
                </h3>

                <p>
                    Pesanan dikemas secara rapi, higienis,
                    dan diantar langsung ke rumah.
                </p>

            </div>

        </div>

    </section>



    <!-- ================= UPLOAD RESEP ================= -->

    <section class="prescription-section">

        <div class="prescription-card">

            <div class="prescription-icon">
                <i class="fa-solid fa-file-arrow-up"></i>
            </div>


            <div class="prescription-text">

                <strong>
                    Punya Resep dari Dokter?
                </strong>

                <p>
                    Unggah resep dan apoteker kami akan
                    segera memprosesnya.
                </p>

            </div>


            <a href="#" class="upload-btn">
                Unggah Resep
            </a>

        </div>

    </section>



    <!-- ================= FOOTER ================= -->

    <footer>

        <div class="footer-contact">
            <i class="fa-solid fa-phone"></i> (021) 555-0192
                &nbsp;&nbsp;&nbsp;
            <i class="fa-brands fa-whatsapp"></i> WhatsApp: 0812-3456-7890
        </div>

        <div class="copyright">

            © 2026 Apotek Sehat.
            Layanan farmasi resmi dan berizin.

        </div>

    </footer>

    <script src="{{ asset('js/beranda.js') }}"></script>

</body>
</html>