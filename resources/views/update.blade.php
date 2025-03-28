<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập Nhật Thông Tin</title>
    <link rel="stylesheet" href="{{ asset('assets/css/update.css') }}">
</head>
<body>
    <header>
        <nav>
            <a href="index.html">Home</a> | 
            <a href="login.html">Đăng nhập</a> | 
            <a href="register.html">Đăng ký</a>
        </nav>
    </header>

    <div class="container">
        <form id="updateForm">
            <h2>Màn hình cập nhật</h2>

            <label for="username">Username</label>
            <input type="text" id="username" value="user123" disabled>

            <label for="password">Mật khẩu</label>
            <input type="password" id="password" placeholder="Nhập mật khẩu mới">

            <label for="confirmPassword">Nhập lại mật khẩu</label>
            <input type="password" id="confirmPassword" placeholder="Xác nhận mật khẩu mới">

            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Nhập email mới">

            <button type="submit">Cập nhật</button>
            <p><a href="login.html">Đã có tài khoản</a></p>
        </form>
    </div>

    <footer>
        <p>Lập trình web @2025</p>
    </footer>

    <script src="{{ asset('assets/js/update.js') }}"></script>
</body>
</html>
