<?php
		error_reporting(0);
		session_start();
		header("content-type:text/html; charset=gbk");
		//注销登录
		// if($_GET['action'] == "logout"){
		// 	unset($_SESSION['id']);
		// 	unset($_SESSION['account']);
		// 	echo '注销登录成功！点击此处 <a href="login.php">登录</a>';
		// 	exit;
		// }

		//submit登录
		//if(!isset($_POST['submit'])){exit('非法访问!');}
		$account = trim($_POST['account']);
		//$password = MD5($_POST['password']);
		$password = trim($_POST['password']);
		//包含数据库连接文件
		include('conn.php');
		//检测用户名及密码是否正确
		$sql="select id from testphp where account='$account' and password='$password'";

		 $check_query = mysql_query($sql);

		 /*
			submit提交登录
		 */
		// if($result = mysql_fetch_array($check_query)){
		// 	//登录成功
		// 	$_SESSION['account'] = $account;
		// 	$_SESSION['id'] = $result['id'];
		// 	header('Location:./main.php');
		// 	exit;
		// } else {

		// 	//echo('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
		// 	//header('Location:./login.php');
		// 	echo "<script>alert('用户名或密码错误！');</script>";
		// 	require('login.php');
		// 	exit;
		// }


		/*
			ajax提交登录
		*/
		if(!mysql_fetch_array($check_query)){
			echo "用户名或密码错误！";
			return;
		}
	?>


	