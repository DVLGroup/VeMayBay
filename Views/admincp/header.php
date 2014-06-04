<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />

        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
        Remove this if you use the .htaccess -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Quản lý vé máy bay</title>
        <meta name="description" content="" />
        <meta name="author" content="TrongLoi" />

        <meta name="viewport" content="width=device-width; initial-scale=1.0" />

        <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
        <link rel="shortcut icon" href="" />
        <link rel="apple-touch-icon" href="../img/ico/Cat-Brown-icon-72px.png" />

        <!-- Chèn link CSS -->
        <link rel="stylesheet" href="<?php echo URL ?>public/css/fontawesome/css/font-awesome.css" />

        <link rel="stylesheet" href="<?php echo URL ?>public/css/bootstrap.min.css" type="text/css"  />

        <link rel="stylesheet" href="<?php echo URL ?>public/plugins/select2/select2.css" type="text/css"  />
        <link rel="stylesheet" href="<?php echo URL ?>public/plugins/select2/select2-metronic.css" type="text/css"  />

        <link rel="stylesheet" href="<?php echo URL ?>public/plugins/data-tables/DT_bootstrap.css" type="text/css"  />

        <link rel="stylesheet" href="<?php echo URL ?>public/css/style-metronic.css"/>
        <link rel="stylesheet" href="<?php echo URL ?>public/css/plugins.css"/>

        <link rel="stylesheet" href="<?php echo URL ?>public/css/admincp/style.css"/>
        <link rel="stylesheet" href="<?php echo URL ?>public/css/admincp/customize-bootstrap.css"/>

        <?php
            if(isset($this->style)){
                foreach ($this->style as $style) {
                    echo '<link rel="stylesheet" type="text/css" href="'. $style .'" />';
                }
            }
        ?>

        <!-- Chèn link JavaScript-->
        <script src="<?php echo URL ?>public/js/jquery.min.js" type="text/javascript"></script>

        <script src="<?php echo URL ?>public/js/bootstrap.min.js" type="text/javascript"></script>

        <script src="<?php echo URL ?>public/js/jquery.validate.min.js" type="text/javascript" ></script>

        <script src="<?php echo URL ?>public/plugins/select2/select2.min.js" type="text/javascript" ></script>

        <script src="<?php echo URL ?>public/plugins/data-tables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo URL ?>public/plugins/data-tables/DT_bootstrap.js" type="text/javascript" ></script>

        <script src="<?php echo URL ?>public/js/admincp/core/app.js" type="text/javascript"></script>
        
        <?php
            if(isset($this->script)){
                foreach ($this->script as $script) {
                    echo '<script type="text/javascript" src="'. $script .'" ></script>';
                }
            }
        ?>
    </head>

    <body>
        <header>
            <!-------------------------------------------------- Navbar -------------------------------------------------->
            <div class="navbar navbar-inverse navbar-static-top bs-docs-nav" role="navigation">
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
                            <li>
                                <a href="<?php echo URL ?>admincp/vemaybay">Vé máy bay</a>
                            </li>
                            <li >
                                <a href="<?php echo URL ?>admincp/datve">Đặt vé</a>
                            </li>
                            <li >
                                <a href="<?php echo URL ?>admincp/hanhly">Hành lý</a>
                            </li>
                            <li >
                                <a href="<?php echo URL ?>admincp/sanbay">Sân bay</a>
                            </li>
                            <li >
                                <a href="<?php echo URL ?>admincp/thanhtoan">Thanh toán</a>
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