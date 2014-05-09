$(document).ready(function() {
$("#chuyenKhoan").click(function(){
		$("#CTChuyenKhoan").show();
		$("#CTVanPhong").hide();
		$("#CTTaiNha").hide();
	});
	$("#vanPhong").click(function(){
		$("#CTChuyenKhoan").hide();
		$("#CTVanPhong").show();
		$("#CTTaiNha").hide();
	});
	$("#taiNha").click(function(){
		$("#CTChuyenKhoan").hide();
		$("#CTVanPhong").hide();
		$("#CTTaiNha").show();
	});
});