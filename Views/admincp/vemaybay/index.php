<h1 align="center">Danh sách vé máy bay từ server</h1>

<div class="container" style="margin-top: 50px">

	<!-- Bảng dữ liệu -->
	<div>
		<form id="veMayBay_form" action="" method="GET" >
			<div>
				<span class="pull-left" style="font-size: 20px;"><i class="glyphicon glyphicon-list"></i> Danh sách Vé</span>
				<!-- <span class="pull-right"><a href="#" onclick="refresh_list_veMayBay();"><i class="glyphicon glyphicon-refresh"></i> Refresh danh sách Vé</a></span> -->
			</div>
			<p class="clearfix"></p>
			<div class="row">
				<div class="col-md-2">
					<select name="RoundTrip" class="form-control input-small pull-left" autofocus>
						<option value="0">Một chiều</option>
						<option value="1">Hai chiều</option>
					</select>
				</div>
				<div class="col-md-4">
					<div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="dd/mm/yyyy">
						<input class="form-control" name="_time1" type="text" placeHolder="Từ ngày" required>
						<span class="input-group-addon">
							 <i class="glyphicon glyphicon-arrow-right"></i>
						</span>
						<input class="form-control" name="_time2" type="text" placeHolder="Đến ngày" required>
					</div>
				</div>
				<div class="col-md-3">
					<select name="Origin1" class="getList_sanBay_option form-control input-medium pull-left" autofocus>
						<option value="0" >Chọn điểm đi</option>
					</select>
					<select name="Destination1" class="getList_sanBay_option form-control input-medium pull-left" autofocus>
						<option value="0" >Chọn điểm đến</option>
					</select>
				</div>
				<div class="col-md-2">
					<input type="number" name="traveler"  class="form-control input-small pull-left" placeHolder="Người lớn">
					<input type="number" name="baby"  class="form-control input-small pull-left" placeHolder="Trẻ em">
					<input type="number" name="newborn"  class="form-control input-small pull-left" placeHolder="Trẻ sơ sinh">
				</div>
				<div class="col-md-1">
					<button type="submit" id="veMayBay_form_submit" class="btn btn-primary pull-right" ><i class="glyphicon glyphicon-list"></i> Liệt kê</button>
				</div>
			</div>
			<p></p>
			<div class="row">
				
			</div>
		</form>
		<hr>
		<table class="table table-bordered table-hover" id="table_veMayBay">
		    <thead>
		        <tr>
		            <th>Tên hãng</th>
		            <th>Điểm khởi hành</th>
		            <th>Điểm đến</th>
		            <th>Giờ bay</th>
		            <th>Giờ cập bến</th>
		            <th>Hạng vé</th>
		            <th>Mã bay</th>
		            <th>Trạng thái</th>
		            <th>Giá vé</th>
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