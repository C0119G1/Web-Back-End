<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
		<h2>Thông tin chi tiết </h2>

			<label>Tên sản phẩm</label>
			{{ $productDescription }}
			<br>
			<label >Giá niêm yết của sản phẩm</label>
			${{ $price }}
			<br>
			<label>Tỷ lệ chiết khấu (phần trăm)</label>
			{{ $discountPercent }}
			<br>
			<label>Lượng chiết khấu</label>
			{{ $discountAmount }}
			<br>
			<label>Giá sau khi đã được chiết khấu</label>
			<span>{{ $discountPrice }}</span>

</body>
</html>
