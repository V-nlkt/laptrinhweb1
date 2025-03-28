<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="{{ asset('assets/css/resgister.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <nav>
                <a href="#">Home</a> | <a href="login.html">Đăng nhập</a> | <a href="#">Đăng ký</a>
            </nav>
        </header>
        
        <div class="login-container">
            <h2>Màn hình đăng ký</h2>
            <form onsubmit="return validateRegisterForm()">
                <div class="input-group">
                    <label for="reg-username">Username</label>
                    <input type="text" id="reg-username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="reg-password">Mật khẩu</label>
                    <input type="password" id="reg-password" name="password" required>
                </div>
                <div class="input-group">
                    <label for="confirm-password">Nhập lại mật khẩu</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="extra-links">
                    <a href="login.html">Đã có tài khoản</a>
                </div>
                <div class="buttons">
                    <button type="submit" class="btn-login">Đăng ký</button>
                </div>
            </form>
        </div>
        
        <footer>
            <p>Lập trình web @012025</p>
        </footer>
    </div>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
