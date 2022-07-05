<?php include('header.php') ?>
<link href="css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="">
<!-- Begin page -->
<div id="wrapper">
    <div class="left side-menu">
        <div class="slimscroll-menu" id="remove-scroll">

            <?php include('sidebar.php') ?>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="content-page ">
        <?php include('topnav.php') ?>
        <!-- Start Page content -->
        <div class="content ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="box_header">
                            <div class="row">
                                <div class="col-md-7 col-12">
                                    <div class="mainiconbox"><i class="fa fa-user"></i>
                                    </div>
                                    <h4 class="m-t-0 header-title">
                                        <div class="breadcrumbs ng-scope">
                                            <ul>
                                                <li><a href="index.php">Home</a></li>
                                                <li><a>Settings</a></li>
                                                <li><a>User Settings</a></li>
                                            </ul>
                                            <div>User Settings</div>
                                        </div>
                                    </h4>
                                </div>
                                <div class="col-md-5 col-12">
                                    <div class="pull-right p-t-10">

                                        <a data-toggle="modal" class="btn btn-info newbtn_crete" data-target="#newuser"> <i class="mdi mdi-plus-circle-outline"></i> New
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-box ">
                            <div class="table_rspnsv" id="tableview">
                                <div class="row2 tbl_stngs commen_table">

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap table-hover" style="width: 100%;">

                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Job title</th>
                                            <th>Manager's Name</th>
                                            <th style="width: 80px">Pay Grade</th>
                                            <th>Appraisal Period</th>
                                            <th>Appraisal Date</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a class="label-default" href="#/">Tiger Nixon</a></td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Garrett Winters</a></td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Ashton Cox</a></td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Cedric Kelly</a></td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Airi Satou</a></td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Brielle Williamson</a></td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Herrod Chandler</a></td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Rhona Davidson</a></td>
                                            <td>Integration Specialist</td>
                                            <td>Tokyo</td>
                                            <td>Integration Specialist</td>
                                            <td>Tokyo</td>
                                            <td>55</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Colleen Hurst</a></td>
                                            <td>Javascript Developer</td>
                                            <td>San Francisco</td>
                                            <td>Javascript Developer</td>
                                            <td>San Francisco</td>
                                            <td>39</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Sonya Frost</a></td>
                                            <td>Software Engineer</td>
                                            <td>Edinburgh</td>
                                            <td>Software Engineer</td>
                                            <td>Edinburgh</td>
                                            <td>23</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Jena Gaines</a></td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>30</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Quinn Flynn</a></td>
                                            <td>Support Lead</td>
                                            <td>Edinburgh</td>
                                            <td>Support Lead</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Charde Marshall</a></td>
                                            <td>Regional Director</td>
                                            <td>San Francisco</td>
                                            <td>Regional Director</td>
                                            <td>San Francisco</td>
                                            <td>36</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Haley Kennedy</a></td>
                                            <td>Senior Marketing Designer</td>
                                            <td>London</td>
                                            <td>Senior Marketing Designer</td>
                                            <td>London</td>
                                            <td>43</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Tatyana Fitzpatrick</a></td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>19</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Michael Silva</a></td>
                                            <td>Marketing Designer</td>
                                            <td>London</td>
                                            <td>Marketing Designer</td>
                                            <td>London</td>
                                            <td>66</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Paul Byrd</a></td>
                                            <td>Chief Financial Officer (CFO)</td>
                                            <td>New York</td>
                                            <td>Chief Financial Officer (CFO)</td>
                                            <td>New York</td>
                                            <td>64</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Gloria Little</a></td>
                                            <td>Systems Administrator</td>
                                            <td>New York</td>
                                            <td>Systems Administrator</td>
                                            <td>New York</td>
                                            <td>59</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Bradley Greer</a></td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>41</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Dai Rios</a></td>
                                            <td>Personnel Lead</td>
                                            <td>Edinburgh</td>
                                            <td>Personnel Lead</td>
                                            <td>Edinburgh</td>
                                            <td>35</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Jenette Caldwell</a></td>
                                            <td>Development Lead</td>
                                            <td>New York</td>
                                            <td>Development Lead</td>
                                            <td>New York</td>
                                            <td>30</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- container -->
        </div>
    </div>
</div>

<div id="newuser" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal_large">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">User</h4>
                <div class="pull-right"> <a class="btn enlarge_modal" data-toggle="tooltip" data-original-title="Fullscreen"><i
                                class="mdi mdi-crop-free" aria-hidden="true"></i> </a>
                    <a class="btn dslarge_modal" data-toggle="tooltip" data-original-title="Back"><i
                                class="mdi mdi-arrow-expand-all" aria-hidden="true"></i> </a>
                </div>
            </div>
            <div class="modal-body">
                <form>
                    <div class="col-md-12">
                        <div class="row m-t-15">
                            <div class="col-md-6 colp_r_15">
                                <div class="row">
                                    <div class="col-md-12 pad5 ">
                                        <div class="form-group bmd-form-group required_item">
                                            <input type="password" class="input form-control">
                                            <label class="inputText">Username</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pad5">
                                        <div class="form-group">
                                            <div class="form-group bmd-form-group required_item">
                                                <input type="text" class="input form-control">
                                                <label class="inputText openselect2">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pad5">
                                        <div class="form-group">
                                            <div class="form-group bmd-form-group required_item">
                                                <input type="text" class="input form-control">
                                                <label class="inputText openselect2">Re-type Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 pad5">
                                        <div class="form-group">
                                            <textarea rows="1" class="form-control input_textaerea tstarea"></textarea>
                                            <label class="bmd-label-floating inputText">Description</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 colp_l_15">
                                <div class="row">
                                    <div class="col-md-6 colp_r_15">
                                        <div class="user_daterangpickrbox expirationbox">
                                            <div class="">
                                                <h3 class="big_title2">Password Expiration</h3>
                                            </div>
                                            <div class="form-group">
                                                <div class="radio">
                                                    <input name="group1" type="radio" id="passwd_day">
                                                    <label for="passwd_day" id="passwd_day_btn">Days</label> <span>
                                                    <input type="number" class="password_day_countbox hide "
                                                           style="max-width: 50px;margin-left: 20px"> </span>
                                                </div>
                                                <div class="radio">
                                                    <input name="group1" type="radio" id="passwd_no_expire" checked="">
                                                    <label for="passwd_no_expire">None</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                        <div class="col-md-10 m-t-18">
                                            <div class="user_daterangpickrbox expirationbox">
                                                <div class="">
                                                    <h3 class="big_title2">Effective Date</h3>
                                                </div>
                                                <div class="input-daterange p-t-15" id="date-range">
                                                    <div class="row">
                                                        <div class="col-md-6 pad5">
                                                            <div class="input-group bmd-date-group">
                                                                <input type="text" class="form-control input" id="datetimepickereffcet-start" />
                                                                <label class="bmd-label-floating inputText labl_insd">From</label>
                                                                <div class="input-group-append"> <span class="input-group-text "><i class="fa fa-calendar"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 pad5 ">
                                                            <div class="input-group ">
                                                                <input type="text" class="form-control input" id="datetimepickereffcet-end" />
                                                                <label class="bmd-label-floating inputText labl_insd">To</label>
                                                                <div class="input-group-append"> <span class="input-group-text "><i class="fa fa-calendar"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" expirationbox">
                        <div class="col-12">
                            <div class="row">
                                <h4 class="modal_sub_hdng">Roles</h4>
                            </div>
                        </div>
                        <div class="tbl_addlist_crollbox">
                            <table class="table table_delpmnt_plan">
                                <thead>
                                <tr>
                                    <th class="th_btnpand">
                                        <div class="appnd_user_btn append_btn">+</div>
                                    </th>
                                    <th class="th_user_role">Role</th>
                                    <th class="th_user_decrptn">Description</th>
                                    <th class="th_user_strtdate">Start Date</th>
                                    <th class="th_user_enddate">End Date</th>
                                </tr>
                                </thead>
                            </table>
                            <table class="table scrolbaletable">
                                <tbody class="apenduser">
                                <tr>
                                    <td class="th_btnpand">
                                        <div class="appnd_user_minus_btn appnd_minus_btn">-</div>
                                    </td>
                                    <td class="th_user_role">
                                        <select class="form-control">
                                            <option>Less than 1 year</option>
                                            <option>1 - 2 years</option>
                                            <option>3 - 5 years</option>
                                        </select>
                                    </td>
                                    <td class="th_user_decrptn">
                                        <input class="form-control">
                                    </td>
                                    <td class="th_user_strtdate">
                                        <div class="input-group date">
                                            <input type="text" class="input form-control" id="datetimepicker-role-start">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </td>
                                    <td class="th_user_enddate">
                                        <div class="input-group date">
                                            <input type="text" class="input form-control" id="datetimepicker-role-end">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        // Default Datatable
        $('#datatable').DataTable();
        $('#responsive-datatable').DataTable();

        $('#datetimepickereffcet-start').datetimepicker({
            format: 'DD-MM-YYYY'
        });
        $('#datetimepickereffcet-end').datetimepicker({
            format: 'DD-MM-YYYY',
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepickereffcet-start").on("dp.change", function(e) {
            $('#datetimepickereffcet-end').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepickereffcet-end").on("dp.change", function(e) {
            $('#datetimepickereffcet-start').data("DateTimePicker").maxDate(e.date);
        });

        $('#datetimepicker-role-start').datetimepicker({
            format: 'DD-MM-YYYY'
        });
        $('#datetimepicker-role-end').datetimepicker({
            format: 'DD-MM-YYYY',
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker-role-start").on("dp.change", function(e) {
            $('#datetimepicker-role-end').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker-role-end").on("dp.change", function(e) {
            $('#datetimepicker-role-start').data("DateTimePicker").maxDate(e.date);
        });

    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".appnd_user_btn").click(function() {
            $(".apenduser").append("<tr>\n" +
                "                                    <td class=\"th_btnpand\">\n" +
                "                                        <div class=\"appnd_user_minus_btn appnd_minus_btn\">-</div>\n" +
                "                                    </td>\n" +
                "                                    <td class=\"th_user_role\">\n" +
                "                                        <select class=\"form-control\">\n" +
                "                                            <option>Less than 1 year</option>\n" +
                "                                            <option>1 - 2 years</option>\n" +
                "                                            <option>3 - 5 years</option>\n" +
                "                                        </select>\n" +
                "                                    </td>\n" +
                "                                    <td class=\"th_user_decrptn\">\n" +
                "                                        <input class=\"form-control\">\n" +
                "                                    </td>\n" +
                "                                    <td class=\"th_user_strtdate\">\n" +
                "                                        <div class=\"input-group date\">\n" +
                "                                            <input type=\"text\" class=\"input form-control\" id=\"datetimepicker\"> <span class=\"input-group-addon\"><i class=\"fa fa-calendar\"></i></span>\n" +
                "                                        </div>\n" +
                "                                    </td>\n" +
                "                                    <td class=\"th_user_enddate\">\n" +
                "                                        <div class=\"input-group date\">\n" +
                "                                            <input type=\"text\" class=\"input form-control\" id=\"datetimepicker\"> <span class=\"input-group-addon\"><i class=\"fa fa-calendar\"></i></span>\n" +
                "                                        </div>\n" +
                "                                    </td>\n" +
                "                                </tr>");
            $(".appnd_user_minus_btn").click(function() {
                $(this).parent().parent().remove();
            });
        });
    });
</script>

</body>

</html>
