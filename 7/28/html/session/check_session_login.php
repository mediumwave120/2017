<?php
header("content-type:text/html; charset=utf-8");
@mysql_connect("localhost","root",'root')
or die("数据库连接失败");
@mysql_select_db("shzj")
or die("选择数据库失败");
//获取输入的信息
$username = $_POST['username'];
$passcode = $_POST['passcode'];
//获取session的值
$query = @mysql_query("select username,userflag from users where username = '$username' and passcode = '$passcode'")
or die("SQL语句执行失败");
//判断用户以及密码
if($row = mysql_fetch_array($query)){
    session_start();
    //判断权限
    if($row['userflag'] == 1 or $row['userflag'] == 0){
        $_SESSION['username'] = $row['username'];
        $_SESSION['userflag'] = $row['userflag'];
        echo "<a href='welcome_session_login.php'>欢迎访问www.cnblogs.com/txw1958</a>";
    }else{
        echo "userflag不正确";
    }

}else{
    echo "username或者usercode";
}
?>