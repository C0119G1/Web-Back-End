<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="/Calculator" method="post">
		@csrf
		<h2>Bảng tính tiền </h2>
		<div id="hienthi">
			<label>Product Description:</label>
			<input type="text" name="Production" />
		</div>
		<div>
			<label >List Price</label>
			<input type="text" name="ListPrice"  />
		</div>

		<div>
			<label>Discount Percent:</label>
			<input type="text" name="DiscountPercent"  />
		</div>
		<div>
			<input type="submit" value="Calculator" />
		</div>
	</form>
	
</body>
</html>

