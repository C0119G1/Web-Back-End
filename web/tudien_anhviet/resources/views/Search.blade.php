<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="check" method="post">
	@csrf
		<div>
			<label >Nhập từ càn tìm kiếm</label>
			<input type="text" name="search"  />
		</div>
		<div>
			<label >Nghĩa của từ là:</label>
			<input type="text" name="nghia"  />
		</div>
	
		<div>
			<input type="submit" value="Dịch" />
		</div>
	</form>
	
</body>
</html>