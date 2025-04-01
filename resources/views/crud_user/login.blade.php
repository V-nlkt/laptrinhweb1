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
                <a href="{{ route('login') }}">Home</a> | <a href="{{ route('login') }}">Đăng nhập</a> | <a href="{{ route('user.createUser') }}">Đăng ký</a>
            </nav>
        </header>
        
        <main class="login-container">
            <h2>Màn hình đăng nhập</h2>
            <form method="POST" action="{{ route('user.authUser') }}" onsubmit="return validateForm()">
                @csrf
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" class="form-control" name="email" required autofocus>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="input-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" id="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="remember">
                    <input type="checkbox" name="remember" id="remember"> <label for="remember">Ghi nhớ đăng nhập</label>
                </div>
                <div class="extra-links">
                    <a href="#">Quên mật khẩu</a>
                </div>
                <div class="buttons">
                    <button type="submit" class="btn-login">Đăng nhập</button>
                </div>
            </form>
        </main>
        
        <footer>
            <p>Lập trình web @2025</p>
        </footer>
    </div>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
