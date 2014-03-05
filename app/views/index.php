    <div class="infopanel center-block">
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
        <div ng-controller="ModalDemoCtrl">
            <div class="infopanel_edit_profile_button">
                <button class="btn btn-default btn-sm" ng-click="open()">Edit Profile</button>
            </div>
        </div>
        <div class="infopanel_archive_button">
            <button class="btn btn-default btn-sm">Archive</button>
        </div>
        <div class="infopanel_report_button">
            <button class="btn btn-success btn-sm">Report</button>
        </div>
        <div class="left_panels" style="float:left;">
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
        </div>
        <div class="center_content" style="float: right;">
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
    </div>
