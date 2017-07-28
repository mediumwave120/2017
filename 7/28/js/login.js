;$(function(){
	$.fn.extend({
		errorMsg:function(){
			return $(this).css({'color':'red'});
		}
	});
	// $('body').height(document.body.scrollHeight);
	 	
	var wwcenter=$(document).width();
	var whcenter=$(document).height();
	var cwcenter=$('#container').width();
	var chcenter=$('#container').height();
	var width=(wwcenter/2-cwcenter/2)+'px';
	var height=(whcenter/2-chcenter/2)+'px';
	//$('#container').css({'position':'absolute','left':width,'top':height});	
	//得到页面高度 
	var yScroll = (document.documentElement.scrollHeight >document.documentElement.clientHeight) ? document.documentElement.scrollHeight : document.documentElement.clientHeight; 
	$('body').height(yScroll);

	//得到页面宽度 
	var xScroll=(document.documentElement.scrollWidth>document.documentElement.clientWidth) ? document.documentElement.scrollWidth : document.documentElement.scrollWidth; 

	

	$('.sign_in').click(function(){
	var validate=$('.validate').val();
	var  account=$('.account').val();
	var password=$('.password').val();
					 
		if(!validate){
			$('.error_msg').text('*请输入验证码').errorMsg();
			login.validate.focus();
			return false;
		}

		if(!account){
			$('.error_msg').text('*请输入用户名').errorMsg();
			login.account.focus();			
			return false;
		}
		if(!password){
			$('.error_msg').text('*请输入密码').errorMsg();
			login.password.focus();
			return false;
		}	

	    $.ajax({
			url:'loginAction.php',
			type:'post',
			data:{'validate':validate,'account':account,'password':password},
			success:function(data){
				if(data){
					$('.error_msg').text(data).errorMsg();	
					$('#safecode').click();
					return false;
				}else{
					document.getElementById("loginForm").submit();
				}
			}					
		});
				
	});
		
		$('#safecode').click(function(){
			var d = new Date();
			document.getElementById('safecode').src="validate.php?t="+d.toTimeString();
			
		});
		
		if( !('placeholder' in document.createElement('input')) ){  
		   
		    $('input[placeholder],textarea[placeholder]').each(function(){   
		      var that = $(this),   
		      text= that.attr('placeholder');   
		      if(that.val()===""){   
		        that.val(text).addClass('placeholder');   
		      }   
		      if($("input[type='password']")){
		      	
		      }

		      that.focus(function(){   
		        if(that.val()===text){   
		          that.val("").removeClass('placeholder');   
		        }   
		      })   
		      .blur(function(){   
		        if(that.val()===""){   
		          that.val(text).addClass('placeholder');   
		        }   
		      })   
		      .closest('form').submit(function(){   
		        if(that.val() === text){   
		          that.val('');   
		        }   
		      });   
		   });   
		} 
		
});

		