$(document).ready(function(){


	$.get('user/xhrGetUserLevelName', function(rs){
		var html;
		var option = '<option value=":user_level_id">:user_level_name</option>';
		for(var i=0; i<rs.length; i++){
			html = option.replace(':user_level_name', rs[i].user_level_name);
			html = html.replace(':user_level_id', rs[i].user_level_id);
			$('#user_level').append(html);
		}
	}, 'json');
	

	$('#insertUser').on('submit', function(){
		var url = $(this).attr('action');
		var data = $(this).serialize();
		alert(data);
		$.post(url, data, function(rs, status) {
			$('loading').css('display','block');
			if(status == 'success'){
				alert('Thêm thành công!');
			} else{
				alert('That bai');
			}
		}, 'json');
		return false;
	});


	jQuery.get('user/xhrGetListings', function(rs){
		console.log(rs);
		var result;
		var html_record = '<tr>';
		html_record += '<td>:user_id</td>';
		html_record += '<td>:user_hoten</td>';
		html_record += '<td>:user_email</td>';
		html_record += '<td>:user_level_name</td>';
		html_record += '<td>';
		html_record += '<a href=""><i class="glyphicon glyphicon-wrench"></i> Sửa</a> - ';
		html_record += '<a href=""><i class="glyphicon glyphicon-remove"></i> Xóa</a>';
		html_record += '</td>';
		html_record += '</tr>';
		
		for (var j = 0; j < rs.length; j++) {
			result = html_record.replace(':user_id', rs[j].user_id);
			result = result.replace(':user_hoten', rs[j].user_hoten);
			result = result.replace(':user_email', rs[j].user_email);
			result = result.replace(':user_level_name', rs[j].user_level_name);
			$('#listUser').append(result);
		}

		$('#table_user').dataTable( );
	}, 'json');

});