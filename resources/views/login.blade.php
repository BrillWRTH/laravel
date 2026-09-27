<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <div class="login-container">
        <div class="login-card">

            <!-- Logo -->
            <div class="logo">
                <i class="fa-solid fa-plus"></i>
            </div>

            <!-- Judul -->
            <h1>Masuk ke Akun Anda</h1>
            <p class="subtitle">
                Kelola resep dan pesanan obat Anda dengan mudah
            </p>

            <!-- Form Login -->
            <form action="{{ route('beranda.login') }}" method="GET">

                <!-- Email / WhatsApp -->
                <div class="form-group">
                    <label for="email">
                        Email atau Nomor WhatsApp
                    </label>

                    <input
                        type="text"
                        id="email"
                        name="email"
                        placeholder="nama@email.com atau 081234567890" required >
                </div>

                <!-- Password -->
                <div class="form-group password-group">
                    <div class="password-label">
                        <label for="password">
                            Kata Sandi
                        </label>

                        <a href="#" class="forgot-password">
                            Lupa kata sandi?
                        </a>
                    </div>

                    <div class="password-input">
                       <input 
                          type="password" 
                            id="password" 
                            name="password" 
                            placeholder="Masukkan kata sandi Anda" 
                            minlength="8" 
                            required >

                        <button
                            type="button"
                            class="show-password"
                            id="showPassword"
                        >
                            <i class="fa-solid fa-eye"></i>
                        </button>
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="remember">
                    <label>
                        <input type="checkbox" name="remember">
                        <span>Ingat saya di perangkat ini</span>
                    </label>
                </div>

                <!-- Tombol Login -->
                <button type="submit" class="login-button">
                    Masuk
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </form>

            <!-- Register -->
            <p class="register-text">
                Belum punya akun?
                <a href="{{ route('register') }}">Daftar Sekarang</a>
            </p>

        </div>
    </div>

    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>