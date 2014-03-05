<!doctype html>
<html lang="en" ng-app="appWorx">
<head>
    <meta charset="utf-8">
    <title>AppWorx</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
</head>
<body style="background: #e5eaef">
    <div class="page">
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
        <?php $logged_in = true; ?>
        <?php if ($logged_in) { ?>
        <div class="infopanel">
            <div class="infopanel_avatar">
                <img src="<?php echo asset('/pics/amb.jpg') ?>" class="img-circle" width="50px;" height="50px;"/>
            </div>
            <div class="infopanel_uderdata">
                <div class="infopanel_uderdata_name">
                    Mary Bryant
                </div>
                <div class="infopanel_uderdata_birthdate">
                    July 5, 1965
                </div>
            </div>
            <div class="infopanel_lastvisit">
                <strong>Last visit:</strong>
                <div class="infopanel_lastvisit_date">
                    Oct. 1, 2013
                </div>
            </div>
            <div class="infopanel_enrolledid">
                <strong>Enrolled ID:</strong>
                <div class="infopanel_enrolledid_name">
                    Tom Smith
                </div>
            </div>
            <div class="infopanel_edit_profile_button">
                <button class="btn btn-default btn-sm">Edit Profile</button>
            </div>
            <div class="infopanel_archive_button">
                <button class="btn btn-default btn-sm">Archive</button>
            </div>
            <div class="infopanel_report_button">
                <button class="btn btn-success btn-sm">Report</button>
            </div>
        </div>
        <?php } ?>
        <div class="diagmosis">
            <div class="diagnosis_header">Diagnosis</div>
            <div class="diagnosis_plus_button">
                <button class="btn btn-success btn-sm">+</button>
            </div>
            <div class="diagnosis_line">
                <hr/>
            </div>
            <div id="diagnosis_list">
            </div>
        </div>
        <div class="treatment">
            <div class="treatment_header">Treatment</div>
            <div class="treatment_plus_button">
                <button class="btn btn-success btn-sm">+</button>
            </div>
            <div class="treatment_line">
                <hr/>
            </div>
            <div id="treatment_list">
            </div>
        </div>
        <div class="content_page">
            <div class="photos_header">Photos</div>
            <div class="photos_sort_by_selecter">
                <select>
                    <option disabled>Sort by Name</option>
                </select>
            </div>
            <div class="photos_filter">
                <div class="filter_by_header">
                    Filter by:
                </div>
                <div class="photos_filter_by_body_selecter">
                    <select>
                        <option disabled>Body Area</option>
                    </select>
                </div>
                <div class="photos_filter_by_date_selecter">
                    <select>
                        <option disabled>Date</option>
                    </select>
                </div>
            </div>
            <div class="content_page_buttons">
                <div class="content_page_unknown_button">
                    <button class="btn btn-default btn-sm">-</button>
                </div>
                <div class="content_page_plus_button">
                    <button class="btn btn-success btn-sm">+</button>
                </div>
                <div class="content_page_line">
                    <hr/>
                </div>
            </div>
        </div>
        <div class="notes_page">
            <div class="notes_header">Notes</div>
            <div class="notes_plus_button">
                <button class="btn btn-success btn-sm">+</button>
            </div>
            <div class="notes_line">
                <hr/>
            </div>
            <div id="notes_list">
            </div>
        </div>
    </div>
    <script src="<?php echo asset('/js/angular/angular.js') ?>"></script>
    <script src="<?php echo asset('/js/angular/main.js') ?>"></script>
    <script src="<?php echo asset('/js/jquery.js') ?>"></script>
    <link href="<?php echo asset('/css/main.css') ?>" rel="stylesheet">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>