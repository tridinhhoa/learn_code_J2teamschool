<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<p>
	Điền thông tin nhà sản xuất:
	<?php  
		include '../menu.php';
	?>
	<br>
	<form method="post" action="process_insert.php" >
		Tên nhà sản xuất
		<br>
		<input type="name" name="name">
		<br>
		Địa chỉ
		<br>
		<textarea name="address"></textarea>
		<br>
		Số điện thoại
		<br>
		<input type="text" name="phone">
		<br>
		Ảnh 
		<br>
		<input type="text" name="photo">
		<button>Thêm</button>
	</form>
</p>
</body>
</html>