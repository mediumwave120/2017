<?php
error_reporting(0);
session_start();

//����Ƿ��¼����û��¼��ת���¼����
if(!isset($_SESSION['id'])){
	header("Location:login.php");
	exit();
}

//�������ݿ������ļ�
include('conn.php');
$id = $_SESSION['id'];
$account = $_SESSION['account'];
$user_query = mysql_query("select * from testphp where id=$id");
$row = mysql_fetch_array($user_query);
echo '�û���Ϣ<br />';
echo '�û�ID��',$id,'<br />';
echo '�û�����',$account,'<br />';
echo '���䣺',$row['email'],'<br />';
//echo 'ע�����ڣ�',date("Y-m-d", $row['regdate']),'<br />';
echo '<a href="login.php?action=logout">ע��</a>';
?>