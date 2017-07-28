<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>php</title>
		<style>
            
            #tj,#fh{text-align:center;background:gray;font-size:11pt;}
            table{
            	position: fixed;
            	top:50%;
            	left: 50%;
            	-webkit-transform:translateX(-50%) translateY(-50%);
            }
		</style>
	</head>
	<body>
		<?php
			$id=$_GET['id'];
			include('conn.php');
			$qur = mysql_query("select * from testphp where id='$id'");
			while($rs=mysql_fetch_array($qur)){
				//echo $rs['id'];
				$name= $rs['name'];
				$account= $rs['account'];
				$email= $rs['email'];
				$address= $rs['address'];
				$phone= $rs['phone'];
				$img=$rs['img'];
				$sex=$rs['sex'];

			}
		?>
		<form action="modifyAction.php" method="post">
			<table border="1" align="center">
				<tr>
					<td>编号</td><td><input type="text" readOnly="true" value="<?php echo $id ?>" name="id"></td>	
				</tr>
				<tr>
					<td>性别</td>
					<td>
						<input type="radio" <?php if($sex==0){echo "checked='checked'";} ?> name="sex" value="0"/>男
						<input type="radio" <?php if($sex==1){echo "checked='checked'";} ?> name="sex" value="1"/>女
					</td>	
				</tr>
				<tr>
					<td>姓名</td><td><input type="text" value="<?php echo $name ?>" name="name"></td>
				</tr>
				<tr>
					<td>账号</td><td><input type="text" value="<?php echo $account ?>" name="account"></td>
				</tr>
				<tr>
					<td>邮件</td><td><input type="text" value="<?php echo $email ?>" name="email"></td>
				</tr>
				<tr>
					<td>地址</td><td><input type="text" value="<?php echo $address ?>" name="address"></td>
				</tr>
				<tr>
					<td>电话</td><td><input type="text" value="<?php echo $phone ?>" name="phone"></td>
				</tr>
				<tr>
					<td>图片</td><td><input type="file" value="<?php echo $img ?>" name="img"> </td>
				</tr>
				<tr>
					<td ><input type="submit" value="提交" id="tj"/></td>
					<td ><a href="javascript:history.back(-1);" id="fh">返回</a></td>
				</tr>
			</table>
		</form>
		
	</body>
</html>