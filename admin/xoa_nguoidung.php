﻿ <?php
include '../include/connect.php';
include 'function/function.php';
$delete = "delete from nguoidung where idnd='{$_GET['idnd']}'";
$tennd=$_GET['tennd'];
$del = $conn->query($delete);
if ($del)
	//echo "thanh cong";
	//header("location: index.php?admin=hienthind");
	redirect ("admin.php?admin=hienthind", "Xóa người dùng thành công. ", 2);
	else
	echo "Xóa người dùng thất bại";
?>