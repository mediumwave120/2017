<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>php</title>

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<style>
			*{padding:0;margin:0;}
			.list-group-item{
				line-height: 25px;
				border:none;
			}
			.container {
			    min-width: 800px;
			    width: 800px;
			    border:1px solid #ddd;
			    margin-top:80px;
			    padding:30px;
			    border-radius: 5px;
			 }
			li{

			}
			.btn-w{
				width: 100px;
			}
			input::-webkit-input-placeholder {
		        /* placeholder颜色  */
		        color: #aab2bd;
		        /* placeholder字体大小  */
		        font-size: 14px;
		        /* placeholder位置  */
		        text-align: right;
		    }
		</style>
		<script>
		</script>
	</head>
	<body>
		<!-- class=text-center -->
		<div class="container text-center">
			<h4>注册新用户</h4>
			<form action="registerAction.php"  method="post"  enctype="multipart/form-data">
				<ul class="list-group">
					<li class="list-group-item">
						<label>姓名：<input type="text" name="name"  placeholder="请输入用户名"/></label>
					</li>
					<!-- <li class="list-group-item" >
						<label class='text-left'>性别：
							<input type="radio" name="sex" value="0"/>男
							<input type="radio" checked="checked"  name="sex" value="1"/>女
						</label>
					</li> -->
					<li class="list-group-item"><label>账号：<input type="text" name="account"   placeholder="请输入账号"/></label></li>
					<li class="list-group-item"><label>密码：<input type="password" name="password"  placeholder="请输入密码"/></label></li>
					<li class="list-group-item"><label>地址：<input type="text" name="address"  placeholder="请输入地址"/></label></li>
					<li class="list-group-item"><label>邮箱：<input type="text" name="email"  placeholder="请输入邮箱"/></label></li>
					<li class="list-group-item"><label>手机：<input type="text" name="phone"  placeholder="请输入手机号"/></label></li>
					<!-- <li class="list-group-item"><label>图片：<input type="file" name="img"/></label></li> -->
					<li class="list-group-item">
						<label>
							<button type="submit" name="submit" class="btn btn-primary btn-w">注册</button>
						</label>
					</li>
				</ul>				
			</form>
		</div>
	</body>
</html>