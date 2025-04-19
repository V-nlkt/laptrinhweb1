<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Vai Trò</title>
    <link rel="stylesheet" href="{{ asset('assets/css/view.css') }}">
</head>
<body>
    <header>
        <nav>
            <a href="{{ url('/') }}">Home</a> |
            <a href="{{ route('signout') }}">Đăng xuất</a>
        </nav>
    </header>

    <div class="container">
        <h2>Chi tiết vai trò</h2>
        <div class="user-details">
            <p><strong>ID vai trò:</strong> {{ $role->id }}</p>
            <p><strong>Tên vai trò:</strong> {{ $role->name }}</p>
        </div>
    </div>

    <div class="container">
        <h3>Danh sách người dùng có vai trò này</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($role->users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <footer>
        <p>Lập trình web @2025</p>
    </footer>
</body>
</html>
