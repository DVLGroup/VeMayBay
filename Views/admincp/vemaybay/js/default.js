

	// template 
	var html_list_veMayBay = '<tr>';
		html_list_veMayBay += '<td>:veMayBay_hangbay</td>';
		html_list_veMayBay += '<td>:veMayBay_diemdi</td>';
		html_list_veMayBay += '<td>:veMayBay_diemden</td>';
		html_list_veMayBay += '<td>:veMayBay_giobay</td>';
		html_list_veMayBay += '<td>:veMayBay_gioden</td>';
		html_list_veMayBay += '<td>:veMayBay_hangve</td>';
		html_list_veMayBay += '<td>:veMayBay_mabay</td>';
		html_list_veMayBay += '<td>:veMayBay_trangthai</td>';
		html_list_veMayBay += '<td>:veMayBay_giave</td>';
		html_list_veMayBay += '</tr>';

	var option_sanBay = '<option value=":sanBay_id">:sanBay_diaDiem</option>';

	//
	function getList_sanBay_option() {
		$.get('sanbay/xhrGetListings', function(rs) {
			for (var j = 0; j < rs.length; j++) {
				result = option_sanBay.replace(/:sanBay_id/g, rs[j].san_bay_code);
				result = result.replace(/:sanBay_diaDiem/g, rs[j].diadiem);
				$('.getList_sanBay_option').append(result);
			}
		}, 'json');
	}



$(document).ready(function(){	
	getList_sanBay_option();

	$('#veMayBay_form').on('submit', function() {
		$("#veMayBay_form_submit").attr('disabled','disabled');
		var data = 'url=http://vietjetair-nduc1888.rhcloud.com/ajax_VNairlines.php&' + $('#veMayBay_form').serialize();
		// var data = 'url=http://vietjetair-nduc1888.rhcloud.com/ajax_VNairlines.php&RoundTrip=0&_time1=06/14/2014&_time2=06/14/2014&Origin1=SGN&Destination1=HAN&traveler=1&baby=0&newborn=0';
		$('#getList_veMayBay_all').html('');
		
		$.ajax({
			url : "http://localhost/VeMayBay/chonchuyenbay/proxy",
			data : data,
			type : "POST",
			success : function(data, textStatus, jqXHR) {
				console.log(data);


				for(var i=0; i<data.length; i++) {
					var result;
					result = html_list_veMayBay.replace(':veMayBay_hangbay', data[i].name);
					result = result.replace(':veMayBay_diemdi', data[i].Origin);
					result = result.replace(':veMayBay_diemden', data[i].Destination);
					result = result.replace(':veMayBay_giobay', data[i].time1);
					result = result.replace(':veMayBay_gioden', data[i].time2);
					result = result.replace(':veMayBay_hangve', data[i].type_journey);
					result = result.replace(':veMayBay_mabay', data[i].codes_flight);
					result = result.replace(':veMayBay_trangthai', data[i].trangthai);
					result = result.replace(':veMayBay_giave', data[i].cost);
					$('#getList_veMayBay_all').append(result);
				}
				$('#table_veMayBay').dataTable();
				$("#veMayBay_form_submit").removeAttr('disabled');
			},
			error : function(jqXHR, textStatus, errorThrown) {
				console.log('Error ' + jqXHR);
				$("#veMayBay_form_submit").removeAttr('disabled');
			},
			dataType: 'json'
		});
		
		
		
		return false;
	});
});