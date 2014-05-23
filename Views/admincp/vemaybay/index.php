<h1 align="center">Danh sách vé máy bay từ server</h1>

<div class="container" style="margin-top: 50px">

	<!-- Bảng dữ liệu -->
	<div>
		<form action="" method="GET" >
			<div class="row">
				<span class="col-md-2" style="font-size: 20px;"><i class="glyphicon glyphicon-list"></i> Danh sách Vé</span>
				<div class="col-md-2">
					<select class="form-control" autofocus>
						<option>Tất cả các hãng</option>
					</select>
				</div>
				<div class="col-md-4">
					<div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
						<input class="form-control" name="from" type="text" placeHolder="Từ ngày" required>
						<span class="input-group-addon">
							 <i class="glyphicon glyphicon-arrow-right"></i>
						</span>
						<input class="form-control" name="to" type="text" placeHolder="Đến ngày" required>
					</div>
				</div>
				<div class="col-md-4">
					<button type="submit" id="" class="btn btn-primary"><i class="glyphicon glyphicon-list"></i> Liệt kê</button>
					<span class="pull-right"><a href="#" onclick="refresh_list_veMayBay();"><i class="glyphicon glyphicon-refresh"></i> Refresh danh sách Vé</a></span>

				</div>
				
			</div>

		</form>
		<hr>
		<table class="table table-bordered table-hover" id="table_veMayBay">
		    <thead>
		        <tr>
		            <th>Tên hãng</th>
		            <th>Khởi hành</th>
		            <th>Điểm khởi hành</th>
		            <th></th>
		            <th>Điểm đến</th>
		            <th></th>
		            <th>Mã bay</th>
		            <th>Giá vé</th>
		            <th></th>
		        </tr>
		    </thead>
		    <tbody id="getList_veMayBay_all">
		    	
		    </tbody>
		</table>
	</div><!--// Bảng dữ liệu -->

</div>
<script>
        jQuery(document).ready(function() {       
           // initiate layout and plugins
           App.init();
           ComponentsPickers.init();
        });   
    </script>