
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
	var html_list_User = '<tr>';
		html_list_User += '<td>:user_id</td>';
		html_list_User += '<td>:user_hoten</td>';
		html_list_User += '<td class="user_email">:user_email</td>';
		html_list_User += '<td>:user_level_name</td>';
		html_list_User += '<td>';
		html_list_User += '<button class="edit" rel=":user_id" email=":user_email" level=":user_level_id" data-toggle="modal" data-target="#editUser_Modal"><i class="glyphicon glyphicon-wrench"></i> Sửa</button> - ';
		html_list_User += '<a class="del_user" rel=":user_id" href="#"><i class="glyphicon glyphicon-remove"></i> Xóa</a>';
		html_list_User += '</td>';
		html_list_User += '</tr>';

	var html_list_UserLevel = '<tr>';
		html_list_UserLevel += '<td>:user_level_id</td>';
		html_list_UserLevel += '<td>:user_level_name</td>';
		html_list_UserLevel += '<td><a class="edit_user_level" rel=":user_level_id" href="#"><i class="glyphicon glyphicon-wrench"></i> Sửa</a></td>';
		html_list_UserLevel += '<td><a class="del_user_level" rel=":user_level_id" href="#"><i class="glyphicon glyphicon-remove"></i> Xóa</a></td>';
		html_list_UserLevel += '</tr>';

	var option = '<option class="edit_user_level_option" value=":user_level_id">:user_level_name</option>';

	// Get list User Level
	function getList_userLevel () {
		var html_1, html_2;
		$.get('user_level/xhrGetListings', function (rs){
			for(var i=0; i<rs.length; i++) {
				html_1 = option.replace(':user_level_name', rs[i].user_level_name);
				html_1 = html_1.replace(':user_level_id', rs[i].user_level_id);
				$('#user_level').append(html_1);
				$('#edit_user_level_id').append(html_1);

				//Gird dataTable User Level
				html_2 = html_list_UserLevel.replace(':user_level_id', rs[i].user_level_id);
				html_2 = html_2.replace(/:user_level_id/g, rs[i].user_level_id);
				html_2 = html_2.replace(':user_level_name', rs[i].user_level_name);
				$('#getList_UserLevel_all').append(html_2);
			}
			//// xhrdelete User Level
			$('.del_user_level').on('click',function(){
				var delItem = $(this);
				var id = $(this).attr('rel');
				$.post('user_level/xhrDelete', {'user_level_id':id}, function(rs){
					console.log(rs);
					delItem.parent().parent().remove();
				});
				return false;
			});
		}, 'json');
	}
	
	//
	function refresh_list_userLevel(){
		$('#user_level, #edit_user_level_id, #getList_UserLevel_all').html('');
		getList_userLevel ();
	}


	//
	function getList_user() {
		jQuery.get('user/xhrGetListings', function(rs){
			//console.log(rs);
			var result;
			
			for (var j = 0; j < rs.length; j++) {
				result = html_list_User.replace(/:user_id/g, rs[j].user_id);
				result = result.replace(':user_hoten', rs[j].user_hoten);
				result = result.replace(/:user_email/g, rs[j].user_email);
				result = result.replace(':user_level_id', rs[j].user_level_id);
				result = result.replace(':user_level_name', rs[j].user_level_name);
				$('#getList_User_all').append(result);
			}

			//xhrdelete User
			$('.del_user').on('click',function(){
				var delItem = $(this);
				var id = $(this).attr('rel');
				$.post('user/xhrDelete', {'user_id':id}, function(rs){
					console.log(rs);
					delItem.parent().parent().remove();
				});
				return false;
			});

			// editUser button 
			$('.edit').on('click', function(){
				$('#edit_user_level_id option').removeAttr('selected'); // Remove choice
				var id = $(this).attr('rel');
				var email = $(this).attr('email');
				var level = $(this).attr('level');
				$('#edit_user_id').val(id);
				$('#edit_user_email').val(email);
				// $('.edit_user_level_option').find('option[value="2"]', function(){
				// 	$(this).attr('selected','selected');
				// })
				$('#edit_user_level_id option[value="' + level + '"]').attr('selected', 'selected');
			});

			$('#table_user').dataTable( );

		}, 'json');
	}

	function refresh_list_user() {
		$('#getList_User_all').html('');
		getList_user();
		return false;
	}

$(document).ready(function(){	
	getList_userLevel();
	getList_user ();
	//Gird dataTable User
	

	// xhrinsert User Level
	$('#insert_userLevel').on('submit', function(){
		// Status
		var loading = $(this).find('.loading');
		var success = $(this).find('.success');
		var error = $(this).find('.error');

		var url = $(this).attr('action');
		var data = $(this).serialize();
		var insertItem = $('#getList_UserLevel_all');

		loading.show();

		$.ajax({
			type: 		"POST",
			url: 		url,
			data: 		data,
			success: function(rs){
				console.log(rs);
				loading.hide();
				if(rs == 'success'){
					///
					$('#user_level, #edit_user_level_id, #getList_UserLevel_all').html('');
					getList_userLevel ();
					success.fadeIn().delay(2000).fadeOut();
				} else {
					error.fadeIn().delay(2000).fadeOut();
				}
			}
		});
		return false;
	});

	// xhrinsert User
	$('#insert_User').on('submit', function(){
		// Status
		var loading = $(this).find('.loading');
		var success = $(this).find('.success');
		var error = $(this).find('.error');

		var url = $(this).attr('action');
		var data = $(this).serialize();
		var insertItem = $('#getList_User_all');

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
				} else {
					error.fadeIn().delay(2000).fadeOut();
				}
			}
		});
		return false;
	});


	// xhrUpdate User
	$('#update_User').on('submit', function(){
		// Status
		var loading = $(this).find('.loading');
		var success = $(this).find('.success');
		var error = $(this).find('.error');

		var url = $(this).attr('action');
		var data = $(this).serialize();
		var insertItem = $('#getList_User_all');

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