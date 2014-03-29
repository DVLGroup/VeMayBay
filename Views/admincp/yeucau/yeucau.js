$(function(){
	
	$.get('admincp/yeucau', function(rs){
		alert(1);
		console.log(rs);
		for(var i=0; i < 10; i++){
			$('#listYeuCau').append('<tr>');
			for(var j=0; j < rs.length; j++){
				$('#listYeuCau').append('<td>abc</td>');
			}
			$('#listYeuCau').append('</tr>');
		}
	}, 'json');
});