

	// template 
	var html_list_datVe = '<tr>';
		html_list_datVe += '<td>:datVe_stt</td>';
		html_list_datVe += '<td>:datVe_hoten</td>';
		html_list_datVe += '<td>:datVe_sdt</td>';
		html_list_datVe += '<td>:datVe_ngaydi</td>';
		html_list_datVe += '<td>:datVe_ngayve</td>';
		html_list_datVe += '<td>:datVe_diemdi</td>';
		html_list_datVe += '<td>:datVe_diemden</td>';
		html_list_datVe += '<td>:datVe_tongsove</td>';
		html_list_datVe += '<td>:datVe_tonggia đ</td>';
		html_list_datVe += '</tr>';


	// bang dat ve
	var sOut_construct = '<table style="border-bottom: 1px solid #CCC;">';
        sOut_construct += '<tr>';
        sOut_construct += '<td><strong>Id:</strong></td> <td>:datVe_id</td>';
        sOut_construct += '<td><strong>Họ tên:</strong></td><td>:datVe_hoten</td>';
        sOut_construct += '<td><strong>Thành phố:</strong></td><td>:datVe_thanhpho</td>'; 
        sOut_construct += '<td></td>';
        sOut_construct += '</tr>';
        sOut_construct += '<tr>';
        sOut_construct += '<td><strong>Email:</strong></td> <td>:datVe_email</td>';
        sOut_construct += '<td><strong>Địa chỉ:</strong></td><td>:datVe_diachi</td>';
        sOut_construct += '<td><strong>Quốc gia:</strong></td><td>:datVe_quocgia</td>'; 
        sOut_construct += '<td><strong>Thanh toán:</strong></td><td>:datVe_thanhtoan</td>';
        sOut_construct += '</tr>';
        sOut_construct += '</table>';
        sOut_construct += '</br>';
        // bang chi tiet dat ve
        sOut_construct += '<strong>Danh sách vé:</strong>';
        sOut_construct += '<table class="table">';
        sOut_construct += '<thead>';
        sOut_construct += '<tr>';
        sOut_construct += '<th>ID</th>';
        sOut_construct += '<th>Tên khách hàng</th>';
        sOut_construct += '<th>Ngày sinh</th>';
        sOut_construct += '<th>Hạng vé</th>';
        sOut_construct += '<th>Hành lý</th>';
        sOut_construct += '<th>Giờ bay</th>';
        sOut_construct += '<th>Hãng bay</th>';
        sOut_construct += '<th>Chuyến Bay</th>';

        //sOut_construct += '<th>Crypt</th>';
        sOut_construct += '</tr>';
        sOut_construct += '</thead>';
        sOut_construct += '<tbody>';
        sOut_construct += ':table_ctv_construct';
        sOut_construct += '</tbody>';
        sOut_construct += '</table>';


    var table_ctv_construct = '<tr>';
        table_ctv_construct += '<td>:ct_datve_id</td>';
        table_ctv_construct += '<td>:ct_datve_tenkhachhang</td>';
        table_ctv_construct += '<td>:ct_datve_ngaysinh</td>'; 
        table_ctv_construct += '<td>:ct_datve_hangve</td>';
        table_ctv_construct += '<td>:ct_datve_giahanhly</td>';
        table_ctv_construct += '<td>:ct_datve_giobay</td>';
        table_ctv_construct += '<td>:ct_datve_hangbay</td>';
        table_ctv_construct += '<td>:ct_datve_chuyenbay</td>';

        // table_ctv_construct += '<td>:ct_datve_crypt</td>';
        table_ctv_construct += '</tr>';

	//
	function get_ctv( dat_ve_id ){
		var table_ctv = '';

		// $.get('get_ct_dat_ve/' + dat_ve_id, function(rs) {
		// 	for (var i = 0; i < rs.length; i++) {
		// 		table_ctv += table_ctv_construct.replace(':ct_datve_id', rs[i].ct_dat_ve_id);
		// 		table_ctv = table_ctv.replace(':ct_datve_tenkhachhang', rs[i].ten_kh);
		// 		table_ctv = table_ctv.replace(':ct_datve_ngaysinh', rs[i].ngay_sinh);
		// 		table_ctv = table_ctv.replace(':ct_datve_hangve', rs[i].hang_ve);
		// 		table_ctv = table_ctv.replace(':ct_datve_giahanhly', rs[i].gia_hanh_ly);
		// 		table_ctv = table_ctv.replace(':ct_datve_giobay', rs[i].gio_bay);
		// 		table_ctv = table_ctv.replace(':ct_datve_hangbay', rs[i].hang_bay);
		// 		table_ctv = table_ctv.replace(':ct_datve_giave', rs[i].gia_bay);
		// 		// table_ctv = table_ctv.replace(':ct_datve_crypt', rs[i].crypt);
				
		// 	}	
			
		// 	return table_ctv;
		// },'json');
		// console.log(table_ctv);
		
		$.ajax({
			type: "GET",
			url: 'get_ct_dat_ve/' + dat_ve_id,
			dataType: 'json',
			success: function ( rs ) {
				for (var i = 0; i < rs.length; i++) {
					table_ctv += table_ctv_construct.replace(':ct_datve_id', rs[i].ct_dat_ve_id);
					table_ctv = table_ctv.replace(':ct_datve_tenkhachhang', rs[i].ten_kh);
					table_ctv = table_ctv.replace(':ct_datve_ngaysinh', rs[i].ngay_sinh);
					table_ctv = table_ctv.replace(':ct_datve_hangve', rs[i].hang_ve);
					table_ctv = table_ctv.replace(':ct_datve_giahanhly', rs[i].gia_hanh_ly);
					table_ctv = table_ctv.replace(':ct_datve_giobay', rs[i].gio_bay);
					table_ctv = table_ctv.replace(':ct_datve_hangbay', rs[i].hang_bay);
					table_ctv = table_ctv.replace(':ct_datve_giave', rs[i].gia_bay);
					table_ctv = table_ctv.replace(':ct_datve_chuyenbay', rs[i].chuyen_bay);
					// table_ctv = table_ctv.replace(':ct_datve_crypt', rs[i].crypt);
					
				}
				console.log(rs);
			},
			async: false
		});

		return table_ctv;
	}



	function getList_datVe() {
		jQuery.get('datve/xhrGetListings', function(rs){
			var sOut = new Array();

			for (var j = 0; j < rs.length; j++) {
				var tong_so_ve = 0;
				var result;

				result = html_list_datVe.replace(/:datVe_stt/g, j + 1);
				result = result.replace(':datVe_hoten', rs[j].ho_ten);
				result = result.replace(':datVe_sdt', rs[j].so_dt);
				result = result.replace(':datVe_ngaydi', rs[j].ngay_gio_di);
				result = result.replace(':datVe_ngayve', rs[j].ngay_gio_ve);
				result = result.replace(':datVe_diemdi', rs[j].dia_diem_di);
				result = result.replace(':datVe_diemden', rs[j].dia_diem_den);
				result = result.replace(':datVe_tongsove', rs[j].tong_so_ve);
				result = result.replace(':datVe_tonggia', rs[j].tong_gia);
				$('#getList_datVe_all').append(result);

				sOut[j+1] = sOut_construct.replace(':datVe_id', rs[j].dat_ve_id);
				sOut[j+1] = sOut[j+1].replace(':datVe_hoten', rs[j].ho_ten);
				sOut[j+1] = sOut[j+1].replace(':datVe_email', rs[j].email);
				sOut[j+1] = sOut[j+1].replace(':datVe_diachi', rs[j].dia_chi);
				sOut[j+1] = sOut[j+1].replace(':datVe_quocgia', rs[j].quoc_gia);
				sOut[j+1] = sOut[j+1].replace(':datVe_thanhpho', rs[j].thanh_pho);
				sOut[j+1] = sOut[j+1].replace(':datVe_thanhtoan', rs[j].mo_ta);
				sOut[j+1] = sOut[j+1].replace(':table_ctv_construct', get_ctv(rs[j].dat_ve_id));
			}

	        var nCloneTh = document.createElement( 'th' );
	        var nCloneTd = document.createElement( 'td' );
	        nCloneTd.innerHTML = '<span class="row-details row-details-close"></span>';
	         
	        $('#table_datve thead tr').each( function () {
	            this.insertBefore( nCloneTh, this.childNodes[0] );
	        } );
	         
	        $('#table_datve tbody tr').each( function () {
	            this.insertBefore(  nCloneTd.cloneNode( true ), this.childNodes[0] );
	        } );
	        var oTable = $('#table_datve').dataTable( {
	            "aoColumnDefs": [
	                {"bSortable": false, "aTargets": [ 0 ] }
	            ],
	            "aaSorting": [[1, 'asc']],
	             "aLengthMenu": [
	                [5, 15, 20, -1],
	                [5, 15, 20, "All"] // change per page values here
	            ],
	            // set the initial value
	            "iDisplayLength": 10,
	        });

	        jQuery('#table_datve_wrapper .dataTables_length select').select2(); 

	        $('#table_datve').on('click', ' tbody td .row-details', function () {
	            var nTr = $(this).parents('tr')[0];
	            var aData = oTable.fnGetData(nTr);
	            var ID = aData[1];

	            if ( oTable.fnIsOpen(nTr) )
	            {
	                /* This row is already open - close it */
	                $(this).addClass("row-details-close").removeClass("row-details-open");
	                oTable.fnClose( nTr );
	            }
	            else
	            {
	                /* Open this row */                
	                $(this).addClass("row-details-open").removeClass("row-details-close");
	                oTable.fnOpen( nTr, sOut[ID], 'details' );
	            }
	        });

		}, 'json');
	}

	// function refresh_list_datVe() {
	// 	$('#getList_daVe_all').html('');
	// 	getList_datVe();
	// 	return false;
	// }

$(document).ready(function(){	
	getList_datVe();
});