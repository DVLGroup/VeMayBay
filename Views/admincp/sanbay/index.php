

<h1 align="center">Quản lý Sân bay</h1>

<div class="container" style="margin-top: 50px">
	<!-- Thêm -->
	<div>
		<h4>
			<a class="abc" data-toggle="collapse" href="#addUser">
				<i class="glyphicon glyphicon-plus"></i> Thêm Sân bay
			</a>
		</h4>
		
		<div id="addUser" class="panel-collapse collapse" style="width: 400px; margin: 10px auto;">
			<form id="insert_sanBay" action="sanbay/xhrInsert" method="POST">
				<div class="row">
					<div align="center" style="height:30px;">
						<h4 class="status success text-success">Success!</h4>
						<h4 class="status error text-danger">Error</h4>
						<h4 class="status loading text-primary">...Loading...</h4>
					</div>
					
					<div class="col-md-12">
						<div class="form-group" >
							<label for="san_bay_code">Mã sân bay: </label>
							<input id="san_bay_code" type="text" class="form-control" name="san_bay_code" placeHolder="Nhập tên mã sân bay" pattern=".{3,}" required />
						</div>
						<div class="form-group" >
							<label for="san_bay_name">Tên sân bay: </label>
							<input id="san_bay_name" type="text" class="form-control" name="san_bay_name" placeHolder="Nhập tên sân bay" pattern=".{3,}" required />
						</div>
						<div class="form-group" >
							<label for="san_bay_diaDiem">Địa điểm: </label>
							<input id="san_bay_diaDiem" type="text" class="form-control" name="san_bay_diaDiem" placeHolder="Nhập địa điểm" pattern=".{3,}" required />
						</div>
					</div>
				</div>
				<div style="text-align:center;">
					<button type="submit" class="btn btn-primary">Thêm</button>
					<button type="reset" class="btn btn-primary">Reset</button>
					<button type="button" class="btn btn-primary btn-hide-addUser"> Hide </button>
					<script type="text/javascript">
						$('.btn-hide-addUser').on('click', function(){
							$('#addUser').collapse('hide');
						});
					</script>
				</div>
			</form>
		</div>
		<hr>
	</div><!--// Thêm -->

	<!-- Bảng dữ liệu -->
	<div>
		<p>
			<span><i class="glyphicon glyphicon-list"></i> Danh sách Sân bay</span>
			<span class="pull-right"><a href="#" onclick="refresh_list_sanBay();"><i class="glyphicon glyphicon-refresh"></i> Refresh danh sách Sân bay</a></span>
		</p>
		<hr>
		<table class="table table-bordered table-hover" id="table_sanBay">
		    <thead>
		        <tr>
		            <th>Mã sân bay</th>
		            <th>Tên sân bay</th>
		            <th>Địa điểm</th>
		            <th>Sửa</th>
		            <th>Xóa</th>
		        </tr>
		    </thead>
		    <tbody id="getList_sanBay_all">
		    	
		    </tbody>
		</table>
	</div><!--// Bảng dữ liệu -->


	<!-- Modal Edit -->
	<div class="modal fade" id="editSanBay_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	  <div class="modal-dialog" style="width: 400px;">
	    <div class="modal-content">
	      <form id="update_sanBay" action="sanbay/xhrUpdate" method="POST">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title" id="myModalLabel">Sửa thông tin Sân bay</h4>
		      </div>
		      <div class="modal-body row">
		      	<div align="center" style="height:30px;">
					<h4 class="status success text-success">Success!</h4>
					<h4 class="status error text-danger">Error</h4>
					<h4 class="status loading text-primary">...Loading...</h4>
				</div>
				<div class="col-md-12">
			    	<div class="form-group">
			    		<label for="edit_sanBay_id">Mã sân bay: </label>
			    		<input id="edit_sanBay_id" type="text" class="form-control" name="edit_sanBay_id" readonly />
			    	</div>
			    	<div class="form-group">
			    		<label for="edit_sanBay_name">Tên sân bay: </label>
			    		<input id="edit_sanBay_name" type="text" class="form-control" name="edit_sanBay_name"/>
			    	</div>
			    	<div class="form-group">
			    		<label for="edit_sanBay_diaDiem" >Địa điểm: </label>
			    		<input id="edit_sanBay_diaDiem" name="edit_sanBay_diaDiem" type="text" class="form-control" />
			    	</div>
		    	</div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary" >Save changes</button>
		      </div>
	      </form>
	    </div>
	  </div>
	</div><!--// Modal Edit -->
</div>