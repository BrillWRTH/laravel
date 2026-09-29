<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pembayaran - ApotekSehat</title>

    <link rel="stylesheet" href="{{ asset('css/pembayaran.css') }}">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

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


<main class="container">

    <section class="payment-content">

        <a href="/keranjang" class="back">
            <i class="fa-solid fa-arrow-left"></i>
            Kembali ke Keranjang
        </a>


        <!-- ================= ALAMAT ================= -->

        <section class="address-section">

            <h3>
                <i class="fa-solid fa-location-dot"></i>
                <span id="judul-alamat">Tambah Alamat</span>
            </h3>


            <!-- FORM ALAMAT -->

            <div id="form-alamat">

                <label>
                    Label Alamat <span>*</span>
                </label>

                <input
                    type="text"
                    id="label-alamat"
                    placeholder="Contoh: Rumah, Kantor, Kos, Apartemen"
                >


                <div class="form-row">

                    <div>

                        <label>
                            Nama Lengkap Penerima <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="nama-penerima"
                            placeholder="Nama penerima paket"
                        >

                    </div>


                    <div>

                        <label>
                            Nomor Telepon <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="nomor-telepon"
                            placeholder="08xxxxxxxxxx"
                        >

                    </div>

                </div>


                <label>
                    Alamat Lengkap & Catatan Kurir <span>*</span>
                </label>

                <textarea
                    id="alamat-lengkap"
                    placeholder="Nama jalan, nomor rumah, RT/RW, patokan lokasi..."
                ></textarea>


                <div class="form-row">

                    <div>

                        <label>
                            Kota / Kabupaten <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="kota"
                            placeholder="Surabaya"
                        >

                    </div>


                    <div>

                        <label>
                            Kode Pos <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="kode-pos"
                            placeholder="12110"
                        >

                    </div>

                </div>


                <label class="checkbox">

                    <input
                        type="checkbox"
                        id="alamat-utama"
                    >

                    Simpan sebagai alamat utama

                </label>


                <button
                    type="button"
                    class="save-address"
                    id="simpan-alamat"
                >

                    <i class="fa-regular fa-floppy-disk"></i>

                    Simpan Alamat

                </button>

            </div>


            <!-- ALAMAT TERSIMPAN -->

            <div id="alamat-tersimpan" class="alamat-tersimpan">

                <div class="alamat-header">

                    <div>

                        <strong id="alamat-label">
                            Rumah
                        </strong>

                        <span class="badge-utama" id="badge-utama">
                            Utama
                        </span>

                    </div>


                    <button
                        type="button"
                        id="ubah-alamat"
                        class="ubah-alamat"
                    >
                        Ubah
                    </button>

                </div>


                <div class="alamat-detail">

                    <strong id="alamat-nama">
                        -
                    </strong>

                    <span id="alamat-telepon">
                        -
                    </span>

                    <p id="alamat-lengkap-tampil">
                        -
                    </p>

                    <p id="alamat-kota">
                        -
                    </p>

                </div>


                <div class="jarak-apotek">

                 <i class="fa-solid fa-location-dot"></i>
                     <span id="jarak-apotek">
                        Menghitung jarak dari apotek...
                     </span>

                </div>

            </div>

        </section>



        <!-- ================= METODE PEMBAYARAN ================= -->

        <section class="payment-method">

            <h3>

                <i class="fa-regular fa-credit-card"></i>

                Pilih Metode Pembayaran

            </h3>


            <!-- QRIS -->

            <div
                class="payment-option active"
                data-payment="qris"
            >

                <label>

                    <input
                        type="radio"
                        name="payment"
                        value="qris"
                        checked
                    >

                    <div class="payment-info">

                        <strong>QRIS</strong>

                        <small>
                            GoPay, OVO, ShopeePay, BCA, Dana, LinkAja
                        </small>

                    </div>

                    <i class="fa-solid fa-qrcode payment-icon"></i>

                </label>


                <div class="payment-detail qris-detail">

                    <div class="qr-placeholder">
                        <i class="fa-solid fa-qrcode"></i>
                    </div>

                    <div class="payment-detail-text">

                        <strong>
                            Pindai kode QR untuk membayar
                        </strong>

                        <p>
                            Buka aplikasi mobile banking atau
                            e-wallet pilihan Anda, lalu arahkan
                            kamera ke kode QR di samping.
                        </p>

                        <span>
                            <i class="fa-regular fa-clock"></i>
                            Berlaku 15:00 menit
                        </span>

                    </div>

                </div>

            </div>


            <!-- VIRTUAL ACCOUNT -->

            <div
                class="payment-option"
                data-payment="va"
            >

                <label>

                    <input
                        type="radio"
                        name="payment"
                        value="va"
                    >

                    <div class="payment-info">

                        <strong>
                            Transfer Virtual Account
                        </strong>

                        <small>
                            BCA, Mandiri, BRI, BNI, Permata
                        </small>

                    </div>

                    <i class="fa-solid fa-building-columns payment-icon"></i>

                </label>


                <div class="payment-detail va-detail">

                    <div class="va-box">

                        <span>Nomor Virtual Account</span>

                        <strong>
                            8808 1234 5678 9012
                        </strong>

                    </div>

                    <p>
                        Transfer sesuai jumlah tagihan melalui
                        bank yang Anda pilih.
                    </p>

                </div>

            </div>


            <!-- COD -->

            <div
                class="payment-option"
                data-payment="cod"
            >

                <label>

                    <input
                        type="radio"
                        name="payment"
                        value="cod"
                    >

                    <div class="payment-info">

                        <strong>
                            Bayar di Tempat (COD)
                        </strong>

                        <small>
                            Bayar langsung saat pesanan diterima
                        </small>

                    </div>

                    <i class="fa-solid fa-money-bill-wave payment-icon"></i>

                </label>


                <div class="payment-detail cod-detail">

                    <p>
                        Siapkan uang sesuai total tagihan.
                        Pembayaran dilakukan kepada kurir
                        saat pesanan sampai.
                    </p>

                </div>

            </div>

        </section>

    </section>



    <!-- ================= RINGKASAN ================= -->

    <aside class="summary">

        <h3>
            Ringkasan Pembayaran
        </h3>


        <div id="payment-products"></div>


        <div class="summary-row">

            <span>
                Subtotal
            </span>

            <span id="subtotal">
                Rp 0
            </span>

        </div>


        <div class="summary-row">

            <span>
                Ongkos Kirim
            </span>

            <span id="ongkir">
                Rp 0
            </span>

        </div>


        <div class="summary-row">

            <span>
                Biaya Layanan Resep
            </span>

            <span id="biaya-resep">
                Gratis
            </span>

        </div>


        <hr>


        <div class="total">

            <span>
                Total Tagihan
            </span>

            <strong id="total">
                Rp 0
            </strong>

        </div>


        <button
            type="button"
            class="pay-button"
            id="bayar-sekarang"
        >
            Bayar Sekarang
        </button>

    </aside>

</main>



<!-- ================= MODAL BERHASIL ================= -->

<div
    class="modal-overlay"
    id="modal-sukses"
>

    <div class="modal">

        <div class="success-icon">

            <i class="fa-solid fa-check"></i>

        </div>


        <h2>
            Barang Berhasil dipesan!
        </h2>


        <p>
            Pesanan Anda telah diterima dan sedang
            disiapkan oleh Apotek.
        </p>


        <div class="modal-buttons">

            <button
                type="button"
                id="tutup-modal"
            >
                Tutup
            </button>

            <button type="button" id="lihat-pesanan" data-url="{{ route('cek-pesanan') }}">Lihat Pesanan</button>

        </div>

    </div>

</div>



<script src="{{ asset('js/pembayaran.js') }}"></script>

</body>
</html>