$(document).ready(function() {
	nguoiLon = $("#nguoiLon").val();
	treEm = $("#treEm").val();
	soSinh = $("#soSinh").val();
	loaiVe = $("#loaiVe").val();
	$("input[name='chooseGo']:radio").click(function() {
		//alert($(this).val());
		data = $(this).attr("value");
		arr = data.split('|');
		//alert(arr[3]);
		thue = arr[3]*10/100;
		tongLon = nguoiLon * (parseInt(arr[3]) + parseInt(thue));
		tongTre = treEm * (Math.round((arr[3] *75/100)/1000)*1000 + thue);
		tongSoSinh = soSinh * (Math.round((arr[3] *10/100)/1000)*1000 + thue);
		tongThue = nguoiLon * thue + treEm * thue + soSinh * thue;
		tongCong = tongLon + tongTre + tongSoSinh;
		$(".addGo").remove();
		$(this).parent().parent().after("<tr class='addGo alert-info'>" + 
		"<td><strong>Hành khách<hr/><p>Người lớn</p><p>Trẻ em</p><p>Sơ sinh</p><p class='text-danger'>Tổng cộng</p></strong></td>" + 
		"<td><strong>Số lượng<hr/></strong><p>" + nguoiLon + "</p><p>" + treEm + 
		"</p><p>" + soSinh + "</p></td>" + "<td><strong>Giá mỗi vé<hr/></strong><p>" + arr[3] + "</p><p>" + Math.round((arr[3] *75/100)/1000)*1000 + "</p><p>"+ Math.round((arr[3] *10/100)/1000)*1000 +"</p></td>" + 
		"<td colspan=2><strong>Thuế & phí/vé<hr/></strong><p>" + thue + "</p><p>" + thue + 
		"</p><p>" + thue + "</p></td>" + "<td><strong>Tổng giá<hr/></strong><p>" + tongLon + "</p><p>" + tongTre + 
		"</p><p>" + tongSoSinh + "</p><p class='text-danger'><strong>" + tongCong + "</strong></p></td>" + "<td>&nbsp</td>" + "</tr>");
		$("#_aName").val(arr[0]);
		$("#_timeGo1").val(arr[1]);
		$("#_timeGo2").val(arr[2]);
		$("#_cost1").val(arr[3]);
		$("#_hangVe1").val(arr[4]);
		$("#_codeFlight1").val(arr[5]);
		$("#_crypt1").val(arr[6]);
		$("#giaVe1").text(tongCong);
		$("#tong1").text(tongCong);
		$("#thuePhi1").text(tongThue);
		if ($("#tong2").length == 0) {
			$("#tongCong").text(tongCong);
			$("#total").val(tongCong);
		} else {
			$("#tongCong").text(tongCong + parseInt($("#tong2").text()));
			$("#total").val(tongCong + parseInt($("#tong2").text()));
		}
	});
	$("input[name='chooseBack']:radio").click(function() {
		//alert($(this).val());
		data = $(this).attr("value");
		arr = data.split('|');
		//alert(arr[3]);
		thue = arr[3]*10/100;
		tongLon = nguoiLon * (parseInt(arr[3]) + parseInt(thue));
		tongTre = treEm * (Math.round((arr[3] *75/100)/1000)*1000 + thue);
		tongSoSinh = soSinh * (Math.round((arr[3] *10/100)/1000)*1000 + thue);
		tongThue = nguoiLon * thue + treEm * thue + soSinh * thue;
		tongCong = tongLon + tongTre + tongSoSinh;
		$(".addBack").remove();
		$(this).parent().parent().after("<tr class='addBack alert-info'>" + 
		"<td><strong>Hành khách<hr/><p>Người lớn</p><p>Trẻ em</p><p>Sơ sinh</p><p class='text-danger'>Tổng cộng</p></strong></td>" + 
		"<td><strong>Số lượng<hr/></strong><p>" + nguoiLon + "</p><p>" + treEm + 
		"</p><p>" + soSinh + "</p></td>" + "<td><strong>Giá mỗi vé<hr/></strong><p>" + arr[3] + 
		"</p><p>" + Math.round((arr[3] *75/100)/1000)*1000 + "</p><p>" + Math.round((arr[3] *10/100)/1000)*1000 + 
		"</p></td>" + "<td colspan=2><strong>Thuế & phí/vé<hr/></strong><p>" + thue + "</p><p>" + thue + 
		"</p><p>" + thue + "</p></td>" + 
		"<td><strong>Tổng giá<hr/></strong><p>" + tongLon + "</p><p>" + tongTre + 
		"</p><p>" + tongSoSinh + "</p><p class='text-danger'><strong>" + tongCong + 
		"</strong></p></td>" + "<td>&nbsp</td>" + "</tr>");
		$("#_bName").val(arr[0]);
		$("#_timeBack1").val(arr[1]);
		$("#_timeBack2").val(arr[2]);
		$("#_cost2").val(arr[3]);
		$("#_hangVe2").val(arr[4]);
		$("#_codeFlight2").val(arr[5]);
		$("#_crypt2").val(arr[6]);
		$("#giaVe2").text(tongCong);
		$("#tong2").text(tongCong);
		$("#thuePhi2").text(tongThue);
		$("#tongCong").text(tongCong + parseInt($("#tong1").text()));
		$("#total").val(tongCong + parseInt($("#tong1").text()));
	});
	$("#submitCart1").click(function(e) {
		var submitOK = 0;
		if (loaiVe == 1) {
			if ($("input[name='chooseGo']:checked").val() && $("input[name='chooseBack']:checked").val()) {
				submitOK = 1;
				$("#cart").submit();
			} else
				submitOK = 0;
		} else {
			if ($("input[name='chooseGo']:checked").val()) {
				submitOK = 1;
				$("#cart").submit();
			} else
				submitOK = 0;
		}
		if (submitOK == 0) {
			e.preventDefault();
			alert('Xin quý khách chọn chuyến bay trước khi tiếp tục');
		}

	});
	$("#submitCart2").click(function(e) {
		var submitOK = 0;
		if (loaiVe == 1) {
			if ($("input[name='chooseGo']:checked").val() && $("input[name='chooseBack']:checked").val()) {
				submitOK = 1;
				$("#cart").submit();
			} else
				submitOK = 0;
		} else {
			if ($("input[name='chooseGo']:checked").val()) {
				submitOK = 1;
				$("#cart").submit();
			} else
				submitOK = 0;
		}
		if (submitOK == 0) {
			e.preventDefault();
			alert('Xin quý khách chọn chuyến bay trước khi tiếp tục');
		}
	});
});
