<?php 
	include('conn.php');
	$teln=$_POST['teln'];
	$result=mysql_query("select * from testphp where phone ='$teln' "); 

	

	// while($row=mysql_fetch_array($result)){
		
	// 	$arr = array(
	// 			'id'=>$row['id'],'name'=>$row['name'],'sex'=>$row['sex'],'account'=>$row['account'],'email'=>$row['email'],'address'=>$row['address'],'phone'=>$row['phone']
	// 		);
	// 	echo  json_encode($arr);

	// }
	while($row=mysql_fetch_array($result)){
		echo $row['id']."|";
		echo $row['name']."|";
		if($row['sex']==0){echo "男"."|";}if($row['sex']==1){echo "女"."|";}
		echo $row['account']."|";
		echo $row['email']."|";
		echo $row['address']."|";
		echo $row['phone']."|";
	}

	//while($row=mysql_fetch_array($result)){
		
		// echo $row['id'];
		// echo $row['name'];
		// if($row['sex']==0){echo "男";}if($row['sex']==1){echo "女";}
		// echo $row['account'];
		// echo $row['email'];
		// echo $row['address'];
		// echo $row['phone'];

		// $a = array($row['id'], $row['name'], 'c', 'd');
		// foreach($a as $k=>$v) $b[] = sprintf('"%s":"%s"', $k, $v);
		// echo '{' . join(',', $b) . '}';
		
		
		//}
	// $result=mysql_query("select * from testphp where phone='$teln' ");
	// $myresult= mysql_result($result,0,"id");

	// $result1=mysql_query("select * from testphp where phone='$teln' ")
 ?>