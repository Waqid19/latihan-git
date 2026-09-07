<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login Sistem</h2>
        <?php
        // Logika sederhana untuk memproses login
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';
            
            // Contoh validasi statis sederhana (contoh username: admin, password: admin123)
            if ($username === 'admin' && $password === 'admin123') {
                echo "<p class='success'>Login berhasil! Selamat datang, " . htmlspecialchars($username) . ".</p>";
            } else {
                echo "<p class='error'>Username atau password salah!</p>";
            }
        }
        ?>
        <form action="index.php" method="POST" id="loginForm">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password" required>
            </div>
            <button type="submit">Masuk</button>
        </form>
    </div>
    <script src="js/app.js"></script>
</body>
</html>
