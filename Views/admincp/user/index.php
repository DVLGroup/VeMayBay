

<h1 align="center">Quản lý User</h1>

<div class="container" style="margin-top: 50px">

	<div>
		<h4>
			<a class="abc" data-toggle="collapse" href="#addUser">
				<i class="glyphicon glyphicon-plus"></i> Thêm User
			</a>
		</h4>
		<div id="addUser" class="panel-collapse collapse" style="width: 600px; margin: 10px auto;">
			<form id="insertUser" action="user/xhrInsert" method="POST">
				<div class="row">
					<div align="center">
						<h4 class="status text-success">Success!</h4>
						<h4 class="status text-danger">Error</h4>
					</div>
					
					<div class="col-md-8">
						<div class="form-group" >
							<label for="user_email">Email: </label>
							<input id="user_email" type="email" class="form-control" name="user_email" placeHold="Nhập Email"/>
						</div>
						<div class="form-group" >
							<label for="user_password">Mật khẩu: </label>
							<input id="user_password" type="password" class="form-control" name="user_password" placeHold="Nhập Mật khẩu"/>
						</div>
						<div class="form-group" >
							<label for="user_password_confirm">Xác thực mật khẩu: </label>
							<input id="user_password_confirm" type="password" class="form-control" name="" placeHold="Nhập xác thực mật khẩu"/>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group" >
							<label for="user_level">Nhóm quyền: </label>
							<select id="user_level" class="form-control" name="user_level_id">
								<option value selected>Chọn nhóm quyền</option>
							</select>
						</div>
					</div>
				</div>
				<div style="text-align:center;">
					<button type="submit" class="btn btn-primary">
						<i class="glyphicon glyphicon-refresh loading"></i> Thêm
					</button>
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
	</div>

	<div>
		<h4><i class="glyphicon glyphicon-list"></i> Danh sách User</h4>
		<hr>
		<table class="table table-bordered table-hover" id="table_user">
		    <thead>
		        <tr>
		            <th>ID</th>
		            <th>Họ tên</th>
		            <th>Email</th>
		            <th>Role</th>
		            <th>Tools</th>
		        </tr>
		    </thead>
		    <tbody id="listUser">
		    	
		    </tbody>
		</table>
	</div>
</div>