<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Người Dùng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/view.css') }}">
</head>
<body>
    <header>
        <nav>
            <a href="index.html">Home</a> | 
            <a href="{{ route('signout') }}">Đăng xuất</a> |
            <a href="{{ route('user.list') }}">List</a>
        </nav>
    </header>
    
    <div class="container">
        <h2 class="text-center">Màn hình chi tiết</h2>
        <table class="table table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $messi->id }}</td>
                    <td>{{ $messi->name }}</td>
                    <td>{{ $messi->email }}</td>
                </tr>
            </tbody>
        </table>
        <div class="text-center">
            <!-- Thay đổi nút chỉnh sửa để link tới route cập nhật của người dùng -->
            <a href="{{ route('user.updateUser', ['id' => $messi->id]) }}" class="btn btn-primary">Chỉnh sửa</a>
        </div>
    </div>
    
    <footer class="text-center mt-4 p-3" style="background-color: #333; color: white;">
        <p>Lập trình web @2025</p>
    </footer>
    
    <script src="{{ asset('assets/js/view.js') }}"></script>
</body>
</html>
    