<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>
<body>
    <div class="container">
       
        <header>
            <nav>
                <a href="login.html">Home</a> | <a href="login.html">Đăng nhập</a> | <a href="resgister.html">Đăng ký</a>
            </nav>
        </header>
        
        <div class="login-container">
            <h2>Màn hình đăng nhập</h2>
            <form onsubmit="return validateForm()">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="remember">
                    <input type="checkbox" id="remember"> <label for="remember">Ghi nhớ đăng nhập</label>
                </div>
                <div class="extra-links">
                    <a href="#">Quên mật khẩu</a>
                </div>
                <div class="buttons">
                    <button type="submit" class="btn-login">Đăng nhập</button>
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
