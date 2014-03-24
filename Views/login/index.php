<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		
		<title>Quản Lý</title>
		<link rel="stylesheet" href="<?php echo URL; ?>Public/css/default.css" />
		<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
		<script type="text/javascript" src="<?php echo URL; ?>public/js/bootstrap.js"></script>
		<link rel="stylesheet" href="<?php echo URL; ?>Public/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo URL; ?>Public/css/bootstrap-theme.css" />
		<link rel="stylesheet" href="<?php echo URL; ?>Public/css/docs.css" />
	</head>
	<body>
		<div class="container">
			<!-- <?php
			Session::init(); 
			if(!Session::get('loggedIn')){ ?>
			<div class="alert alert-danger alert-dismissable">
				<strong>Cảnh Báo! </strong> Email Hoặc Mật Khẩu Của Bạn Có Thể Bị Sai, <strong>Bạn Còn 10 Lần Nhập Lại!</strong>
			</div>
			<?php }?> -->
			<div class="page-header">
				<h2 class="text-center thumbnail">Đăng Nhập Quản Trị Viên</h2>
			</div>
			<div class="well">
				<form method="post" action="<?php echo URL; ?>login/run" class="form-horizontal" id="management">

					<div class="form-group">
						<label class="control-label col-md-3">Email</label>
						<div class="col-md-6">
							<input type="text" name="login" class="form-control required email" value="" placeholder="Nhập Email"  />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Mật Khẩu</label>
						<div class="col-md-6">
							<input type="password" name="password" class="form-control required" value="" placeholder="Nhập Mật Khẩu"  />
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-3">
							<div class="checkbox">
								<label>
									<input type="checkbox">
									Remember me </label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-3">
							<button type="submit" class="btn btn-info">
								Đăng Nhập
							</button>
							<button type="reset" class="btn btn-warning">
								Làm Tươi
							</button>
						</div>
					</div>

				</form>
			</div>
			<hr />
			<div class="thumbnail">
				<br />
				<br />
			</div>
		</div>
	</body>
</html>