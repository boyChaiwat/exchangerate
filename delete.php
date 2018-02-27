<?php 
	require 'connect.php';
	$id = $_REQUEST['id'];
	$thb = $_REQUEST['thb'];
	$sql = "DELETE FROM exchange194 WHERE recordID = $id";
	$sql_exe = $conn->query($sql);
	if($sql_exe) {
		echo "Delete complete";
		echo "<br>";
		echo "Delete ID".$id;
		echo "<br>";
		echo "THB =".$thb;
		header("location:index.php", true, 200);
	} else {
		echo "Delete failed";
	}
 ?>