<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
	// Mã này lấy ở trên thanh địa chỉ về và theo phương thức _GET
	$ma = $_GET['ma'];
	require_once 'connect.php';

	$sql = "select * from tin_tuc
	where ma = $ma";
	$ket_qua = mysqli_query($ket_noi,$sql);
	$bai_tin_tuc = mysqli_fetch_array($ket_qua);
?>
<h1>
	<?php echo $bai_tin_tuc['tieu_de'] ?>
</h1>
<p>
	<?php echo nl2br($bai_tin_tuc['noi_dung']) ?>
</p>
<img src="<?php echo $bai_tin_tuc['anh'] ?>" height='400'>
<?php mysqli_close($ket_noi) ?>
</body>
</html>