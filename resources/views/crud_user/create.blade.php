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
                <a href="#">Home</a> | <a href="{{ route('login') }}">Đăng nhập</a> | <a href="#">Đăng ký</a>
            </nav>
        </header>
        
        <main class="login-container">
            <h2>Màn hình đăng ký</h2>
            <form action="{{ route('user.postUser') }}" method="POST" onsubmit="return validateRegisterForm()">
                @csrf
                <div class="input-group">
                    <label for ="name">Họ và Tên</label>
                    <input type="text" id="name" name="name" required autofocus>
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="input-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" id="password" name="password" required>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                
                <div class="input-group">
                    <label for="age">Age</label>
                    <input type="age" id="age" name="age" required>
                    @if ($errors->has('age'))
                        <span class="text-danger">{{ $errors->first('age') }}</span>
                    @endif
                </div>

                <div class="input-group">
                    <label for ="facebook">Facebook</label>
                    <input type="text" id="name" name="name" required autofocus>
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <div class="extra-links">
                    <a href="{{ route('login') }}">Đã có tài khoản</a>
                </div>
                <div class="buttons">
                    <button type="submit" class="btn-login">Đăng ký</button>
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
