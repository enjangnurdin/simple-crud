<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
include 'config.php';
$nama = $_POST['name'];
$age  = $_POST['age'];
$email = $_POST['email'];

$sql = "INSERT INTO `users` (`name`, `age`, `email`) VALUES ('$nama','$age','$email')";
$resp = mysqli_query($mysqli, $sql);
if ($resp) {
	header("location:index.php");
	echo "sukses";
}else{
	echo "gagal";
}
?>
</body>
</html>
