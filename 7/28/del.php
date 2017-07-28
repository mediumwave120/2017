<?php
	include('conn.php');
	$id=$_GET['id'];
	$sql=mysql_query("delete from testphp where id='$id'");
	header("location:main.php");

?>