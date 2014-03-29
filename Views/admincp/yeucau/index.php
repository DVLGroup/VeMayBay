<script type="text/javascript">
	$(document).ready( function () {
    	$('#table_yeucau').dataTable( );
	} );
</script>
<?php
	if(isset($this->js)){
		echo '<script type="text/javascript" src="'. $this->js .'"></script>';
	}
?>

		<div class="container" style="margin-top: 50px">
			<table class="table table-bordered table-hover" id="table_yeucau" class="display">
			    <thead>
			        <tr class="danger">
			            <th>ID</th>
			            <th>Họ tên</th>
			            <th>Email</th>
			            <th>Số điện thoại</th>
			            <th>Điểm xuất phát</th>
			            <th>Điểm đến</th>
			            <th>Loại vé</th>
			            <th>Số lượng</th>
			            <th>Ngày đi</th>
			            <th>Ngày về</th>
			        </tr>
			    </thead>
			    <tbody id="listYeuCau">
			    	
			    </tbody>
			</table>
		</div>