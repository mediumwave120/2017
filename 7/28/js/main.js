$(function(){								
		
	$('#select').click(function(){
		$.ajax({
			url:'selects.php',
			type:'post',
			data:{'teln':$('#teln').val()},
			success:function(data){

				
				// $('.da').remove();
				// var obj = eval("("+data+")");
				
				  console.log(data);

			
				//  $('.id1').text(obj.id);
				// $('.id2').text(obj.name);
				// if(obj.sex==0){
				// 	$('.id3').text('男');
				// }
				// if(obj.sex==1){
				// 	$('.id3').text('女');
				// }
				// $('.id4').text(obj.account);
				// $('.id5').text(obj.email);
				// $('.id6').text(obj.address);
				// $('.id7').text(obj.phone);




				var mycars=new Array();
					mycars=data.split("|");
				$('.da').remove();
				var mydata=$("<tr class='tab'><td>"+mycars[0]+"</td><td>"+mycars[1]+"</td><td>"+mycars[2]+"</td><td>"+mycars[3]+"</td><td>"+mycars[4]+"</td><td>"+mycars[5]+"</td><td>"
					+mycars[6]+"</td><td><a href='select.php?id="+mycars[0]+"'>查看个人信息</a>|<a href='modify.php?id="+mycars[0]+"'>修改</a>|<a href='del.php?id="+mycars[0]+"'>删除</a></td></tr>");
				if(!$('tr').is('.tab')){

					$('tr:eq(1)').after(mydata);
					$('.tab1').remove();	
				}
				
				if(!$('tr').is('.tab1')){
					if($('#teln').val()!=mycars[6])	{
						$('tr:eq(1)').after("<tr class='tab1'><td colspan='8'>对不起，没有您想要找的数据！</td></tr>");	
						$('.tab').remove();
					}
				}
			}
		});
	});
});