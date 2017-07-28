<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=9">
	<title>background</title>
	<link rel="stylesheet" href="css/login.css">
	<script src='js/jquery.min.js'></script>
	<script src="js/login.js"></script>
</head>
<body>
	<div id="grad1">
		<div class="lo"></div>
		<div class="logo">
			<span>LOGIN</span>
		</div>
		<div class="sign">
			<form action="main-1.php" method="post" id="loginForm" name="login" >			
				<input type="text" placeholder="请输入用户名" class="account" name="account"/>
				<input type="password" placeholder="请输入密码" class="password" name="password" />
				<input type="text" class="validate" placeholder="请输入验证码" name="validate"/>
				<img src='validate.php' id="safecode"  title="看不清楚?点击切换!" align='absmiddle'>
			    <a  href="javascript:void(0)" class="sign_in"/>登录</a>
				<!-- <input type="submit" value="登录" class="sign_in"/> -->
				<span class="error_msg"></span>
			</form>
		</div>
	</div>
	<script>

	</script>
</body>
</html>
