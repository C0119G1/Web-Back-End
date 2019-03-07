<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Navbar Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-primary rounded">
    <a class="navbar-brand" href="{{ route('customer.index') }}">Danh sách Khách Hàng</a>
    <a class="navbar-brand" href="{{ route('City.index') }}">Quản Lý Thành Phố</a>
    <a class="navbar-brand" href="#">Thông tin về công ty</a>
</nav>

</body>
</html>