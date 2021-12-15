<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		if(empty($_GET['id'])) {
			header('location:index.php?error=Phải truyền mã để sửa');
			exit;
		}
		$id = $_GET['id'];
		include '../menu.php';
		require_once '../connect.php';
		$sql = "select * from manufacturers where id = '$id'";
		$result = mysqli_query($connect,$sql);
		$each = mysqli_fetch_array($result);
	?>
	Sửa thông tin nhà sản xuất:
	<br>
	<form method="post" action="process_update.php" >
		<input type="hidden" name="id" value= "<?php echo $each['id'] ?>">
		Tên nhà sản xuất
		<br>
		<input type="name" name="name" value= "<?php echo $each['name'] ?>">
		<br>
		Địa chỉ
		<br>
		<textarea name="address"><?php echo $each['address'] ?></textarea>
		<br>
		Số điện thoại
		<br>
		<input type="text" name="phone" value= "<?php echo $each['phone'] ?>">
		<br>
		Ảnh 
		<br>
		<input type="text" name="photo" value= "<?php echo $each['photo'] ?>">
		<button>Sửa</button>
	</form>
</body>
</html>