<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Người Dùng</title>
    <link rel="stylesheet" href="{{ asset('assets/css/list.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
                    <th>Roles</th>
                    <th>Orders</th>
                    <th class="action">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @foreach($user->roles as $role)
                                <a href="{{ route('user.role', ['id' => $role->id]) }}">
                                    {{ $role->name . '-' }}
                                </a>
                            @endforeach
                        </td>
                        <td>
                            @foreach($user->orders as $order)
                                <a href="{{ route('user.order', ['id' => $order->id]) }}" style="display: inline-block; margin: 2px;">
                                    {{ $order->id }}
                                </a>
                            @endforeach
                        </td>
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
        {!! $users->withQueryString()->links('pagination::bootstrap-5') !!}
    </div>
    <footer>
        <p>Lập trình web @2025</p>
    </footer>

    <script src="{{ asset('assets/js/list.js') }}"></script>
</body>
</html>
