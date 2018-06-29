<?php
	include ("../koneksi.php");

	$id = $_GET['id'];
	$query = "UPDATE `produk` SET `favorit`=1 WHERE `produk`.`id`='".$id."' ";
	$sql = mysqli_query($connect, $query);
	if ($sql){
		header("location: ../favorit.php");
	}
?>