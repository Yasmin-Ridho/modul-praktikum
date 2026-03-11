<?php
session_start();

if (isset($_SESSION["user"])) {
    header("Location: index.php");
    exit;
}

$error = $_GET['error'] ?? '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Cibaduyut Shoes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --dark:    #0e0e12;
            --darker:  #08080b;
            --card:    #16161d;
            --border:  #2a2a35;
            --gold:    #f5c242;
            --gold-dim:#c9953a;
            --text:    #e8e8ee;
            --muted:   #7a7a8c;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            min-height: 100vh;
            background-color: var(--darker);
            background-image:
                radial-gradient(ellipse 80% 50% at 50% -10%, rgba(245,194,66,0.12) 0%, transparent 70%),
                repeating-linear-gradient(
                    0deg,
                    transparent,
                    transparent 60px,
                    rgba(255,255,255,0.015) 60px,
                    rgba(255,255,255,0.015) 61px
                ),
                repeating-linear-gradient(
                    90deg,
                    transparent,
                    transparent 60px,
                    rgba(255,255,255,0.015) 60px,
                    rgba(255,255,255,0.015) 61px
                );
            font-family: 'DM Sans', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }

        /* Brand header */
        .brand-header {
            text-align: center;
            margin-bottom: 2.5rem;
            animation: fadeDown 0.6s ease both;
        }
        .brand-icon {
            font-size: 2.4rem;
            display: block;
            margin-bottom: 0.5rem;
            filter: drop-shadow(0 0 12px rgba(245,194,66,0.5));
        }
        .brand-name {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 2.2rem;
            letter-spacing: 0.15em;
            color: var(--gold);
            line-height: 1;
        }
        .brand-sub {
            font-size: 0.75rem;
            color: var(--muted);
            letter-spacing: 0.25em;
            text-transform: uppercase;
            margin-top: 0.3rem;
        }

        /* Card */
        .login-card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 2.5rem 2.2rem;
            width: 100%;
            max-width: 400px;
            box-shadow:
                0 0 0 1px rgba(245,194,66,0.06),
                0 24px 60px rgba(0,0,0,0.6);
            animation: fadeUp 0.6s ease 0.1s both;
        }

        .login-card h2 {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.6rem;
            letter-spacing: 0.08em;
            color: var(--text);
            margin-bottom: 0.3rem;
        }
        .login-card .subtitle {
            font-size: 0.82rem;
            color: var(--muted);
            margin-bottom: 2rem;
        }

        /* Alert */
        .alert-login {
            background: rgba(220, 53, 69, 0.12);
            border: 1px solid rgba(220, 53, 69, 0.35);
            border-radius: 8px;
            color: #ff6b7a;
            font-size: 0.83rem;
            padding: 0.7rem 1rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        /* Form */
        .form-group { margin-bottom: 1.3rem; }

        label {
            display: block;
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 0.5rem;
        }

        .input-wrap {
            position: relative;
        }
        .input-wrap .input-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--muted);
            font-size: 1rem;
            pointer-events: none;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            background: var(--dark);
            border: 1px solid var(--border);
            border-radius: 8px;
            color: var(--text);
            font-family: 'DM Sans', sans-serif;
            font-size: 0.92rem;
            padding: 0.7rem 1rem 0.7rem 2.6rem;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: var(--gold-dim);
            box-shadow: 0 0 0 3px rgba(245,194,66,0.1);
        }
        input::placeholder { color: #3a3a4a; }

        /* Remember Me */
        .remember-row {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1.8rem;
        }
        .remember-row input[type="checkbox"] {
            width: 16px;
            height: 16px;
            accent-color: var(--gold);
            cursor: pointer;
            padding: 0;
        }
        .remember-row label {
            margin: 0;
            font-size: 0.8rem;
            text-transform: none;
            letter-spacing: 0;
            color: var(--muted);
            cursor: pointer;
        }

        /* Button */
        .btn-login {
            width: 100%;
            background: var(--gold);
            color: #0e0e12;
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.05rem;
            letter-spacing: 0.12em;
            border: none;
            border-radius: 8px;
            padding: 0.75rem;
            cursor: pointer;
            transition: background 0.2s, transform 0.1s, box-shadow 0.2s;
            box-shadow: 0 4px 18px rgba(245,194,66,0.25);
        }
        .btn-login:hover {
            background: #ffd55a;
            box-shadow: 0 6px 24px rgba(245,194,66,0.4);
        }
        .btn-login:active { transform: scale(0.98); }

        /* Back link */
        .back-link {
            text-align: center;
            margin-top: 1.5rem;
        }
        .back-link a {
            font-size: 0.82rem;
            color: var(--muted);
            text-decoration: none;
            transition: color 0.2s;
        }
        .back-link a:hover { color: var(--gold); }

        /* Demo hint */
        .demo-hint {
            margin-top: 1.8rem;
            background: rgba(245,194,66,0.06);
            border: 1px solid rgba(245,194,66,0.15);
            border-radius: 8px;
            padding: 0.8rem 1rem;
            font-size: 0.77rem;
            color: var(--muted);
            line-height: 1.7;
        }
        .demo-hint strong { color: var(--gold); }

        /* Divider */
        .divider {
            height: 1px;
            background: var(--border);
            margin: 1.5rem 0;
        }

        /* Animations */
        @keyframes fadeDown {
            from { opacity: 0; transform: translateY(-16px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(16px); }
            to   { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <div class="brand-header">
        <span class="brand-icon">👟</span>
        <div class="brand-name">Cibaduyut Shoes</div>
        <div class="brand-sub">Sistem Manajemen Produk</div>
    </div>

    <div class="login-card">
        <h2>Selamat Datang</h2>
        <p class="subtitle">Masuk untuk mengelola data sepatu</p>

        <?php if ($error === 'invalid'): ?>
            <div class="alert-login">⚠️ Username atau password salah. Silakan coba lagi.</div>
        <?php elseif ($error === 'empty'): ?>
            <div class="alert-login">⚠️ Username dan password tidak boleh kosong.</div>
        <?php endif; ?>

        <form method="POST" action="controller/proses_login.php">

            <div class="form-group">
                <label for="username">Username</label>
                <div class="input-wrap">
                    <span class="input-icon">👤</span>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Masukkan username"
                        value="<?php echo htmlspecialchars($_COOKIE['username'] ?? ''); ?>"
                        required
                        autocomplete="username"
                    >
                </div>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-wrap">
                    <span class="input-icon">🔒</span>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Masukkan password"
                        required
                        autocomplete="current-password"
                    >
                </div>
            </div>

            <div class="remember-row">
                <input type="checkbox" id="remember" name="remember"
                    <?php echo isset($_COOKIE['username']) ? 'checked' : ''; ?>>
                <label for="remember">Ingat saya selama 7 hari</label>
            </div>

            <button type="submit" class="btn-login">Masuk →</button>
        </form>

        <div class="back-link">
            <a href="index.php">← Kembali ke Beranda</a>
        </div>

        <div class="divider"></div>

        <div class="demo-hint">
            <strong>Demo akun:</strong><br>
            Username: <strong>admin</strong> / Password: <strong>admin123</strong><br>
            Username: <strong>manager</strong> / Password: <strong>manager123</strong>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>