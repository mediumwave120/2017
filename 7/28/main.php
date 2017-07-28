<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>管理系统</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		.navbar{
			margin-bottom: 0;
		}
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
	            <li><a href="#"><span class="glyphicon glyphicon-user"></span> 注册</a></li> 
	            <li><a href="main-1.php?action=logout"><span class="glyphicon glyphicon-log-out"></span> 退出</a></li>
	        </ul> 
	    </div>
	</nav>
	<table class="table table-striped table-bordered table-hover table-responsive">
		<thead>
			<tr>
				<th class="b1">编号</th>
				<th>姓名</th>
				<th>性别</th>
				<th>账号</th>
				<th>邮件</th>
				<th>地址</th>
				<th>电话</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
			<?php		
				session_start();
				include('conn.php');
				if(isset($_SESSION['account'])){
					//$account
				

				
				$Page_size=10; //每页显示的条数
				$result=mysql_query("select * from testphp where account=".$_SESSION['account']); 
				echo $result;
				$count = mysql_num_rows($result); //总的条数
				echo $count;
				$page_count = ceil($count/$Page_size); // ceil向上取整  可以显示多少页
				

				$init=1; 
				$page_len=5; 
				$max_p=$page_count; 
				$pages=$page_count; 

				//判断当前页码 
				if(empty($_GET['page'])||$_GET['page']<0){ 
					$page=1; 
				}else { 
					$page=$_GET['page']; 
				} 

				$offset=$Page_size*($page-1); 
				$sql="select * from testphp where account=".$_SESSION['account']; //." limit $offset,$Page_size"
				echo $sql;
				$result=mysql_query($sql); 
				while ($rs=mysql_fetch_array($result)) {
					$id= $rs['id'];
					echo $id;
			?>
			<tr class="da">
			    <td class="id1"><?php echo $rs['id']?></td>
			    <td class="id2"><?php echo $rs['name']?></td>
			    <td class="id3"><?php if($rs['sex']==0){echo "男";}if($rs['sex']==1){echo "女";}?></td>
			    <td class="id4"><?php echo $rs['account']?></td>
			    <td class="id5"><?php echo $rs['email']?></td>
			    <td class="id6"><?php echo $rs['address']?></td>
			    <td class="id7"><?php echo $rs['phone']?></td>
			    <td class="id8">
				    <a href="select.php?id=<?php echo $id ?>">查看个人信息</a>|
				    <a href="modify.php?id=<?php echo $id ?>">修改</a>|
				    <a href="del.php?id=<?php echo $id ?>">删除</a>
			    </td>
			    
			</tr>
			<?php 
				}
				$page_len = ($page_len%2)?$page_len:$pagelen+1;//页码个数 
				$pageoffset = ($page_len-1)/2;//页码个数左右偏移量
			?>
			<tr>
				<td colspan="8" class="text-center">
					<ul class="pagination pagination-lg">
						<li>
							<a href="#"><?php echo "第".$page."页/共".$pages."页"; ?>
								<!-- <span class="badge"><?php echo $pages; ?></span> -->
							</a>
						</li>
						<li>
							<?php 
								if($page==1){ 
									$key.="<a  href=\"".$_SERVER['PHP_SELF']."?page=1\">首页</a> "; //第一页 
									$key.="<a>上一页 </a>"; //上一页 

								}else { 
									$key.="<a href=\"".$_SERVER['PHP_SELF']."?page=1\">首页 </a>";//第一页 
									$key.="<a  href=\"".$_SERVER['PHP_SELF']."?page=".($page-1)."\">上一页</a>"; //上一页 
								} 

							?>
							 <?php echo $key;?>
						</li>
						<?php 
							if($pages>$page_len){ 
								//如果当前页小于等于左偏移 
								if($page<=$pageoffset){ 
									$init=1; 
									$max_p = $page_len; 
								}else{
								//如果当前页大于左偏移 
								//如果当前页码右偏移超出最大分页数 
									if($page+$pageoffset>=$pages+1){ 
										$init = $pages-$page_len+1; 
									}else{ 
										//左右偏移都存在时的计算 
										$init = $page-$pageoffset; 
										$max_p = $page+$pageoffset; 
									} 
								} 
							} 
							for($i=$init;$i<=$max_p;$i++){ 
								if($i==$page){ 
									$key1.=' <a class="" >'.$i.'</a>'; 
								} else { 
									$key1.=" <a class='' href=\"".$_SERVER['PHP_SELF']."?page=".$i."\">".$i."</a>"; 
								} 
							}  
							if($page!=$pages){ 
								$key1.=" <a class='' href=\"".$_SERVER['PHP_SELF']."?page=".($page+1)."\">下一页</a> ";//下一页 
								$key1.="<a class='' href=\"".$_SERVER['PHP_SELF']."?page={$pages}\">末页</a>"; //最后一页 
							}else { 
								$key1.="<a class='' >下一页</a> ";//下一页 
								$key1.="<a class='' > 末页</a>"; //最后一页 
							} 
						 ?>
						<li><?php echo $key1; }?></li>
					</ul>
				 </td>
			</tr>
		</tbody>
	</table>
</body>
</html>