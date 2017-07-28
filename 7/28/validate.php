<?php
/*
 * vCode(m,n,x,y) m个数字  显示大小为n   边宽x   边高y
 * http://blog.qita.in
 * 自己改写记录session $code
 *
session_start(); 
vCode(4, 15); //4个数字，显示大小为15
 
function vCode($num = 4, $size = 20, $width = 0, $height = 0) {
    !$width && $width = $num * $size * 4 / 5 + 5;
    !$height && $height = $size + 10; 
    // 去掉了 0 1 O l 等   abcdefghijkmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVW
    $str = "0123456789";
    $code = '';
    for ($i = 0; $i < $num; $i++) {
        $code .= $str[mt_rand(0, strlen($str)-1)];
    } 
    // 画图像
    $im = imagecreatetruecolor($width, $height); 
    // 定义要用到的颜色
    $back_color = imagecolorallocate($im, 235, 236, 237);
    $boer_color = imagecolorallocate($im, 118, 151, 199);
    $text_color = imagecolorallocate($im, mt_rand(0, 200), mt_rand(0, 120), mt_rand(0, 120)); 
    // 画背景
    imagefilledrectangle($im, 0, 0, $width, $height, $back_color); 
    // 画边框
    imagerectangle($im, 0, 0, $width-1, $height-1, $boer_color); 
    // 画干扰线
    for($i = 0;$i < 5;$i++) {
        $font_color = imagecolorallocate($im, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
        imagearc($im, mt_rand(- $width, $width), mt_rand(- $height, $height), mt_rand(30, $width * 2), mt_rand(20, $height * 2), mt_rand(0, 360), mt_rand(0, 360), $font_color);
    } 
    // 画干扰点
    for($i = 0;$i < 50;$i++) {
        $font_color = imagecolorallocate($im, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
        imagesetpixel($im, mt_rand(0, $width), mt_rand(0, $height), $font_color);
    } 
    // 画验证码
    @imagefttext($im, $size , 0, 5, $size + 3, $text_color, 'c:\\WINDOWS\\Fonts\\simsun.ttc', $code);
    $_SESSION["VerifyCode"]=$code; 
    header("Cache-Control: max-age=1, s-maxage=1, no-cache, must-revalidate");
    header("Content-type: image/png;charset=gb2312");
    imagepng($im);
    imagedestroy($im);
} */
 session_start();
 //生成验证码图片
 Header("Content-type: image/PNG");
 $im = imagecreate(44,18); // 画一张指定宽高的图片
 $back = ImageColorAllocate($im, 245,245,245); // 定义背景颜色
 imagefill($im,0,0,$back); //把背景颜色填充到刚刚画出来的图片中
 $vcodes = "";
 srand((double)microtime()*1000000);
 //生成4位数字
 for($i=0;$i<4;$i++){
 $font = ImageColorAllocate($im, rand(100,255),rand(0,100),rand(100,255)); // 生成随机颜色
 $authnum=rand(1,2);
 $vcodes.=$authnum;
 imagestring($im, 5, 2+$i*10, 1, $authnum, $font);
 }
 $_SESSION['VCODE'] = $vcodes;
 
 //echo $vcodes;
 for($i=0;$i<100;$i++) //加入干扰象素
 {
 $randcolor = ImageColorallocate($im,rand(0,255),rand(0,255),rand(0,255));
 imagesetpixel($im, rand()%70 , rand()%30 , $randcolor); // 画像素点函数
 }
 ImagePNG($im);
 ImageDestroy($im);
 
?>