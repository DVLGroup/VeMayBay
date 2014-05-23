

	// template 
	var html_list_sanBay = '<tr>';
		html_list_sanBay += '<td>:sanBay_id</td>';
		html_list_sanBay += '<td>:sanBay_name</td>';
		html_list_sanBay += '<td>:sanBay_diaDiem</td>';
		html_list_sanBay += '<td>';
		html_list_sanBay += '<button class="edit_sanBay" rel=":sanBay_id" name=":sanBay_name" diaDiem=":sanBay_diaDiem" data-toggle="modal" data-target="#editSanBay_Modal"><i class="glyphicon glyphicon-wrench"></i> Sửa</button> - ';
		html_list_sanBay += '<a class="del_sanBay" rel=":sanBay_id" href="#"><i class="glyphicon glyphicon-remove"></i> Xóa</a>';
		html_list_sanBay += '</td>';
		html_list_sanBay += '</tr>';

	//
	function getList_veMayBay() {
		jQuery.get('vemaybay/xhrGetListings', function(rs){
			console.log(rs);
			var result;
			
			for (var j = 0; j < rs.length; j++) {
				result = html_list_sanBay.replace(/:sanBay_id/g, rs[j].san_bay_code);
				result = result.replace(/:sanBay_name/g, rs[j].name);
				result = result.replace(/:sanBay_diaDiem/g, rs[j].diadiem);
				$('#getList_veMayBay_all').append(result);
			}

			$('#table_veMayBay').dataTable( );

		}, 'json');
	}

	function refresh_list_sanBay() {
		$('#getList_veMayBay_all').html('');
		getList_veMayBay();
		return false;
	}

$(document).ready(function(){	
	getList_veMayBay();
});