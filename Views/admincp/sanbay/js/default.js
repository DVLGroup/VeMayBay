

	// template 
	var html_list_sanBay = '<tr>';
		html_list_sanBay += '<td>:sanBay_id</td>';
		html_list_sanBay += '<td>:sanBay_name</td>';
		html_list_sanBay += '<td>:sanBay_diaDiem</td>';
		html_list_sanBay += '<td><button class="btn btn-sm btn-default edit_sanBay" rel=":sanBay_id" name=":sanBay_name" diaDiem=":sanBay_diaDiem" data-toggle="modal" data-target="#editSanBay_Modal"><i class="glyphicon glyphicon-wrench"></i> Sửa</button></td>';
		html_list_sanBay += '<td><a class="del_sanBay" rel=":sanBay_id" href="#"><i class="glyphicon glyphicon-remove"></i> Xóa</a></td>';
		html_list_sanBay += '</tr>';

	//
	function getList_sanBay() {
		jQuery.get('sanbay/xhrGetListings', function(rs){
			//console.log(rs);
			var result;
			
			for (var j = 0; j < rs.length; j++) {
				result = html_list_sanBay.replace(/:sanBay_id/g, rs[j].san_bay_code);
				result = result.replace(/:sanBay_name/g, rs[j].name);
				result = result.replace(/:sanBay_diaDiem/g, rs[j].diadiem);
				$('#getList_sanBay_all').append(result);
			}

			//xhrdelete User
			$('.del_sanBay').on('click',function(){
				var delItem = $(this);
				var id = $(this).attr('rel');
				$.post('sanbay/xhrDelete', {'san_bay_code':id}, function(rs){
					console.log(rs);
					delItem.parent().parent().remove();
				});
				return false;
			});

			// edit button 
			$('.edit_sanBay').on('click', function(){
				//$('#edit_user_level_id option').removeAttr('selected'); // Remove choice
				var id = $(this).attr('rel');
				var sanBay_name = $(this).attr('name');
				var sanBay_diaDiem = $(this).attr('diaDiem');
				$('#edit_sanBay_id').val(id);
				$('#edit_sanBay_name').val(sanBay_name);
				$('#edit_sanBay_diaDiem').val(sanBay_diaDiem);
				// $('.edit_user_level_option').find('option[value="2"]', function(){
				// 	$(this).attr('selected','selected');
				// })
				//$('#edit_user_level_id option[value="' + level + '"]').attr('selected', 'selected');
			});

			$('#table_sanBay').dataTable( );

		}, 'json');
	}

	function refresh_list_sanBay() {
		$('#getList_sanBay_all').html('');
		getList_sanBay();
		return false;
	}

$(document).ready(function(){	
	getList_sanBay();

	$('#insert_sanBay').on('submit', function(){
		// Status
		var loading = $(this).find('.loading');
		var success = $(this).find('.success');
		var error = $(this).find('.error');

		var url = $(this).attr('action');
		var data = $(this).serialize();
		var insertItem = $('#getList_sanBay_all');

		loading.show();

		$.ajax({
			type: "POST",
			url: url,
			data: data,
			success: function(rs){
				loading.hide();
				if(rs == 'success'){
					//insertItem.append('Thêm thành công!');
					success.fadeIn().delay(2000).fadeOut();
					insertItem.html('');
					getList_sanBay();
				} else {
					error.fadeIn().delay(2000).fadeOut();
				}
			}
		});
		return false;
	});


	// xhrUpdate User
	$('#update_sanBay').on('submit', function(){
		// Status
		var loading = $(this).find('.loading');
		var success = $(this).find('.success');
		var error = $(this).find('.error');

		var url = $(this).attr('action');
		var data = $(this).serialize();
		var insertItem = $('#getList_sanBay_all');

		loading.show();

		$.ajax({
			type: "POST",
			url: url,
			data: data,
			success: function(rs){
				console.log(rs);
				loading.hide();
				if(rs == 'success'){
					success.fadeIn().delay(2000).fadeOut();
					insertItem.html('');
					getList_sanBay();
				} else {
					error.fadeIn().delay(2000).fadeOut();
				}
			}
		});
		return false;
	});

});