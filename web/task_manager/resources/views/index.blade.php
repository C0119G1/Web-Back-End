<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1 style="color: #a51bff">{{ $des }}</h1>
<table border="1">
    <thead>
    <tr>
        <th>STT</th>
        <th>Họ và tên</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Thao tác</th>
    </tr>
    </thead>
    <tbody>
    @foreach($customers as $customer)
        <tr>
            <td>{{ $customer['id'] }}</td>
            <td>{{ $customer['name'] }}</td>
            <td>{{ $customer['phone'] }}</td>
            <td>{{ $customer['email'] }}</td>
            <td>
                <a href="#">Xem</a> | <a href="#">Sửa</a> | <a href="#">Xóa</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<br>
<a class="btn-info" href="{{ route('customer.showAdd') }}">Add Customer</a>

<h1 style="color: #ff6a89">{{ $name }}</h1>
</body>
</html>