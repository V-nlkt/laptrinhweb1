<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Người Dùng</title>
    <link rel="stylesheet" href="{{ asset('assets/css/list.css') }}">
</head>
<body>
    <header>
        <nav>
            <a href="index.html">Home</a> | 
            <a href="{{ route('signout') }}">Đăng xuất</a>
        </nav>
    </header>

    <div class="container">
        <h2>Danh sách người dùng</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->address }}</td>
                        <td class="action">
                            <a href="{{ route('user.readUser', ['id' => $user->id]) }}">View</a>
                            <span class="separator">|</span>
                            <a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a>
                            <span class="separator">|</span>
                            <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination">
            <button id="prevPage">Previous</button>
            <span id="pageNumbers"></span>
            <button id="nextPage">Next</button>
        </div>
    </div>

    <footer>
        <p>Lập trình web @2025</p>
    </footer>

    <script src="{{ asset('assets/js/list.js') }}"></script>
</body>
</html>
