

<h1 align="center">Quản lý User</h1>

<div class="container" style="margin-top: 50px">
	<!-- Thêm User -->
	<div>
		<h4>
			<a class="abc" data-toggle="collapse" href="#addUser">
				<i class="glyphicon glyphicon-plus"></i> Thêm User
			</a>
		</h4>
		
		<div id="addUser" class="panel-collapse collapse" style="width: 600px; margin: 10px auto;">
			<form id="insert_User" action="user/xhrInsert" method="POST">
				<div class="row">
					<div align="center" style="height:30px;">
						<h4 class="status success text-success">Success!</h4>
						<h4 class="status error text-danger">Error</h4>
						<h4 class="status loading text-primary">...Loading...</h4>
					</div>
					
					<div class="col-md-7">
						<div class="form-group" >
							<label for="user_email">Email: </label>
							<input id="user_email" type="email" class="form-control" name="user_email" placeHolder="Nhập Email" pattern=".{3,}" required title="Vui lòng nhập email"/>
						</div>
						<div class="form-group" >
							<label for="user_password">Mật khẩu: </label>
							<input id="user_password" type="password" class="form-control" name="user_password" placeHolder="Nhập Mật khẩu" pattern=".{6,}" required title="Ít nhất 6 ký tự" />
						</div>
						<div class="form-group" >
							<label for="user_password_confirm">Xác thực mật khẩu: </label>
							<input id="user_password_confirm" type="password" class="form-control" name="user_password_confirm" placeHolder="Nhập xác thực mật khẩu"/>
						</div>
					</div>
					<div class="col-md-5">
						<div class="form-group" >
							<label for="user_level">Nhóm quyền: </label>
							<select id="user_level" class="form-control pull-left" name="user_level_id" style="width: 75%;" required autofocus>
								
							</select>
							<a href="#" onclick="refresh_list_userLevel();"><span class="glyphicon glyphicon-refresh pull-left" style="font-size: 18px; padding: 7px; width: 12%;"  title="refresh danh sách quyền"></span></a>
							<a href="#"><span class="glyphicon glyphicon-plus pull-left" data-toggle="modal" data-target="#level_Modal" style="font-size: 18px; padding: 7px; width: 12%;" title="Thêm quyền vào danh sách"></span></a>
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
	</div><!--// Thêm User -->

	<!-- Bảng dữ liệu -->
	<div>
		<p>
			<span><i class="glyphicon glyphicon-list"></i> Danh sách User</span>
			<span class="pull-right"><a href="#" onclick="refresh_list_user();"><i class="glyphicon glyphicon-refresh"></i> Refresh danh sách User</a></span>
		</p>
		<hr>
		<table class="table table-bordered table-hover" id="table_user">
		    <thead>
		        <tr>
		            <th>ID</th>
		            <th>Họ tên</th>
		            <th>Email</th>
		            <th>Role</th>
		            <th>Sửa</th>
		            <th>Xóa</th>
		        </tr>
		    </thead>
		    <tbody id="getList_User_all">
		    	
		    </tbody>
		</table>
	</div><!--// Bảng dữ liệu -->


	<!-- Modal Edit -->
	<div class="modal fade" id="editUser_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <form id="update_User" action="user/xhrUpdate" method="POST">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title" id="myModalLabel">Sửa tài khoản User</h4>
		      </div>
		      <div class="modal-body row">
		      	<div align="center" style="height:30px;">
					<h4 class="status success text-success">Success!</h4>
					<h4 class="status error text-danger">Error</h4>
					<h4 class="status loading text-primary">...Loading...</h4>
				</div>
				<div class="col-md-6">
			    	<div class="form-group">
			    		<label for="edit_user_id">User ID: </label>
			    		<input id="edit_user_id" type="text" class="form-control" name="edit_user_id" disabled/>
			    	</div>
			    	<div class="form-group">
			    		<label for="edit_user_email">Email: </label>
			    		<input id="edit_user_email" type="email" class="form-control" name="edit_user_email" disabled/>
			    	</div>
			    	<div class="form-group">
			    		<label for="edit_user_level_id" >Quyền: </label>
			    		<select id="edit_user_level_id" name="edit_user_level_id" class="form-control">

			    		</select>
			    	</div>
		    	</div>
		    	<div class="col-md-6">
			    	<div class="form-group">
			    		<label for="edit_user_name">Họ tên: </label>
			    		<input id="edit_user_name" name="edit_user_name" type="text" class="form-control" value=""/>
			    	</div>
			    	<div class="form-group">
			    		<label for="edit_user_password">Mật khẩu cũ: </label>
			    		<input id="edit_user_password" name="edit_user_password" type="password" class="form-control" pattern=".{3,}" required title="ít nhất 3 ký tự"/>
			    	</div>
			    	<div class="form-group">
			    		<label for="edit_user_new_password">Mật khẩu mới: </label>
			    		<input id="edit_user_new_password" name="edit_user_new_password" type="password" class="form-control"/>
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
	</div><!--// Modal Level -->
</div>