<!DOCTYPE html>
<html lang="id">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Log In</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>

    <div class="login-container">

        <div class="login-card">

            <!-- Logo -->
            <div class="logo">
                ✚
            </div>

            <!-- Judul -->
            <h1>Masuk ke Akun Anda</h1>

            <p class="subtitle">
                Kelola resep dan pesanan obat Anda dengan mudah
            </p>

            <!-- Form Login -->
            <form>

                <!-- Email / WhatsApp -->
                <div class="form-group">
                    <label for="email">
                        Email atau Nomor WhatsApp
                    </label>

                    <input
                        type="text"
                        id="email"
                        name="email"
                        placeholder="contoh@email.com atau 081234567890"
                    >
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
                        >

                        <button
                            type="button"
                            class="show-password"
                            onclick="togglePassword()"
                        >
                            👁
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
                    <span>→</span>
                </button>

            </form>


            <!-- Divider -->
            <div class="divider">
                <span></span>
                <p>atau masuk dengan</p>
                <span></span>
            </div>


            <!-- Google -->
            <button type="button" class="google-button">

                <span class="google-icon">G</span>

                <span>Masuk dengan Google</span>

            </button>


            <!-- Register -->
            <p class="register-text">
                Belum punya akun?
                <a href="#">Daftar Sekarang</a>
            </p>

        </div>

    </div>


    <!-- Password Toggle -->
    <script>
        function togglePassword() {

            const password = document.getElementById('password');

            if (password.type === 'password') {
                password.type = 'text';
            } else {
                password.type = 'password';
            }

        }
    </script>

</body>
</html>