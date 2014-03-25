<!DOCTYPE >
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Quản Lý</title>
		<link rel="stylesheet" href="<?php echo URL; ?>Public/css/default.css" />

		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>Public/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>Public/css/bootstrap-theme.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>Public/css/docs.css" />

		<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
		<script type="text/javascript" src="<?php echo URL; ?>public/js/bootstrap.js"></script>
	</head>
	<body>
		<?php
		Session::init();
		function echoActiveClassIfRequestMatches($requestUri) {
			$current_file_name = basename($_SERVER['REQUEST_URI']);

			if ($current_file_name == $requestUri)
				echo 'class="active"';
		}
		?>
		<div class="navbar navbar-inverse navbar-static-top bs-docs-nav" role="navigation">
			<div class="container" >
				<div class="navbar-header">
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="nav navbar-brand" href="<?php echo URL; ?>index_admin">Bay Online</a>
				</div>
				<nav class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li <?php echoActiveClassIfRequestMatches('vemaybay')?>>
							<a href="<?php echo URL; ?>vemaybay">Vé Máy Bay</a>
						</li>
						<li <?php echoActiveClassIfRequestMatches('diadiem')?>>
							<a href="<?php echo URL; ?>diadiem">Địa Điểm</a>
						</li>
						<li <?php echoActiveClassIfRequestMatches('hangmaybay')?>>
							<a href="<?php echo URL; ?>hangmaybay">Hãng</a>
						</li>
						<li <?php echoActiveClassIfRequestMatches('yeucau')?>>
							<a href="<?php echo URL; ?>yeucau">Yêu Cầu</a>
						</li>
						<li>
							<?php if(Session::get('loggedIn')==TRUE){
							?>
							<a href="<?php echo URL; ?>index_admin/logout">Đăng Xuất</a>
							<?php } else{
								$logged = Session::get('loggedIn');
									if ($logged == false) {
										Session::destroy();
										header('location:' . URL . 'login');
										exit ;
									}
								}
							?>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="container bs-docs-container">

