<?php
header("content-type:text/html; charset=utf-8");
session_start();
echo $_SESSION['username'];
if(isset($_SESSION['username']))
{
    if($_SESSION['userflag'] == 1)
        echo "欢迎管理员".$_SESSION['username']."登陆";
    if($_SESSION['userflag'] == 0)
        echo "欢迎用户".$_SESSION['username']."登陆";
}
else
{
    echo "您没有权限访问此页面";
}
?>

