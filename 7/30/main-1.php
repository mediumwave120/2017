<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>管理系统</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		/*.navbar{
			margin-bottom: 0;
		}*/
	</style>
	<script src="js/jquery.min.js"></script>

</head>
<body >
	<nav class="navbar navbar-default" role="navigation"> 
	    <div class="container-fluid"> 
	        <div class="navbar-header"> 
	            <a class="navbar-brand" href="#">管理系统</a> 
	        </div> 
	        <ul class="nav navbar-nav navbar-right"> 
	            <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> 注册</a></li> 
	            <li><a href="main-1.php?action=logout"><span class="glyphicon glyphicon-log-out"></span> 退出</a></li>
	        </ul> 
	    </div>
	</nav>
	<table class="table table-striped table-bordered table-hover table-responsive">
		<thead>
			<tr>
				<th class="b1">编号</th>
				<th>姓名</th>
				<th>账号</th>
				<th>邮件</th>
				<th>地址</th>
				<th>电话</th>
			</tr>
		</thead>
		<tbody>
			<?php		
				//include('session.php');
				//start_session(10);
				//session_set_cookie_params(10); 
				session_start();
				//echo time();
				if(!isset($_SESSION['expiretime'])){
					//echo "<script>alert('请先登录后，再重试！')</script>";
					header("Location:login.php");
				}
				if(isset($_SESSION['expiretime'])) {
				    if($_SESSION['expiretime'] < time()) {
				        unset($_SESSION['expiretime']);
				        //header('Location: login.php'); // 登出
				        echo "<h3><a href='login.php' class='btn-block text-center'>请先登录后，再重试！</a></h3>";
				        exit;
				    } else {
				        $_SESSION['expiretime'] = time() + 10; // 刷新时间戳
				//     }
				// }
				//include('conn.php');
				//if(isset($_SESSION['id'])){
					// if($_SESSION['id']=10001){
					// 	echo "我是草鸡管理员";
					// }
					
	
			?>
			<tr>
				<td><?php echo $_SESSION['id'] ?></td>
				<td><?php echo $_SESSION['name'] ?></td>
				<td><?php echo $_SESSION['account'] ?></td>
				<td><?php echo $_SESSION['email'] ?></td>
				<td><?php echo $_SESSION['address'] ?></td>
				<td><?php echo $_SESSION['phone'] ?></td>

			</tr>
			<?php 
				//}
    }
				}
				//注销登录
				if($_GET['action'] == "logout"){
				    //unset($_SESSION['id']);
				    //unset($_SESSION['name']);
				    //echo '注销登录成功！点击此处 <a href="login.html">登录</a>';
				    session_destroy();
				    header("Location:login.php");
				    exit;
				}
			 ?>
</body>
</html>