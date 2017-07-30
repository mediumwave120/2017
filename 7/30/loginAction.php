<?php 
	// 保存一天  www.111cn.net
    $lifeTime = 20;  
    session_set_cookie_params($lifeTime);  
	session_start(); 
	header("content-type:text/html; charset=utf-8");
	
	$code = trim($_POST['validate']);
	if(strtolower($code)!=strtolower($_SESSION["VCODE"])){ 
		echo "*验证码输入有误!";
		return;
	}

	$account=trim($_POST['account']);
	$password = trim($_POST['password']);

	include('conn.php');
	//检测用户名及密码是否正确
	
	$sql="select * from testphp where account='$account' and password='$password'";
	$check_query = mysql_query($sql);
	if($result=mysql_fetch_array($check_query)){

		//$_SESSION['account']=$result[''];
		//echo "<script>alert(".$result['name'].");</script>";
		$_SESSION['id']=$result['id'];
		$_SESSION['name']=$result['name'];
		$_SESSION['account']=$result['account'];
		$_SESSION['password']=$result['password'];
		$_SESSION['email']=$result['email'];
		$_SESSION['address']=$result['address'];
		$_SESSION['phone']=$result['phone'];
		$_SESSION['sex']=$result['sex'];
		$_SESSION['img']=$result['img'];
		$_SESSION['expiretime'] =time()+10;

	}else{
		echo "*账号或密码错误!";
		return;
	}
	
	
 ?>