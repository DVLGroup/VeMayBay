<?php
	if(Session::get('Admin')){
		header('location:'.URL.'admincp/dashboard');
	}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />

        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
        Remove this if you use the .htaccess -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Website desktop version</title>
        <meta name="description" content="" />
        <meta name="author" content="TrongLoi" />

        <meta name="viewport" content="width=device-width; initial-scale=1.0" />

        <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
        <link rel="shortcut icon" href="../img/ico/Cat-Brown-icon-24px.png" />
        <link rel="apple-touch-icon" href="../img/ico/Cat-Brown-icon-72px.png" />

        <!-- Chèn link CSS -->
        <link rel="stylesheet" href="<?php echo URL ?>public/css/bootstrap.min.css" type="text/css"  />


        <!-- Chèn link JavaScript-->
        <script src="<?php echo URL ?>public/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo URL ?>public/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- Extends -->
        <link rel="stylesheet" href="<?php echo URL ?>public/css/admincp/admin.login.css" type="text/css"  />
    
    </head>

    <body>
        	<header>
            
        	</header>

			<section class='admin-login'>
    		<div class="container">
		        <div class="panel panel-primary">
		                    <div class="panel-heading">
		                        <h4 class="text-center"><b>ADMIN CONTROL PANEL</b></h4>
		                    </div>
		                    <div class="panel-body">
		                        <div class="panel-inner">
		                            <form role="form" action="<?php echo URL ?>admincp/login" method="POST" class='admin-login-form'>
		                                <fieldset>
		                                    <div class="form-group">
		                                        <label for="admin-email">Email:</label>
		                                        <input id="admin-email" type="email" class="form-control" placeholder="Admin Email" name="user_email"/>
		                                    </div>
		                                    <div class="form-group">
		                                        <label for="admin-password">Password: </label>
		                                        <input id="admin-password" type="password" class="form-control" placeholder="Admin Password" name="user_password"/>
		                                    </div>
		                                    <div class="form-group">
		                                        <input type="submit" class="btn btn-primary" value="Login" name="login"/>
		                                        <a href="<?php echo URL ?>" class="btn btn-default">Trở về trang chủ</a>
		                                    </div>
		                                </fieldset>
		                            </form>
		                        </div>
		                    </div>
		                    <div class="panel-footer">
		                        <p class="text-warning pull-right"><i>Just only for admin</i></p>
		                        <div class="clearfix"></div>
		                    </div>
		        </div>  
        	</div>
    	</section>


    	<footer>
        	
    	</footer>
    </body>
</html>




