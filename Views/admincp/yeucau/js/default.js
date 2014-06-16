
	// template 
	var html_list_yeuCau = '<tr>';
		html_list_yeuCau += '<td>:yeucau_id</td>';
		html_list_yeuCau += '<td>:yeucau_hoten</td>';
		html_list_yeuCau += '<td>:yeucau_diemdi</td>';
		html_list_yeuCau += '<td>:yeucau_diemden</td>';
		html_list_yeuCau += '<td>:yeucau_soluong</td>';
		html_list_yeuCau += '<td>:yeucau_ngaydi</td>';
		html_list_yeuCau += '<td>:yeucau_ngayve</td>';
		html_list_yeuCau += '</tr>';

	// bang chi tiet
	var sOut = '<table class="pull-left">';
        sOut += '<tr><td>Id:</td><td>:yeucau_id</td></tr>';
        sOut += '<tr><td>Họ tên:</td><td>:yeucau_hoten</td></tr>';
        sOut += '<tr><td>Email:</td><td>:yeucau_email</td></tr>';
        sOut += '<tr><td>Số điện thoại:</td><td>:yeucau_sdt</td></tr>';
        sOut += '<tr><td>Số vé:</td><td>:yeucau_soluong</td></tr>';
        sOut += '<tr><td>Hãng bay:</td><td>:yeucau_hangbay</td></tr>';
        sOut += '</table>';
        sOut += '<table class="pull-left">';
        sOut += '<tr><td>Điểm đi:</td><td>:yeucau_diemdi</td></tr>';
        sOut += '<tr><td>Điểm đến:</td><td>:yeucau_diemden</td></tr>';
        sOut += '<tr><td>Ngày đi:</td><td>:yeucau_ngaydi</td></tr>';
        sOut += '<tr><td>Ngày về:</td><td>:yeucau_ngayve</td></tr>';
        sOut += '<tr><td>Gửi qua email:</td><td>:yeucau_guiquaemail</td></tr>';
        sOut += '</table>';

	//


	function getList_yeuCau() {
		jQuery.get('yeucau/xhrGetListings', function(rs){
			
			var result;
			var sOut_2 = new Array();
			for (var i = 0; i < rs.length; i++) {
				result = html_list_yeuCau.replace(/:yeucau_id/g, rs[i].yeu_cau_id);
				result = result.replace(':yeucau_hoten', rs[i].ho_ten);
				result = result.replace(':yeucau_diemdi', rs[i].dia_diem_di);
				result = result.replace(':yeucau_diemden', rs[i].dia_diem_den);
				result = result.replace(':yeucau_soluong', rs[i].so_luong);
				result = result.replace(':yeucau_ngaydi', rs[i].ngay_di);
				result = result.replace(':yeucau_ngayve', rs[i].ngay_ve);
				$('#getList_yeuCau_all').append(result);

				sOut_2[i+1] = sOut.replace(':yeucau_id', rs[i].yeu_cau_id);
				sOut_2[i+1] = sOut_2[i+1].replace(':yeucau_hoten', rs[i].ho_ten);
				sOut_2[i+1] = sOut_2[i+1].replace(':yeucau_email', rs[i].email);
				sOut_2[i+1] = sOut_2[i+1].replace(':yeucau_sdt', rs[i].so_dt);
				sOut_2[i+1] = sOut_2[i+1].replace(':yeucau_diemdi', rs[i].dia_diem_di);
				sOut_2[i+1] = sOut_2[i+1].replace(':yeucau_diemden', rs[i].dia_diem_den);
				sOut_2[i+1] = sOut_2[i+1].replace(':yeucau_soluong', rs[i].so_luong);
				sOut_2[i+1] = sOut_2[i+1].replace(':yeucau_hangbay', rs[i].hang_bay);
				sOut_2[i+1] = sOut_2[i+1].replace(':yeucau_ngaydi', rs[i].ngay_di);
				sOut_2[i+1] = sOut_2[i+1].replace(':yeucau_ngayve', rs[i].ngay_ve);
				sOut_2[i+1] = sOut_2[i+1].replace(':yeucau_guiquaemail', rs[i].gui_qua_mail == 1 ? 'Có' : 'Không');
			}	

	        var nCloneTh = document.createElement( 'th' );
	        var nCloneTd = document.createElement( 'td' );
	        nCloneTd.innerHTML = '<span class="row-details row-details-close"></span>';
	         
	        $('#table_yeucau thead tr').each( function () {
	            this.insertBefore( nCloneTh, this.childNodes[0] );
	        } );
	         
	        $('#table_yeucau tbody tr').each( function () {
	            this.insertBefore(  nCloneTd.cloneNode( true ), this.childNodes[0] );
	        } );
	        
	        $('#table_yeucau').on('click', ' tbody td .row-details', function () {
	            var nTr = $(this).parents('tr')[0];
	            var aData = oTable.fnGetData( nTr );
				var ID = aData[1];
				// console.log(ID);
	            if ( oTable.fnIsOpen(nTr) )
	            {
	                $(this).addClass("row-details-close").removeClass("row-details-open");
	                oTable.fnClose( nTr );
	            }
	            else
	            {          
	                $(this).addClass("row-details-open").removeClass("row-details-close");
	                oTable.fnOpen( nTr, sOut_2[ID], 'details' );
	            }
	        });

	        var oTable = $('#table_yeucau').dataTable();

		}, 'json');
	}

	function refresh_list_yeuCau() {
		$('#getList_yeuCau_all').html('');
		getList_yeuCau();
		return false;
	}

$(document).ready(function(){	
	getList_yeuCau();
});