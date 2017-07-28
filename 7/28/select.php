<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>php</title>
		<style>
			/*body{position: relative;}
            table{width:500px;height:600px;text-align: center;position: fixed;left: 50%;top: 50%;-webkit-transform:translateX(-50%) translateY(-50%);}
            #fh{text-align:center;background:gray;font-size:11pt;color:black;}	
            img{width:420px;height:300px;transition:all 2s;transform:scale(1.1)}
            img:hover{
            	-webkit-transform:scale(1.5);
				transform:scale(1.5);


            }
            #img1{overflow: hidden;}*/
            img{width:420px;height:300px;transition:all 2s;transform:scale(1.1)}
            img:hover{
            	-webkit-transform:scale(1.5);
				transform:scale(1.5);


            }
            #img1{overflow: hidden;}
		</style>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<script>
			$(function(){
				//$('table').css('height', $(window).height());
			});
		</script>
	</head>
	<body>
		
		<?php
			error_reporting(0);
			header("content-type:text/html; charset=utf-8");
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
				$img= $rs['img'];
				$sex= $rs['sex'];

			}
		?>
		<h1 class="h3"><?php echo $account ?> 的空间</h1>
		<nav class="navbar navbar-inverse">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="false">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>
		        <a class="navbar-brand" href="#"></a>
		    </div>
		    <div id="navbar-menu" class="collapse navbar-collapse">
		        <ul class="nav navbar-nav">
		            <li class="active"><a href="#">主页</a></li>
		            <li><a href="#">日志</a></li>
		            <li><a href="#">相册</a></li>
		            <li><a href="#">留言板</a></li>
		            <li><a href="#">说说</a></li>
		            <li><a href="#">相个人档册</a></li>
		            <li><a href="#">音乐</a></li>
		        </ul>
		    </div>
		</nav>
		<table class="table table-bordered table-hover text-center">
			<tr>
				<td>姓名</td><td readOnly="true"><?php echo $name ?></td>
			</tr>
			<tr>
				<td>性别</td><td readOnly="true"><?php if($sex==0){echo "男";} if($sex==1){echo "女";} ?></td>	
			</tr>
			<tr>
				<td>电话</td><td readOnly="true"><?php echo $phone ?></td>
			</tr>
			<tr>
				<td>邮件</td><td readOnly="true"><?php echo $email ?></td>
			</tr>
			<tr>
				<td>地址</td><td readOnly="true"><?php echo $address ?></td>
			</tr>
			<tr>
				<td>图片</td><td readOnly="true" id="img1"> <img src=<?php echo "img/".$img ?>alt=""></td>
			</tr>
			<tr>
				<td colspan="2" align="center" ><a href="javascript:history.back(-1);" id="fh"  class="btn btn-primary">返回</a> </td>
			</tr>
		</table>
	</body>
</html>