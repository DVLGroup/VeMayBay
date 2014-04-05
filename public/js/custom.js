$(document).on('click', '#submit', function(e) {
	if ($("#dateDi").val() > $("#dateVe").val()) {
		$("#dateDi,#dateVe").addClass("alert-danger");
		$("#checkDate").delay(200).fadeIn(100).delay(2200).fadeOut(100);
		$("#submit").fadeOut(100).delay(2600).fadeIn(100);
		e.preventDefault(e);
	}
});
$(document).ready(function() {
	$("#submit").click(function(e) {
		if ($("#dateDi").val() > $("#dateVe").val()) {
			$("#dateDi,#dateVe").addClass("alert-danger");
			$("#checkDate").delay(200).fadeIn(100).delay(2200).fadeOut(100);
			$("#submit").fadeOut(100).delay(2600).fadeIn(100);
			e.preventDefault(e);
		}
	});
	$a = $("#dateDi").val();
	$("#dateDi,#dateVe").change(function(e) {
		if ($("#dateVe").val() < $("#dateDi").val()) {
			$("#dateVe").val($("#dateDi").val());
		}
		if ($(this).val() < $a) {
			$(this).addClass("alert-danger");
			$("#checkDateDiVe").delay(100).fadeIn(100);
			$("#submit").fadeOut(100);
			$("#submit").remove();
			e.preventDefault(e);
		} else {
			$(this).removeClass("alert-danger");
			if ($("#submit").length != 1) {
				$("#append").append('<input type="submit" id="submit" value="Tìm Kiếm" class="btn btn-info" Style="display: none;"/>');
				$("#checkDateDiVe").fadeOut(100);
				$("#submit").delay(100).fadeIn(100);
			}
		}
	});
	// $("#dateVe").change(function() {
	// if ($("#dateVe").val() < $a) {
	// $("#dateVe").addClass("alert-danger");
	// $("#checkDateDiVe").delay(200).fadeIn(100).delay(2200).fadeOut(100);
	// $("#submit").fadeOut(100).delay(2600).fadeIn(100);
	// e.preventDefault(e);
	// } else {
	// $("#dateVe").removeClass("alert-danger");
	// }
	// });
});
