$(function(){
	jQuery.get('yeucau/xhrGetListings', function(rs){
		console.log(rs);
		var result;
		var html_record = '<tr>';
		html_record += '<td>:yeucau_id</td>';
		html_record += '<td>:yeucau_hoten</td>';
		html_record += '<td>:yeucau_email</td>';
		html_record += '<td>:yeucau_sdt</td>';
		html_record += '<td>:yeucau_diemdi</td>';
		html_record += '<td>:yeucau_diemden</td>';
		html_record += '<td>:yeucau_loaive</td>';
		html_record += '<td>:yeucau_soluong</td>';
		html_record += '<td>:yeucau_ngaydi</td>';
		html_record += '<td>:yeucau_ngayve</td>';
		html_record += '</tr>';
		
		for (var j = 0; j < rs.length; j++) {
			result = html_record.replace(':yeucau_id', rs[j].yeu_cau_id);
			result = result.replace(':yeucau_hoten', rs[j].ho_ten);
			result = result.replace(':yeucau_email', rs[j].email);
			result = result.replace(':yeucau_sdt', rs[j].so_dt);
			result = result.replace(':yeucau_diemdi', rs[j].dia_diem_di);
			result = result.replace(':yeucau_diemden', rs[j].dia_diem_den);
			result = result.replace(':yeucau_loaive', rs[j].loai_ve);
			result = result.replace(':yeucau_soluong', rs[j].so_luong);
			result = result.replace(':yeucau_ngaydi', rs[j].ngay_di);
			result = result.replace(':yeucau_ngayve', rs[j].ngay_ve);
			$('#listYeuCau').append(result);
		}

		$('#table_yeucau').dataTable( );
	}, 'json');
	

	
	


	// $.ajax({
	// 	type: 'GET',
	// 	url: 'yeucau',
	// 	dataType: 'json',
	// 	success: function(rs){
	// 		console.log(rs);
	// 		for(var i=0; i < 10; i++){
	// 			$('#listYeuCau').append('<tr>');
	// 			for(var j=0; j < rs.length; j++){
	// 				$('#listYeuCau').append('<td>abc</td>');
	// 			}
	// 			$('#listYeuCau').append('</tr>');
	// 		}
	// 	}
	// });
});