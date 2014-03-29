

$(document).ready(function(){
	alert(1);
	$('.admin-login-form').on('submit', function(){
		var url = $(this).attr('action');
		var data = $(this).serialize();
		alert(1);
		$.post(url, data , function(result, status){
			alert(data);
		});

		return false;
	});
	
});