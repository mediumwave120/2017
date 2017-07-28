<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>php</title>
		<style>
			img{width:60px;height:40px;}
			div{margin:280px 550px;width:100%;height:300px;}
			span{font-size:1.5em;color:#32CD32;}
			b{color:red;}
			input{width:200px;height:30px;background:blue;}
		</style>
	</head>
	<body>
<?php	
			include('conn.php');
			//$image = mysql_escape_string(file_get_contents($_FILES['photo']['tmp_name']));  
			$sql="INSERT INTO testphp (name,account,password,email,address,phone,img,sex) VALUES ('$_POST[name]','$_POST[account]','$_POST[password]','$_POST[email]','$_POST[address]','$_POST[phone]','$_POST[img]','$_POST[sex]')";
			//header("Refresh:1;url=login.php");
			header("location: login.php");
			mysql_query($sql);
			mysql_close($con);
?>
		<!-- <div>
			<img src='img/yes.jpg'/>
			<span>注册成功</span>
			<p>非常感谢您的注册,你的用户名已创建成功!</p>
			<?php 
				//echo "您的用户名:<b>".$_POST[account]."</b>";
			?>
		</div> -->
	</body>