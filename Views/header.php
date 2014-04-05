<!DOCTYPE >
<html>
	<head>
		<meta charset="UTF-8" />
		<meta content="True" name="HandheldFriendly">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<meta name="viewport" content="width=device-width">
		<title>Bay Online</title>
		<link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css" />

		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/bootstrap.css" />
		<!-- <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/bootstrap-theme.css" /> -->
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/docs.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/fontawesome/css/font-awesome.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/datepicker/css/bootstrap-datetimepicker.min.css" />
		
		<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
		<script type="text/javascript" src="<?php echo URL; ?>public/js/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="<?php echo URL; ?>public/js/messages_vi.js"></script>
		<?php
		if(isset($this->js))
		{
			foreach ($this->js as $js) {
				echo '<script type="text/javascript" src="'.URL.$js.'"></script>';
			}	
		}
		?>
		<script>
			$(document).ready(function() {
				$("#management").validate({
					errorElement : "span", // Định dạng cho thẻ HTML hiện thông báo lỗi
					rules : {
						rePassword : {
							equalTo : "#password" // So sánh trường repassword với trường có id là password
						},
					}
				});

			});
		</script>
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
					<a class="nav navbar-brand" href="<?php echo URL; ?>index"><span class="glyphicon glyphicon-plane"></span> Bay Online</a>
				</div>
				<nav class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li <?php echoActiveClassIfRequestMatches('yeucau')?>>
							<a href="<?php echo URL; ?>yeucau">Yêu Cầu Săn Vé</a>
						</li>
						<li <?php echoActiveClassIfRequestMatches('thanhtoan')?>>
							<a href="<?php echo URL; ?>thanhtoan">Thanh Toán</a>
						</li>
						<li <?php echoActiveClassIfRequestMatches('lienhe')?>>
							<a href="<?php echo URL; ?>lienhe">Liên Hệ</a>
						</li>
						<li <?php echoActiveClassIfRequestMatches('gioithieu')?>>
							<a href="<?php echo URL; ?>gioithieu">Giới Thiệu</a>
						</li>
						
					</ul>
				</nav>
			</div>
		</div>
		<div class="container bs-docs-container">
			
