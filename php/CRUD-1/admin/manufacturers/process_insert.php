<?php
if (empty($_POST['name']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['photo'])) {
	header('location:form_insert.php?error=Điền đầy đủ thông tin');
	exit();
}

$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$photo = $_POST['photo'];

require_once '../connect.php';

$sql = "insert into manufacturers(name,address,phone,photo)
values('$name','$address','$phone','$photo')";
mysqli_query($connect,$sql);

$error = mysqli_error($connect);
echo "$error";
mysqli_close($connect);

if(empty($error)) {
	header('location:index.php?success=Thêm thành công');
} else {
	header('location:form_insert.php?error=Tên nhà sản xuất không được trùng nhau');
}

