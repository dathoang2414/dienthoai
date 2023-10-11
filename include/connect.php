<?php
	$conn = mysqli_connect('localhost', 'root', '', 'dienthoai');

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>
