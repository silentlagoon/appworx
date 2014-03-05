<!doctype html>
<html lang="en" ng-app="appWorx">
<head>
    <meta charset="utf-8">
    <title>AppWorx</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
</head>
<body style="background: #e5eaef">
    <div>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">AppWorx</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div class="nav navbar-nav">
                        <li class="patients"><a href="#">Patients</a></li>
                        <li class="content"><a href="#">Content</a></li>
                        <li class="administration"><a href="#">Administration</a></li>
                    </div>
                        <div class="search_page">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    <div class="avatar">
                        <ul>
                            <div>
                                <a href="javascript:;">
                                    <img src="<?php echo asset('/pics/amb.jpg') ?>" class="img-circle" width="40px;" height="40px;"/>
                                </a>
                            </div>

                        </ul>
                    </div>
                    <div class="av_dropdown">
                        <a href="#" data-toggle="dropdown"> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="/logout">Log out</a></li>
                        </ul>
                    </div>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
    <?php echo $content ?>
    <script src="<?php echo asset('/js/angular/angular.js') ?>"></script>
    <script src="<?php echo asset('/js/angular/main.js') ?>"></script>
    <script src="<?php echo asset('/js/jquery.js') ?>"></script>
    <link href="<?php echo asset('/css/main.css') ?>" rel="stylesheet">
    <script src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.6.0.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>