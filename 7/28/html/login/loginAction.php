<?php
		error_reporting(0);
		session_start();
		header("content-type:text/html; charset=gbk");
		//ע����¼
		// if($_GET['action'] == "logout"){
		// 	unset($_SESSION['id']);
		// 	unset($_SESSION['account']);
		// 	echo 'ע����¼�ɹ�������˴� <a href="login.php">��¼</a>';
		// 	exit;
		// }

		//submit��¼
		//if(!isset($_POST['submit'])){exit('�Ƿ�����!');}
		$account = trim($_POST['account']);
		//$password = MD5($_POST['password']);
		$password = trim($_POST['password']);
		//�������ݿ������ļ�
		include('conn.php');
		//����û����������Ƿ���ȷ
		$sql="select id from testphp where account='$account' and password='$password'";

		 $check_query = mysql_query($sql);

		 /*
			submit�ύ��¼
		 */
		// if($result = mysql_fetch_array($check_query)){
		// 	//��¼�ɹ�
		// 	$_SESSION['account'] = $account;
		// 	$_SESSION['id'] = $result['id'];
		// 	header('Location:./main.php');
		// 	exit;
		// } else {

		// 	//echo('��¼ʧ�ܣ�����˴� <a href="javascript:history.back(-1);">����</a> ����');
		// 	//header('Location:./login.php');
		// 	echo "<script>alert('�û������������');</script>";
		// 	require('login.php');
		// 	exit;
		// }


		/*
			ajax�ύ��¼
		*/
		if(!mysql_fetch_array($check_query)){
			echo "�û������������";
			return;
		}
	?>


	