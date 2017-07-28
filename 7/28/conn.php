<?php 
	 error_reporting(0);
	 header("content-type:text/html; charset=utf-8");
	 $conn = mysql_connect("localhost","root","") or die("数据库链接错误".mysql_error());
	 mysql_select_db("shzj",$conn) or die("数据库访问错误".mysql_error());
	 mysql_query("set names utf8");
?>