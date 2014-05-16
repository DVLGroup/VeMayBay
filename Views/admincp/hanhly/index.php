

<h1 align="center">Quản lý Hành lý</h1>

<div class="container" style="margin-top: 50px">
	<!-- Thêm -->
	<div>
		<h4>
			<a class="abc" data-toggle="collapse" href="#addUser">
				<i class="glyphicon glyphicon-plus"></i> Thêm Hành lý
			</a>
		</h4>
		
		<div id="addUser" class="panel-collapse collapse" style="width: 600px; margin: 10px auto;">
			<form id="insert_hanhLy" action="hanhly/xhrInsert" method="POST">
				<div class="row">
					<div align="center" style="height:30px;">
						<h4 class="status success text-success">Success!</h4>
						<h4 class="status error text-danger">Error</h4>
						<h4 class="status loading text-primary">...Loading...</h4>
					</div>
					
					<div class="col-md-7">
						<div class="form-group" >
							<label for="hanh_ly_name">Tên hành lý: </label>
							<input id="hanh_ly_name" type="text" class="form-control" name="hanh_ly_name" placeHolder="Nhập tên hành lý" pattern=".{3,}" required title="Vui lòng nhập tên hành lý"/>
						</div>
						<div class="form-group" >
							<label for="gia_bay">Giá bay: </label>
							<input id="gia_bay" type="number" class="form-control" name="gia_bay" placeHolder="Nhập giá bay" pattern=".{6,}" required />
						</div>
						<div class="form-group" >
							<label for="gia_hanh_ly">Giá hành lý: </label>
							<input id="gia_hanh_ly" type="number" class="form-control" name="gia_hanh_ly" placeHolder="Nhập giá hành lý"/>
						</div>
					</div>
					<div class="col-md-5">
						<div class="form-group" >
							<label for="hang_bay">Hãng bay: </label>
							<select id="hang_bay" class="form-control pull-left" name="hang_bay" required autofocus>
								<option value="VietJetAir">VietJetAir</option>
								<option value="VietNam-Airline">VN-Airline</option>
								<option value="JetStar">JetStar</option>
							</select>

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
			<span><i class="glyphicon glyphicon-list"></i> Danh sách Hành lý</span>
			<span class="pull-right"><a href="#" onclick="refresh_list_hanhLy();"><i class="glyphicon glyphicon-refresh"></i> Refresh danh sách Hành lý</a></span>
		</p>
		<hr>
		<table class="table table-bordered table-hover" id="table_hanhLy">
		    <thead>
		        <tr>
		            <th>ID</th>
		            <th>Tên hành lý</th>
		            <th>Hãng bay</th>
		            <th>Giá bay</th>
		            <th>Giá hành lý</th>
		            <th>Tools</th>

		        </tr>
		    </thead>
		    <tbody id="getList_hanhLy_all">
		    	
		    </tbody>
		</table>
	</div><!--// Bảng dữ liệu -->


	<!-- Modal Edit -->
	<div class="modal fade" id="editHanhLy_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <form id="update_hanhLy" action="hanhly/xhrUpdate" method="POST">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title" id="myModalLabel">Sửa thông tin Hành lý</h4>
		      </div>
		      <div class="modal-body row">
		      	<div align="center" style="height:30px;">
					<h4 class="status success text-success">Success!</h4>
					<h4 class="status error text-danger">Error</h4>
					<h4 class="status loading text-primary">...Loading...</h4>
				</div>
				<div class="col-md-6">
			    	<div class="form-group">
			    		<label for="edit_hanhLy_id">ID: </label>
			    		<input id="edit_hanhLy_id" type="text" class="form-control" name="edit_hanhLy_id" readonly/>
			    	</div>
			    	<div class="form-group">
			    		<label for="edit_hanhLy_name">Tên hành lý: </label>
			    		<input id="edit_hanhLy_name" type="text" class="form-control" name="edit_hanhLy_name"/>
			    	</div>
			    	<div class="form-group">
			    		<label for="edit_hangBay" >Hãng bay: </label>
			    		<select id="edit_hangBay" name="edit_hangBay" class="form-control" required>
			    			<option value="VietJetAir" selected="selected">VietJetAir</option>
							<option value="VietNam-Airline">VN-Airline</option>
							<option value="JetStar">JetStar</option>
			    		</select>
			    	</div>
		    	</div>
		    	<div class="col-md-6">
			    	<div class="form-group">
			    		<label for="edit_giaBay">Giá bay: </label>
			    		<input id="edit_giaBay" name="edit_giaBay" type="number" class="form-control" />
			    	</div>
			    	<div class="form-group">
			    		<label for="edit_giaHanhLy">Giá hành lý: </label>
			    		<input id="edit_giaHanhLy" name="edit_giaHanhLy" type="number" class="form-control" />
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


	<!-- Modal Level -->
	<div class="modal fade" id="level_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	  <div class="modal-dialog">
	    <div class="modal-content">
	
	      	<div class="modal-header">
	        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        	<h4 class="modal-title" id="myModalLabel">Quản lý quyền</h4>
	      	</div>
		    <div class="modal-body">
		      	<form id="insert_userLevel" action="user_level/xhrInsert" method="POST">
		      		<div style="width: 200px; margin: 0 auto;">
				      	<div align="center" style="height:30px;">
							<h4 class="status success text-success">Success!</h4>
							<h4 class="status error text-danger">Error</h4>
							<h4 class="status loading text-primary">...Loading...</h4>
						</div>
				    	<div class="form-group">
				    		<label for="add_level_name">Tên quyền: </label>
				    		<input id="add_level_name" name="user_level_name" type="text" class="form-control" pattern=".{3,}" required title="Tối thiểu 3 ký tự"/>
				    	</div>
				    	<div class="form-group" align="center">
				    		<button type="submit" class="btn btn-sm btn-primary">Thêm</button>
				    		
				    	</div>
			    	</div>
			    </form>

			    <table class="table table-bordered table-hover">
			    	<thead>
			    		<th>ID</th>
			    		<th>Tên quyền</th>
			    		<th>Sửa</th>
			    		<th>Xóa</th>
			    	</thead>
			    	<tbody id="getList_UserLevel_all">
			    		
			    	</tbody>
			    </table>
		      
	      
	    	</div>
	  	</div>
	</div><!--// Modal  -->
</div>