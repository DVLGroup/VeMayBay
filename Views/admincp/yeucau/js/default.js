
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
        sOut += '<tr><td>Hạng vé:</td><td>:yeucau_hangbay</td></tr>';
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
			console.log(rs);
			var result;
			
			for (var j = 0; j < rs.length; j++) {
				result = html_list_yeuCau.replace(/:yeucau_id/g, rs[j].yeu_cau_id);
				result = result.replace(':yeucau_hoten', rs[j].ho_ten);
				result = result.replace(':yeucau_diemdi', rs[j].dia_diem_di);
				result = result.replace(':yeucau_diemden', rs[j].dia_diem_den);
				result = result.replace(':yeucau_soluong', rs[j].so_luong);
				result = result.replace(':yeucau_ngaydi', rs[j].ngay_di);
				result = result.replace(':yeucau_ngayve', rs[j].ngay_ve);
				$('#getList_yeuCau_all').append(result);

				sOut = sOut.replace(':yeucau_id', rs[j].yeu_cau_id);
				sOut = sOut.replace(':yeucau_hoten', rs[j].ho_ten);
				sOut = sOut.replace(':yeucau_email', rs[j].email);
				sOut = sOut.replace(':yeucau_sdt', rs[j].so_dt);
				sOut = sOut.replace(':yeucau_diemdi', rs[j].dia_diem_di);
				sOut = sOut.replace(':yeucau_diemden', rs[j].dia_diem_den);
				sOut = sOut.replace(':yeucau_soluong', rs[j].so_luong);
				sOut = sOut.replace(':yeucau_hangbay', rs[j].hang_bay);
				sOut = sOut.replace(':yeucau_ngaydi', rs[j].ngay_di);
				sOut = sOut.replace(':yeucau_ngayve', rs[j].ngay_ve);
				sOut = sOut.replace(':yeucau_guiquaemail', rs[j].gui_qua_mail == 1 ? 'Có' : 'Không');
			}


			/*
	         * Insert a 'details' column to the table
	         */
	        var nCloneTh = document.createElement( 'th' );
	        var nCloneTd = document.createElement( 'td' );
	        nCloneTd.innerHTML = '<span class="row-details row-details-close"></span>';
	         
	        $('#table_yeucau thead tr').each( function () {
	            this.insertBefore( nCloneTh, this.childNodes[0] );
	        } );
	         
	        $('#table_yeucau tbody tr').each( function () {
	            this.insertBefore(  nCloneTd.cloneNode( true ), this.childNodes[0] );
	        } );
	         
	        /*
	         * Initialize DataTables, with no sorting on the 'details' column
	         */
	        var oTable = $('#table_yeucau').dataTable( {
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

	        jQuery('#table_yeucau_wrapper .dataTables_length select').select2(); // initialize select2 dropdown
	         
	        /* Add event listener for opening and closing details
	         * Note that the indicator for showing which row is open is not controlled by DataTables,
	         * rather it is done here
	         */
	        $('#table_yeucau').on('click', ' tbody td .row-details', function () {
	            var nTr = $(this).parents('tr')[0];
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
	                oTable.fnOpen( nTr, sOut, 'details' );
	            }
	        });

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