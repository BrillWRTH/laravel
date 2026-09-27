<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun - Apotek Sehat</title>

    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

    <div class="register-container">

        <div class="register-card">

            <!-- Icon -->
            <div class="icon-circle">
                <i class="fa-solid fa-bag-shopping"></i>
            </div>

            <h1>Buat Akun</h1>

            <p class="subtitle">
                Daftar untuk tebus resep dan beli obat lebih cepat
            </p>

            <form>

                <!-- Nama -->
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>

                    <input
                        type="text"
                        id="nama"
                        name="nama"
                        placeholder="Nama sesuai KTP" required >
                </div>

                <!-- WhatsApp -->
                <div class="form-group">
                    <label for="whatsapp">Nomor WhatsApp</label>

                    <input
                        type="tel"
                        id="whatsapp"
                        name="whatsapp"
                        placeholder="081234567890" required >

                    <small>
                        Untuk konfirmasi resep apoteker & pelacakan kurir
                    </small>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email</label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="nama@email.com" required >
                </div>

                <!-- Password -->
                <div class="form-group password-group">
                    <label for="password">Kata Sandi</label>

                    <div class="password-input">
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Minimal 8 karakter" required >

                        <button
                            type="button"
                            class="eye-icon"
                            id="showPassword"
                            aria-label="Tampilkan password"
                        >
                            <i class="fa-solid fa-eye"></i>
                        </button>
                    </div>
                </div>

                <!-- Checkbox -->
                <div class="agreement">
                    <input type="checkbox" id="agreement">

                    <label for="agreement">
                        Saya menyetujui
                        <a href="#">Syarat & Ketentuan</a>
                        serta
                        <a href="#">
                            Kebijakan<br class="mobile-break"> Privasi
                        </a>
                        Apotek Sehat.
                    </label>
                </div>

                <!-- Button -->
                <button type="submit" class="register-btn">
                    Daftar Sekarang
                </button>

            <form action="{{ route('beranda.login') }}" method="GET"></form>

            <!-- Login -->
            <p class="login-text">
                Sudah punya akun?
                <a href="{{ route('login') }}">Masuk di sini</a>
            </p>

        </div>

    </div>

    <script src="{{ asset('js/register.js') }}"></script>

</body>
</html>