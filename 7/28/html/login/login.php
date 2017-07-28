<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户登录</title>
  <style type="text/css">
    html{font-size:12px;}
	fieldset{width:300px; margin: 0 auto;}
	legend{font-weight:bold; font-size:14px;}
	.label{float:left; width:70px; margin-left:10px;}
	.left{margin-left:80px;}
	.input{width:150px;}
	span{color: #666666;}
  a{width:150px;font-size: 20px;}
  </style>
  <script src="../../js/jquery.min.js"></script>
<script>
<!--

function InputCheck(LoginForm){
  if (LoginForm.account.value == ""){
    alert("请输入用户名!");
    LoginForm.account.focus();
    return (false);
  }
  if (LoginForm.password.value == ""){
    alert("请输入密码!");
    LoginForm.password.focus();
    return (false);
  }
}

//-->


</script>
</head>
<body>
<div>
<fieldset>
<legend>用户登录</legend>
<!-- onSubmit="return InputCheck(this)" -->
<form name="LoginForm" method="post" action="loginAction.php" >
<p>
<label for="account" class="label">用户名:</label>
<input id="account" name="account" type="text" class="input" />
<p/>
<p>
<label for="password" class="label">密 码:</label>
<input id="password" name="password" type="password" class="input" />
<p/>
<p>
<input type="submit" name="submit" value="  确 定  " class="left" />
<a href="javascript:;" id='login'>登录</a>
</p>
</form>
</fieldset>
</div>
<script>
  $(function(){
    $("#login").click(function(){
    var  account=$('#account').val();
    var password=$('#password').val();
      console.log(account+','+password);
      $.ajax({
        url:"loginAction.php",
        type:'post',
        data:{'account':account,'password':password},
        success:function(data){
          //for(var i=0;i<=data.length;i++){

          console.log(data[0]);
          //}
          // if(data){
          //   // $('.error_msg').text(data).errorMsg();  
          //   // $('#safecode').click();
          //   // return false;
          //   console.log(data);
          // }else{
          //   document.getElementById("loginForm").submit();
          // }
        } 
      });
     
    });
  });
</script>
</body>
</html>