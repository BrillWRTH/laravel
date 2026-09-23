<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun - Apotek Sehat</title>

    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>

    <div class="register-container">

        <div class="register-card">

            <!-- Icon -->
            <div class="icon-circle">
                <svg width="23" height="23" viewBox="0 0 24 24" fill="none">
                    <path d="M5 7H19L18 20H6L5 7Z"
                          stroke="currentColor"
                          stroke-width="1.8"
                          stroke-linejoin="round"/>
                    <path d="M9 7C9 4.8 10.3 3 12 3C13.7 3 15 4.8 15 7"
                          stroke="currentColor"
                          stroke-width="1.8"
                          stroke-linecap="round"/>
                    <path d="M12 9V15M9 12H15"
                          stroke="currentColor"
                          stroke-width="1.8"
                          stroke-linecap="round"/>
                </svg>
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
                        placeholder="Nama sesuai KTP"
                    >
                </div>

                <!-- WhatsApp -->
                <div class="form-group">
                    <label for="whatsapp">Nomor WhatsApp</label>
                    <input
                        type="tel"
                        id="whatsapp"
                        name="whatsapp"
                        placeholder="081234567890"
                    >
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
                        placeholder="nama@email.com"
                    >
                </div>

                <!-- Password -->
                <div class="form-group password-group">
                    <label for="password">Kata Sandi</label>

                    <div class="password-input">
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Minimal 8 karakter"
                        >

                        <span class="eye-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <path d="M2 12C2 12 5.5 5.5 12 5.5C18.5 5.5 22 12 22 12C22 12 18.5 18.5 12 18.5C5.5 18.5 2 12 2 12Z"
                                      stroke="currentColor"
                                      stroke-width="1.7"/>
                                <circle cx="12" cy="12" r="3"
                                        stroke="currentColor"
                                        stroke-width="1.7"/>
                            </svg>
                        </span>
                    </div>
                </div>

                <!-- Checkbox -->
                <div class="agreement">
                    <input type="checkbox" id="agreement">

                    <label for="agreement">
                        Saya menyetujui
                        <a href="#">Syarat & Ketentuan</a>
                        serta
                        <a href="#">Kebijakan<br class="mobile-break"> Privasi</a>
                        Apotek Sehat.
                    </label>
                </div>

                <!-- Button -->
                <button type="submit" class="register-btn">
                    Daftar Sekarang
                </button>

            </form>

            <!-- Login -->
            <p class="login-text">
                Sudah punya akun?
                <a href="#">Masuk di sini</a>
            </p>

        </div>

    </div>

</body>
</html>