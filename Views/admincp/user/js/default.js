$(document).ready(function(){
	//variable
	var html_record = '<tr>';
		html_record += '<td>:user_id</td>';
		html_record += '<td>:user_hoten</td>';
		html_record += '<td>:user_email</td>';
		html_record += '<td>:user_level_name</td>';
		html_record += '<td>';
		html_record += '<a href=""><i class="glyphicon glyphicon-wrench"></i> Sửa</a> - ';
		html_record += '<a class="del" rel=":user_id" href="#"><i class="glyphicon glyphicon-remove"></i> Xóa</a>';
		html_record += '</td>';
		html_record += '</tr>';


	//get user_level
	$.get('user/xhrGetUserLevelName', function(rs){
		var html;
		var option = '<option value=":user_level_id">:user_level_name</option>';
		for(var i=0; i<rs.length; i++){
			html = option.replace(':user_level_name', rs[i].user_level_name);
			html = html.replace(':user_level_id', rs[i].user_level_id);
			$('#user_level').append(html);
		}
	}, 'json');
	
	

	//Gird dataTable User
	jQuery.get('user/xhrGetListings', function(rs){
		//console.log(rs);
		var result;
		
		for (var j = 0; j < rs.length; j++) {
			result = html_record.replace(':user_id', rs[j].user_id);
			result = result.replace(':user_id', rs[j].user_id);
			result = result.replace(':user_hoten', rs[j].user_hoten);
			result = result.replace(':user_email', rs[j].user_email);
			result = result.replace(':user_level_name', rs[j].user_level_name);
			$('#listUser').append(result);
		}

		//delete User
		$('.del').on('click',function(){
			var delItem = $(this);
			var id = $(this).attr('rel');
			$.post('user/xhrDelete', {'user_id':id}, function(rs){
				delItem.parent().parent().remove();
			});
			return false;
		});

		$('#table_user').dataTable( );

	}, 'json');



	//insert User
	$('#insertUser').on('submit', function(){
		$('.loading');
		var insertItem = $('#listUser');
		var url = $(this).attr('action');
		var data = $(this).serialize();

		$.ajax({
			type: "POST",
			url: url,
			data: data,
			success: function(rs){
				if(rs == 'success'){
					insertItem.append('Thêm thành công!');
				} else {
					alert('Them that bai');
				}
			}
		})
		return false;
	});


	

});