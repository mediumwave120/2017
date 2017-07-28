<?php
error_reporting(0);
session_start();

//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['id'])){
	header("Location:login.php");
	exit();
}

//包含数据库连接文件
include('conn.php');
$id = $_SESSION['id'];
$account = $_SESSION['account'];
$user_query = mysql_query("select * from testphp where id=$id");
$row = mysql_fetch_array($user_query);
echo '用户信息<br />';
echo '用户ID：',$id,'<br />';
echo '用户名：',$account,'<br />';
echo '邮箱：',$row['email'],'<br />';
//echo '注册日期：',date("Y-m-d", $row['regdate']),'<br />';
echo '<a href="login.php?action=logout">注销</a>';
?>