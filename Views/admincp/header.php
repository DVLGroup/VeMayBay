<?php
    Session::init();
    $isAdmin = Session::get('Admin');
    if(!$isAdmin)
    {
        header('location:' . URL .'admincp');
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
        <link rel="stylesheet" href="<?php echo URL ?>public/css/admincp/wbbtheme.css"/>
        <link rel="stylesheet" href="<?php echo URL ?>public/css/admincp/jquery.Tables.css"/>

        <!-- Chèn link JavaScript-->
        <script src="<?php echo URL ?>public/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo URL ?>public/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo URL ?>public/js/admincp/jquery.wysibb.min.js" type="text/javascript"></script>
        <script src="<?php echo URL ?>public/js/admincp/jquery.dataTables.js" type="text/javascript"></script>
        <script>
            $(document).ready(function() {
                $("#editor").wysibb();
            })
        </script>
        <?php
            if(isset($this->js)){
                echo '<script type="text/javascript" src="'. $this->js .'"></script>';
            }
        ?>
    </head>

    <body>
        <header>
            <!-------------------------------------------------- Navbar -------------------------------------------------->
            <div class="navbar navbar-inverse">
                <div class="container" >
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="nav navbar-brand" href="<?php echo URL ?>">
                            <i class="glyphicon glyphicon-home"></i> Bay Online
                        </a>
                    </div>
                    <nav class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li >
                                <a href="<?php echo URL ?>admincp/vemaybay">Vé Máy Bay</a>
                            </li>
                            <li >
                                <a href="<?php echo URL ?>admincp/datve">Đặt vé</a>
                            </li>
                            <li >
                                <a href="<?php echo URL ?>admincp/yeucau">Yêu Cầu</a>
                            </li>
                            <li >
                                <a href="<?php echo URL ?>admincp/user">User</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav">
                                <a href="logout"><i class="glyphicon glyphicon-off"></i> Thoát</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>       
        </header>