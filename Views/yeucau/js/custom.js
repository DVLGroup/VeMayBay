function raiseMsg() {
	$(document).ready(function() {
		$("#loading").fadeIn(800).delay(800).fadeOut(800);
		$("#messageBox").delay(2400).fadeIn(200).delay(1000).fadeOut(600);
		$("#loadNearButton").fadeIn(800).delay(800).fadeOut(800);
		$("#msgNearButton").delay(2400).fadeIn(200).delay(1000).fadeOut(600);
	});
}


$(document).on('click', '#submitYC', function(e) {
	if ($("#ngayDi2").val() > $("#ngayVe1").val()) {
		$("#ngayVe1,#ngayDi2").addClass("alert-danger");
		$("#checkDateYC").delay(200).fadeIn(100).delay(2200).fadeOut(100);
		$("#submitYC").fadeOut(100).delay(2600).fadeIn(100);
		e.preventDefault(e);
	}
});

$(document).ready(function() {
	$("#submitYC").click(function(e) {
		if ($("#ngayDi2").val() > $("#ngayVe1").val()) {
			$("#ngayVe1,#ngayDi2").addClass("alert-danger");
			$("#checkDateYC").delay(200).fadeIn(100).delay(2200).fadeOut(100);
			$("#submitYC").fadeOut(100).delay(2600).fadeIn(100);
			e.preventDefault(e);
		}
	});
	$b = $("#ngayDi1").val();
	$("#ngayDi1,#ngayVe1,#ngayDi2,#ngayVe2").change(function(e) {
		if ($("#ngayVe1").val() < $("#ngayDi1").val()) {
			$("#ngayVe1").val($("#ngayDi1").val());
		}
		if ($("#ngayDi2").val() > $("#ngayVe1").val()) {
			$("#ngayVe1").val($("#ngayDi2").val());
		}
		if ($("#ngayDi2").val() < $("#ngayDi1").val()) {
			$("#ngayDi2").val($("#ngayDi1").val());
		}
		if ($("#ngayVe2").val() < $("#ngayVe1").val()) {
			$("#ngayVe2").val($("#ngayVe1").val());
		}
		if ($(this).val() < $b) {
			$(this).addClass("alert-danger");
			$("#checkDateDiVeYC").delay(100).fadeIn(100);
			$("#submitYC").fadeOut(100);
			$("#submitYC").remove();
			e.preventDefault(e);
		} else {
			$(this).removeClass("alert-danger");
			if ($("#submitYC").length != 1) {
				$("#appendYC").append('<input name="submit" id="submitYC" type="submit" value="Gửi Yêu Cầu" class="btn btn-default" Style="display: none;" />');
				$("#checkDateDiVeYC").fadeOut(100);
				$("#submitYC").delay(100).fadeIn(100);
			}
		}
	});
});
