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
            <a href="{{ route('user.list') }}">List</a>
        </nav>
    </header>

    <div class="container">
        <div class="update-form">
            <h2>Cập Nhật Thông Tin</h2>
            <form action="{{ route('user.postUpdateUser') }}" method="POST">
                @csrf
                <input name="id" type="hidden" value="{{$user->id}}">

                <div class="form-group mb-3">
                    <label for="name">Tên</label>
                    <input type="text" id="name" class="form-control" name="name" value="{{ $user->name }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" id="email_address" class="form-control" name="email" value="{{ $user->email }}" required>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <label for="password">Mật khẩu</label>
                    <input type="password" id="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <label for="phone">Số điện thoại</label>
                    <input type="text" id="phone" class="form-control" name="phone" value="{{ $user->phone }}" required>
                    @if ($errors->has('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <label for="address">Địa chỉ</label>
                    <input type="text" id="address" class="form-control" name="address" value="{{ $user->address }}" required>
                    @if ($errors->has('address'))
                        <span class="text-danger">{{ $errors->first('address') }}</span>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-dark btn-block">Cập Nhật</button>
                </div>
            </form>
        </div>
    </div>

    <footer>
        <p>Lập trình web @2025</p>
    </footer>

    <script src="{{ asset('assets/js/update.js') }}"></script>
</body>
</html>
