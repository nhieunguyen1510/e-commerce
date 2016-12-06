$(document).ready(function(){
	$(".cart_quantity_refresh").click(function(){
		var rowid=$(this).attr('id');
		var qty = $(this).parent().parent().find('.cart_quantity_input').val();
		var token = $("input[name='_token']").val();
		$.ajax({
			url:'sua-gio-hang/'+rowid+'/'+qty,
			type:'GET',
			cache:false,
			data:{"_token": token,"id":rowid,"qty":qty},
			success:function(data){
				if(data =="oke"){
					alert("yes")
				}

			}
		});
	});
		
		
	});

});