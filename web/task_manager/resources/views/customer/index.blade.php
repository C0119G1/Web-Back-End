<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1 style="color: #a51bff">{{ $description }}</h1>
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
               <a class="btn-info" href="{{ route('customer.AddCustomer') }}">Add</a> | <a href="#">Sửa</a> | <a href="#">Xóa</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<br>

</body>
</html>