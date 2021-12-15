<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
Đây là khu vực quản lý nhà sản xuất
<br>
<a href="form_insert.php">Thêm nhà sản xuất</a>
<?php
	include '../menu.php';
	require_once '../connect.php';

	$sql = "select * from manufacturers";
	$result = mysqli_query($connect,$sql);
	// $arr_result = mysqli_fetch_array($result);
?>
<table border="1" width="100%">
	<tr>
		<th>Mã</th>
		<th>Tên</th>
		<th>Địa chỉ</th>
		<th>Điện thoại</th>
		<th>Ảnh</th>
		<th>Sửa</th>
		<th>Xóa</th>
	</tr>
	<?php foreach ($result as $each ) { ?>
		<tr>
			<td>
				<?php echo $each['id'] ?>
			</td>
			<td>
				<?php echo $each['name'] ?>
			</td>
			<td>
				<?php echo $each['address'] ?>
			</td>
			<td>
				<?php echo $each['phone'] ?>
			</td>
			<td>
				<img src="<?php echo $each['photo']?>" height="100">
			</td>
			<td>
				<a href="form_update.php?id=<?php echo $each['id'] ?>">Sửa</a>
			</td>
			<td>
				<a href="delete.php?id=<?php echo $each['id'] ?>">Xóa</a>
			</td>
		</tr>
	<?php } ?>
</table>
<?php mysqli_close($connect) ?>
</body>
</html>