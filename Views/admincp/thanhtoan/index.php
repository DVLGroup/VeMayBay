

<h1 align="center">Quản lý hình thức thanh toán</h1>

<div class="container" style="margin-top: 50px">
	<!-- Thêm -->
	<div>
		<h4>
			<a class="abc" data-toggle="collapse" href="#addUser">
				<i class="glyphicon glyphicon-plus"></i> Thêm thanh toán
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
							<label for="hanhly_name">Tên hành lý: </label>
							<input id="hanhly_name" type="text" class="form-control" name="hanhly_name" placeHolder="Nhập tên hành lý" pattern=".{3,}" required title="Vui lòng nhập tên hành lý"/>
						</div>
						<div class="form-group" >
							<label for="gia_hanh_ly">Giá bay: </label>
							<input id="gia_hanh_ly" type="number" class="form-control" name="gia_hanh_ly" placeHolder="Nhập giá bay" pattern=".{6,}" required />
						</div>
						<div class="form-group" >
							<label for="gia_bay">Giá hành lý: </label>
							<input id="gia_bay" type="number" class="form-control" name="gia_bay" placeHolder="Nhập giá hành lý"/>
						</div>
					</div>
					<div class="col-md-5">
						<div class="form-group" >
							<label for="hang_bay">Hãng bay: </label>
							<select id="hang_bay" class="form-control pull-left" name="hang_bay" style="width: 75%;" required autofocus>
								
							</select>
							<a href="#" onclick="refresh_list_hangBay();"><span class="glyphicon glyphicon-refresh pull-left" style="font-size: 18px; padding: 7px; width: 12%;"  title="refresh danh sách hãng bay"></span></a>
							<a href="#"><span class="glyphicon glyphicon-plus pull-left" data-toggle="modal" data-target="#hangBay_Modal" style="font-size: 18px; padding: 7px; width: 12%;" title="Thêm hãng bay vào danh sách"></span></a>
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
		<table class="table table-bordered table-hover" id="table_user">
		    <thead>
		        <tr>
		            <th>ID</th>
		            <th>Tên hành lý</th>
		            <th>Hãng bay</th>
		            <th>Giá bay</th>
		            <th>Giá hành lý</th>
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
			    		<input id="edit_hanhLy_id" type="text" class="form-control" name="edit_hanhLy_id" disabled/>
			    	</div>
			    	<div class="form-group">
			    		<label for="edit_hanhLy_name">Tên hành lý: </label>
			    		<input id="edit_hanhLy_name" type="email" class="form-control" name="edit_hanhLy_name"/>
			    	</div>
			    	<div class="form-group">
			    		<label for="edit_hanhLy_hangBay" >Hãng bay: </label>
			    		<select id="edit_hanhLy_hangBay" name="edit_hanhLy_hangBay" class="form-control">

			    		</select>
			    	</div>
		    	</div>
		    	<div class="col-md-6">
			    	<div class="form-group">
			    		<label for="edit_hanhLy_giaBay">Giá bay: </label>
			    		<input id="edit_hanhLy_giaBay" name="edit_hanhLy_giaBay" type="number" class="form-control" />
			    	</div>
			    	<div class="form-group">
			    		<label for="edit_hanhLy_giaHanhLy">Giá hành lý: </label>
			    		<input id="edit_hanhLy_giaHanhLy" name="edit_hanhLy_giaHanhLy" type="number" class="form-control" />
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