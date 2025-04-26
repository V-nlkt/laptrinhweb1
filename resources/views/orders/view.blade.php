<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Đơn Hàng</title>
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
        <h2>Chi tiết đơn hàng</h2>
        <div class="order-details">
            <p><strong>ID đơn hàng:</strong> {{ $order->id }}</p>
            <p><strong>Ngày tạo:</strong> {{ $order->created_at->format('d/m/Y H:i') }}</p>
            <p><strong>Tổng tiền:</strong> {{ number_format($order->total, 0, ',', '.') }} đ</p>
            <p><strong>Trạng thái:</strong> {{ $order->status }}</p>
            <p><strong>Địa chỉ giao hàng:</strong> {{ $order->shipping_address }}</p>
        </div>
    </div>

    <div class="container">
        <h3>Danh sách chi tiết đơn hàng</h3>
        <table>
            <thead>
                <tr>
                    <th>ID Chi Tiết</th>
                    <th>Sản phẩm</th>
                    <th>Giá đơn vị</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orderDetails as $detail)
                    <tr>
                        <td>{{ $detail->id }}</td>
                        <td>{{ $detail->product->name }}</td>
                        <td>{{ number_format($detail->product->price, 0, ',', '.') }} đ</td>
                        <td>{{ $detail->quantity }}</td>
                        <td>{{ number_format($detail->quantity * $detail->product->price, 0, ',', '.') }} đ</td>
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
