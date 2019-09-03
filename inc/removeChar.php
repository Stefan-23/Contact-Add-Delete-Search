<?php
if(isset($_GET['id'])){
	$id= $_GET['id'];
	require 'connection.php';
	$query = "DELETE FROM characters WHERE ID={$id}";
	mysqli_query($conn, $query);
	header("Location: ../remove.php");
}
