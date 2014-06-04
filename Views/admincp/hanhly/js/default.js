
	//Function
	//Validate
	// $("$insert_User").on('submit', function(e) {
	// 	var password = $("#user_password").val();
	// 	var confirm_password = $("#user_password_confirm").val();

	// 	if ( password != confirm_password ) {
	// 		$("#user_password").css('border-color', '#E34234');
	// 		$("#user_password_confirm").css('border-color', '#E34234');
	// 	}

	// 	e.preventDefault();
	// });

	// template 
	var html_list_hanhLy = '<tr>';
		html_list_hanhLy += '<td>:hanhLy_id</td>';
		html_list_hanhLy += '<td>:hanhLy_name</td>';
		html_list_hanhLy += '<td>:hangBay</td>';
		html_list_hanhLy += '<td>:giaBay</td>';
		html_list_hanhLy += '<td>:giaHanhLy</td>';
		html_list_hanhLy += '<td><button class="btn btn-sm btn-default edit_hanhLy" rel=":hanhLy_id" name=":hanhLy_name" hangBay=":hangBay" giaBay=":giaBay" giaHanhLy=":giaHanhLy" data-toggle="modal" data-target="#editHanhLy_Modal"><i class="glyphicon glyphicon-wrench"></i> Sửa</button> </td> ';
		html_list_hanhLy += '<td><a class="del_hanhLy" rel=":hanhLy_id" href="#"><i class="glyphicon glyphicon-remove"></i> Xóa</a></td>';
		html_list_hanhLy += '</tr>';

	var html_list_UserLevel = '<tr>';
		html_list_UserLevel += '<td>:user_level_id</td>';
		html_list_UserLevel += '<td>:user_level_name</td>';
		html_list_UserLevel += '<td><a class="edit_user_level" rel=":user_level_id" href="#"><i class="glyphicon glyphicon-wrench"></i> Sửa</a></td>';
		html_list_UserLevel += '<td><a class="del_user_level" rel=":user_level_id" href="#"><i class="glyphicon glyphicon-remove"></i> Xóa</a></td>';
		html_list_UserLevel += '</tr>';

	//
	function getList_hanhLy() {
		jQuery.get('hanhly/xhrGetListings', function(rs){
			//console.log(rs);
			var result;
			
			for (var j = 0; j < rs.length; j++) {
				result = html_list_hanhLy.replace(/:hanhLy_id/g, rs[j].hanh_ly_id);
				result = result.replace(/:hanhLy_name/g, rs[j].hanh_ly_name);
				result = result.replace(/:hangBay/g, rs[j].hang_bay);
				result = result.replace(/:giaBay/g, rs[j].gia_bay);
				result = result.replace(/:giaHanhLy/g, rs[j].gia_hanh_ly);
				$('#getList_hanhLy_all').append(result);
			}

			//xhrdelete User
			$('.del_hanhLy').on('click',function(){
				var delItem = $(this);
				var id = $(this).attr('rel');
				$.post('hanhly/xhrDelete', {'hanh_ly_id':id}, function(rs){
					//console.log(rs);
					delItem.parent().parent().remove();
				});
				return false;
			});

			// edit button 
			$('.edit_hanhLy').on('click', function(){
				//$('#edit_user_level_id option').removeAttr('selected'); // Remove choice
				var id = $(this).attr('rel');
				var hanhLy_name = $(this).attr('name');
				var hangBay = $(this).attr('hangbay');
				var giaBay = $(this).attr('giaBay');
				var giaHanhLy = $(this).attr('giaHanhLy');
				$('#edit_hanhLy_id').val(id);
				$('#edit_hanhLy_name').val(hanhLy_name);
				$('#edit_hangBay').val(hangBay);
				$('#edit_giaBay').val(giaBay);
				$('#edit_giaHanhLy').val(giaHanhLy);
				// $('.edit_user_level_option').find('option[value="2"]', function(){
				// 	$(this).attr('selected','selected');
				// })
				//$('#edit_user_level_id option[value="' + level + '"]').attr('selected', 'selected');
			});

			$('#table_hanhLy').dataTable( );
			$('#table_hanhLy_wrapper .dataTables_length select').select2(); // initialize select2 dropdown
		}, 'json');
	}

	function refresh_list_hanhLy() {
		$('#getList_hanhLy_all').html('');
		getList_hanhLy();
		return false;
	}

$(document).ready(function(){	
	getList_hanhLy();

	$('#insert_hanhLy').on('submit', function(){
		// Status
		var loading = $(this).find('.loading');
		var success = $(this).find('.success');
		var error = $(this).find('.error');

		var url = $(this).attr('action');
		var data = $(this).serialize();
		var insertItem = $('#getList_hanhLy_all');

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
					$('#getList_hanhLy_all').html('');
					getList_hanhLy();
				} else {
					error.fadeIn().delay(2000).fadeOut();
				}
			}
		});
		return false;
	});


	// xhrUpdate User
	$('#update_hanhLy').on('submit', function(){
		// Status
		var loading = $(this).find('.loading');
		var success = $(this).find('.success');
		var error = $(this).find('.error');

		var url = $(this).attr('action');
		var data = $(this).serialize();
		var insertItem = $('#getList_hanhLy_all');

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
				} else {
					error.fadeIn().delay(2000).fadeOut();
				}
			}
		});
		return false;
	});

});