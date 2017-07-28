<?php
			$id=$_POST['id'];
			$name=$_POST['name'];
			$account=$_POST['account'];
			$email=$_POST['email'];
			$address=$_POST['address'];
			$phone=$_POST['phone'];
			$img=$_POST['img'];
			$sex=$_POST['sex'];
			include('conn.php');
			$qur = mysql_query("update testphp set name='$name',account='$account',email='$email',address='$address',phone='$phone',img='$img',sex='$sex' where id='$id'");
			// while($rs=mysql_fetch_array($qur)){
				

			// }
			echo "<center><b><div style='color:green;margin-top:20%;font-size:2em;'>修改成功！</b></div></center>";
			header("Refresh:2;url=main.php");
			//header("location:main.php")
		?>