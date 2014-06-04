

<h1 align="center">Danh sách khách hàng đặt vé</h1>

<div class="container" style="margin-top: 50px">

	<!-- Bảng dữ liệu -->
	<div>
		<p>
			<span><i class="glyphicon glyphicon-list"></i> Danh sách vé đã đặt</span>
			<span class="pull-right"><a href="#" onclick="refresh_list_datVe();"><i class="glyphicon glyphicon-refresh"></i> Refresh danh sách đặt vé</a></span>
		</p>
		<hr>
		<table class="table table-striped table-bordered table-hover" id="table_datVe">
			<thead>
				<tr>	
					<th>
						 STT
					</th>
					<th>
						 Tên khách hàng
					</th>
					<th>
						 Số điện thoại
					</th>
					<th>
						 Ngày đặt
					</th>
					<th>
						 Tổng vé
					</th>
					<th>
						 Tổng giá
					</th>
				</tr>
			</thead>
			<tbody id="getList_datVe_all">
				<tr>
					<td>
						 Trident
					</td>
					<td>
						 Internet Explorer 4.0
					</td>
					<td>
						 Win 95+
					</td>
					<td>
						 4
					</td>
					<td>
						 X
					</td>
					<td>
						 X
					</td>
				</tr>
				<tr>
					<td>
						 Trident
					</td>
					<td>
						 Internet Explorer 5.0
					</td>
					<td>
						 Win 95+
					</td>
					<td>
						 5
					</td>
					<td>
						 C
					</td>
					<td>
						 X
					</td>
				</tr>
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

<script>
jQuery(document).ready(function() {       
   App.init();
   TableAdvanced.init();
});
</script>