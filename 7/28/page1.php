<?php
include("conn.php");
$perNumber=2; //每页显示的记录数
$page=$_GET['page']; //获得当前的页面值
$count=mysql_query("select count(*) from testphp"); //获得记录总数
$rs=mysql_fetch_array($count); 
$totalNumber=$rs[0];
$totalPage=ceil($totalNumber/$perNumber); //计算出总页数
if (!isset($page)) {
 $page=1;
} //如果没有值,则赋值1
$startCount=($page-1)*$perNumber; //分页开始,根据此方法计算出开始的记录
$result=mysql_query("select * from testphp limit $startCount,$perNumber"); //根据前面的计算出开始的记录和记录数
while ($row=mysql_fetch_array($result)) {
 echo "user_id:".$row[0]."<br>";
 echo "username:".$row[1]."<br>"; //显示数据库的内容
}
if ($page != 1) { //页数不等于1
?>
<a href="page1.php?page=<?php echo $page - 1;?>">上一页</a> <!--显示上一页-->
<?php
}
for ($i=1;$i<=$totalPage;$i++) {  //循环显示出页面
?>
<a href="page1.php?page=<?php echo $i;?>"><?php echo $i ;?></a>
<?php
}
if ($page<$totalPage) { //如果page小于总页数,显示下一页链接
?>
<a href="page1.php?page=<?php echo $page + 1;?>">下一页</a>
<?php
} 
?>