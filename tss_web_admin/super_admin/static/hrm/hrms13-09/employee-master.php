<?php include('header.php') ?>
<link href="css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="">
<!-- Begin page -->
<div id="wrapper">
    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="slimscroll-menu" id="remove-scroll">
            <!-- LOGO -->
            <?php include('sidebar.php') ?>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -left -->
    </div>
    <!-- Left Sidebar End -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <div class="content-page ">
        <?php include('topnav.php') ?>
        <!-- Start Page content -->
        <div class="content">
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
                                                <li><a>Employee Master</a></li>
                                            </ul>
                                            <div>Employee Master</div>
                                        </div>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-box">
                            <div class="row2">
                                <ul class="nav nav-tabs tabs-bordered">
                                    <li class="nav-item">
                                        <a href="#Employees" data-toggle="tab" aria-expanded="false" class="nav-link active show">
                                            Employees
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#Jobs" data-toggle="tab" aria-expanded="true" class="nav-link">
                                            Jobs
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content table_rspnsv2">
                                    <div class="tab-pane active show" id="Employees">
                                        <div class="btn-group tab_inside_btn">
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#newaccount"><i class="mdi mdi-plus-circle-outline"></i> New Employees
                                            </button>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                    <span class="caret"></span></button>
                                                <ul class="dropdown-menu group_btn" role="menu">
                                                    <li><a href="#">Service</a></li>
                                                    <li><a href="#">Commosion</a></li>
                                                    <li><a href="#">Weekly Schedule</a></li>
                                                    <li><a href="#">Breaks</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Reports</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tbl_stngs commen_table">
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap table-hover" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>Sr #</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Email</th>
                                                    <th>User Name</th>
                                                    <th>Contact No.</th>
                                                    <th>Job Title</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a class="label-default" href="#/">Tiger Nixon</a></td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>System Architect</td>
                                                    <td>System Architect</td>
                                                    <td>
                                                        <a class="label-default" href="employee-view.php"> <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a class="label-default" href="#/"> <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>25</td>
                                                    <td><a class="label-default" href="#/">Angelica Ramos</a></td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>
                                                        <a class="label-default" href="#/"> <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a class="label-default" href="#/"> <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>26</td>
                                                    <td><a class="label-default" href="#/">Gavin Joyce</a></td>
                                                    <td>Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>42</td>
                                                    <td>
                                                        <a class="label-default" href="#/"> <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a class="label-default" href="#/"> <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>27</td>
                                                    <td><a class="label-default" href="#/">Jennifer Chang</a></td>
                                                    <td>Regional Director</td>
                                                    <td>Singapore</td>
                                                    <td>Singapore</td>
                                                    <td>28</td>
                                                    <td>28</td>
                                                    <td>
                                                        <a class="label-default" href="#/"> <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a class="label-default" href="#/"> <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="Jobs">
                                        <div class="btn-group tab_inside_btn">
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#newjobs"><i class="mdi mdi-plus-circle-outline"></i> New Jobs
                                            </button>
                                        </div>
                                        <div class="tbl_stngs commen_table">
                                            <table id="datatable2" class="table table-bordered dt-responsive nowrap table-hover" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>Seq #</th>
                                                    <th>Job Name</th>
                                                    <th>Creation Date</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a class="label-default" href="#/">Tiger Nixon</a></td>
                                                    <td>2018-03-29 22:18:30</td>
                                                    <td>
                                                        <a class="label-default" href="#/"> <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a class="label-default" href="#/"> <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a class="label-default" href="#/">Tiger Nixon</a></td>
                                                    <td>2018-03-29 22:18:30</td>
                                                    <td>
                                                        <a class="label-default" href="#/"> <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a class="label-default" href="#/"> <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a class="label-default" href="#/">Tiger Nixon</a></td>
                                                    <td>2018-03-29 22:18:30</td>
                                                    <td>
                                                        <a class="label-default" href="#/"> <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a class="label-default" href="#/"> <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a class="label-default" href="#/">Tiger Nixon</a></td>
                                                    <td>2018-03-29 22:18:30</td>
                                                    <td>
                                                        <a class="label-default" href="#/"> <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a class="label-default" href="#/"> <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a class="label-default" href="#/">Tiger Nixon</a></td>
                                                    <td>2018-03-29 22:18:30</td>
                                                    <td>
                                                        <a class="label-default" href="#/"> <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a class="label-default" href="#/"> <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a class="label-default" href="#/">Tiger Nixon</a></td>
                                                    <td>2018-03-29 22:18:30</td>
                                                    <td>
                                                        <a class="label-default" href="#/"> <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a class="label-default" href="#/"> <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a class="label-default" href="#/">Tiger Nixon</a></td>
                                                    <td>2018-03-29 22:18:30</td>
                                                    <td>
                                                        <a class="label-default" href="#/"> <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a class="label-default" href="#/"> <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a class="label-default" href="#/">Tiger Nixon</a></td>
                                                    <td>2018-03-29 22:18:30</td>
                                                    <td>
                                                        <a class="label-default" href="#/"> <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a class="label-default" href="#/"> <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a class="label-default" href="#/">Tiger Nixon</a></td>
                                                    <td>2018-03-29 22:18:30</td>
                                                    <td>
                                                        <a class="label-default" href="#/"> <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a class="label-default" href="#/"> <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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
<div id="newaccount" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-xl">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">New Employee</h4>
                <div class="pull-right"><a class="btn enlarge_modal" data-toggle="tooltip" data-original-title="Fullscreen"><i
                                class="mdi mdi-crop-free" aria-hidden="true"></i> </a>
                    <a class="btn dslarge_modal" data-toggle="tooltip" data-original-title="Back"><i
                                class="mdi mdi-arrow-expand-all" aria-hidden="true"></i> </a>
                </div>
            </div>
            <div class="modal-body  m-t-8">
                <div class="panel-body">
                    <div class="pills-struct mt-40">
                        <ul class="nav nav-tabs tabs-bordered">
                            <li class="nav-item">
                                <a href="#Profile" data-toggle="tab" aria-expanded="false" class="nav-link active show">
                                    Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#Location" data-toggle="tab" aria-expanded="true" class="nav-link">
                                    Location
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#Assignment" data-toggle="tab" aria-expanded="true" class="nav-link">
                                    Assignment
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#Weekly" data-toggle="tab" aria-expanded="true" class="nav-link">
                                    Weekly Schedule
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#Commision" data-toggle="tab" aria-expanded="true" class="nav-link">
                                    Commision
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#Reports" data-toggle="tab" aria-expanded="true" class="nav-link">
                                    Reports
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="Profile" class="tab-pane active in" role="tabpanel">
                                <form>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6 colp_r_15">
                                                <div class="row">
                                                    <div class="col-md-6 colp_r_15">
                                                        <div class="avatar-upload">
                                                            <div class="avatar-edit">
                                                                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                                                <label for="imageUpload"></label>
                                                            </div>
                                                            <div class="avatar-preview">
                                                                <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 colp_l_15">
                                                        <div class="emnumber_abslt">
                                                            <input class="form-control" type="text" placeholder="Enter Employee Number">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-7 pad5 ">
                                                        <div class="form-group bmd-form-group required_item">
                                                            <input type="text" class="input form-control getVal">
                                                            <label class="inputText">First Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5 pad5">
                                                        <div class="form-group bmd-form-group required_item">
                                                            <input type="text" class="input form-control">
                                                            <label class="inputText">Last Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5 pad5   position-relative">
                                                        <div class="form-group bmd-form-group selecticonbox required_item">
                                                            <input type="number" class="input  form-control" value="987">
                                                            <label class="inputText">Contact Number</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-7 pad5">
                                                        <div class="form-group bmd-form-group required_item">
                                                            <input type="text" class="input form-control">
                                                            <label class="inputText">Email</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5 pad5">
                                                        <div class="form-group bmd-form-group">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control input" autocomplete="off" id="dateofBirth">
                                                                <label class="bmd-label-floating inputText labl_insd">Date of Birth</label>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text "><i class="mdi mdi-calendar"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <div class="form-group bmd-form-group m-t-8">
                                                            <!--                                                        <label class="">Gender</label>-->
                                                            <div class="radio radio-info float_left_radio">
                                                                <input type="radio" id="customRadio1" name="customRadio">
                                                                <label for="customRadio1">Male</label>
                                                            </div>
                                                            <div class="radio radio-info">
                                                                <input type="radio" name="customRadio" id="customRadio2">
                                                                <label for="customRadio2">Female </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 pad5">
                                                        <div class="form-group bmd-form-group">
                                                            <select class="form-control">
                                                                <option value="">Single</option>
                                                                <option value="">Married</option>
                                                                <option value="">Divorced</option>
                                                                <option value="">Seperated</option>
                                                            </select>
                                                            <label class="inputText openselect2">Marital Status</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9 col-sm-8 pad5">
                                                        <div class="form-group bmd-form-group">
                                                            <select class="select select2">
                                                                <option value="">Marketing Manager</option>
                                                                <option value="">Business Development Manager</option>
                                                                <option value="">Divorced</option>
                                                                <option value="">Seperated</option>
                                                            </select>
                                                            <label class="inputText openselect2">Job Title</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 colp_l_15  m-t-15">
                                                <div class="row">
                                                    <div class="col-md-12 pad5">
                                                        <div class="form-group bmd-form-group">
                                                            <textarea rows="2" class="form-control input_textaerea tstarea"></textarea>
                                                            <label class="inputText">Address</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 pad5 ">
                                                        <div class="form-group bmd-form-group required_item">
                                                            <input type="text" class="input form-control">
                                                            <label class="inputText">City</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 pad5">
                                                        <div class="form-group bmd-form-group required_item">
                                                            <input type="text" class="input form-control">
                                                            <label class="inputText">State/ Province/ Region</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 pad5 ">
                                                        <div class="form-group bmd-form-group required_item">
                                                            <input type="text" class="input form-control">
                                                            <label class="inputText">Zipcode</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8 pad5">
                                                        <div class="form-group bmd-form-group required_item">
                                                            <select class="select select2">
                                                                <option value="">US-United State of America</option>
                                                                <option value="">IN-India</option>
                                                                <option value="">UK-United Kingdom</option>
                                                                <option value="">QA-Qatar</option>
                                                            </select>
                                                            <label class="inputText openselect2">Country</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 pad5">
                                                        <div class="form-group bmd-form-group">
                                                            <textarea rows="2" class="form-control input_textaerea tstarea"></textarea>
                                                            <label class="inputText">Notes</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8 pad5">
                                                        <div class="input-daterange" id="date-range">
                                                            <div class="row">
                                                                <div class="col-md-6 pad5">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control input" name="start" id="startDate" />
                                                                        <label class="bmd-label-floating inputText labl_insd">From</label>
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text "><i  class="fa fa-calendar"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 pad5">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control input" name="end" id="endDate" />
                                                                        <label class="bmd-label-floating inputText labl_insd">To</label>
                                                                        <div class="input-group-append">
                                                            <span class="input-group-text "><i
                                                                        class="fa fa-calendar"></i></span>
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
                                </form>
                            </div>
                            <!--////////////////////////////////////-->
                            <div id="Location" class="tab-pane" role="tabpanel">
                                <p>Assign locations where this staff member can be booked.</p>
                                <div class="col-md-12 pad5">
                                    <div class="form-group">
                                        <div class="checkbox checkbox-info">
                                            <input id="checkbox2" type="checkbox">
                                            <label for="checkbox2"> Select All</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="staff_boked_box row">
                                    <div class="col-md-4 pad5">
                                        <div class="form-group ">
                                            <div class="checkbox checkbox-info">
                                                <input id="c0" type="checkbox">
                                                <label for="c0">Item Master Location</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pad5">
                                        <div class="form-group">
                                            <div class="checkbox checkbox-info">
                                                <input id="c1" type="checkbox">
                                                <label for="c1">Jeddah Branch</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pad5">
                                        <div class="form-group">
                                            <div class="checkbox checkbox-info">
                                                <input id="c2" type="checkbox">
                                                <label for="c2">Riyadh Branch</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pad5">
                                        <div class="form-group">
                                            <div class="checkbox checkbox-info">
                                                <input id="c3" type="checkbox">
                                                <label for="c3">Riyadh Branch</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--////////////////////////////////////-->
                            <div id="Assignment" class="tab-pane" role="tabpanel">
                                <div class="col-md-7 pad5 m-t-15">
                                    <div class="row">
                                        <div class="col-sm-9 pad5">
                                            <div class="form-group bmd-form-group">
                                                <div class="input-group">
                                                    <input type="text" class="input form-control">
                                                    <label class="inputText inputText_addon">Supervisor</label>
                                                    <div class="input-group-addon cursor_pontr" data-toggle="modal" data-target="#employee_suprvsr"><i class="fa fa-search"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 pad5">
                                            <div class="form-group bmd-form-group">
                                                <input type="text" class="input form-control" readonly="readonly">
                                                <label class="inputText">Number</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--////////////////////////////////////-->
                            <div id="Reports" class="tab-pane" role="tabpanel">
                                <ul class="nav nav-tabs tabs-bordered-full">
                                    <li class="nav-item">
                                        <a href="#Today" data-toggle="tab" aria-expanded="false" class="nav-link active show">
                                            Today
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#ThisWeek" data-toggle="tab" aria-expanded="true" class="nav-link">
                                            This Week
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#LastWeek" data-toggle="tab" aria-expanded="true" class="nav-link">
                                            Last Week
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#ThisMonth" data-toggle="tab" aria-expanded="true" class="nav-link">
                                            This Month
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#LastMonth" data-toggle="tab" aria-expanded="true" class="nav-link">
                                            Last Month
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#ThisYear" data-toggle="tab" aria-expanded="true" class="nav-link">
                                            This Year
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#LastYear" data-toggle="tab" aria-expanded="true" class="nav-link">
                                            Last Year
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="Today" class="tab-pane active in" role="tabpanel">
                                        <p>Report from: Thursday, May 18, 2017 to: Thursday, May 18, 2017</p>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="card-counter primary">
                                                    <i class="fa fa-code-fork"></i>
                                                    <span class="count-numbers">12</span>
                                                    <span class="count-name">Flowz</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card-counter danger">
                                                    <i class="fa fa-ticket"></i>
                                                    <span class="count-numbers">599</span>
                                                    <span class="count-name">Instances</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card-counter success">
                                                    <i class="fa fa-database"></i>
                                                    <span class="count-numbers">6875</span>
                                                    <span class="count-name">Data</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card-counter info">
                                                    <i class="fa fa-users"></i>
                                                    <span class="count-numbers">35</span>
                                                    <span class="count-name">Users</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card-counter primary">
                                                    <i class="fa fa-code-fork"></i>
                                                    <span class="count-numbers">12</span>
                                                    <span class="count-name">Flowz</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card-counter danger">
                                                    <i class="fa fa-ticket"></i>
                                                    <span class="count-numbers">599</span>
                                                    <span class="count-name">Instances</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card-counter success">
                                                    <i class="fa fa-database"></i>
                                                    <span class="count-numbers">6875</span>
                                                    <span class="count-name">Data</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card-counter info">
                                                    <i class="fa fa-users"></i>
                                                    <span class="count-numbers">35</span>
                                                    <span class="count-name">Users</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--////////////////////////////////////-->
                                    <div id="ThisWeek" class="tab-pane" role="tabpanel">
                                        <p>Report from: Monday, May 15, 2017 to: Sunday, May 21, 2017</p>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="card-counter primary">
                                                    <i class="fa fa-code-fork"></i>
                                                    <span class="count-numbers">12</span>
                                                    <span class="count-name">Flowz</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card-counter danger">
                                                    <i class="fa fa-ticket"></i>
                                                    <span class="count-numbers">599</span>
                                                    <span class="count-name">Instances</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card-counter success">
                                                    <i class="fa fa-database"></i>
                                                    <span class="count-numbers">6875</span>
                                                    <span class="count-name">Data</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card-counter info">
                                                    <i class="fa fa-users"></i>
                                                    <span class="count-numbers">35</span>
                                                    <span class="count-name">Users</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card-counter primary">
                                                    <i class="fa fa-code-fork"></i>
                                                    <span class="count-numbers">12</span>
                                                    <span class="count-name">Flowz</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card-counter danger">
                                                    <i class="fa fa-ticket"></i>
                                                    <span class="count-numbers">599</span>
                                                    <span class="count-name">Instances</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card-counter success">
                                                    <i class="fa fa-database"></i>
                                                    <span class="count-numbers">6875</span>
                                                    <span class="count-name">Data</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card-counter info">
                                                    <i class="fa fa-users"></i>
                                                    <span class="count-numbers">35</span>
                                                    <span class="count-name">Users</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--////////////////////////////////////-->
                                </div>
                            </div>
                            <!--////////////////////////////////////-->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Save & New</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="newjobs" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal_md">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">New Jobs</h4>
                <div class="pull-right"><a class="btn enlarge_modal" data-toggle="tooltip" data-original-title="Fullscreen"><i
                                class="mdi mdi-crop-free" aria-hidden="true"></i> </a>
                    <a class="btn dslarge_modal" data-toggle="tooltip" data-original-title="Back"><i
                                class="mdi mdi-arrow-expand-all" aria-hidden="true"></i> </a>
                </div>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    <div class="pills-struct mt-40">
                        <div class="tab-content">
                            <div id="Profile" class="tab-pane  active in" role="tabpanel">
                                <form>
                                    <div class="col-md-12">
                                        <div class="row m-t-15">
                                            <div class="col-sm-3 pad5 ">
                                                <div class="form-group bmd-form-group">
                                                    <input type="text" class="input form-control">
                                                    <label class="inputText">Seq. No</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 pad5">
                                                <div class="form-group bmd-form-group">
                                                    <input type="text" class="input form-control">
                                                    <label class="inputText">Job Name</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Save & New</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="employee_suprvsr" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Select Employee Supervisor</h4>
                <div class="pull-right"><a class="btn enlarge_modal" data-toggle="tooltip" data-original-title="Fullscreen"><i
                                class="mdi mdi-crop-free" aria-hidden="true"></i> </a>
                    <a class="btn dslarge_modal" data-toggle="tooltip" data-original-title="Back"><i
                                class="mdi mdi-arrow-expand-all" aria-hidden="true"></i> </a>
                </div>
            </div>
            <div class="modal-body modal_maxheigt">
                <div class="panel-body">
                    <div class="pills-struct mt-40">
                        <div class="col-md-12">
                            <div class="row m-t-15">
                                <table id="datatable3" class="table table-bordered dt-responsive nowrap table-hover" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>ID #</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><a class="label-default" href="#/">Tiger Nixon</a></td>
                                        <td>2018-03-29 22:18:30</td>
                                        <td>+966592826784</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><a class="label-default" href="#/">Tiger Nixon</a></td>
                                        <td>2018-03-29 22:18:30</td>
                                        <td>+966592826784</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><a class="label-default" href="#/">Tiger Nixon</a></td>
                                        <td>2018-03-29 22:18:30</td>
                                        <td>+966592826784</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><a class="label-default" href="#/">Tiger Nixon</a></td>
                                        <td>2018-03-29 22:18:30</td>
                                        <td>+966592826784</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><a class="label-default" href="#/">Tiger Nixon</a></td>
                                        <td>2018-03-29 22:18:30</td>
                                        <td>+966592826784</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><a class="label-default" href="#/">Tiger Nixon</a></td>
                                        <td>2018-03-29 22:18:30</td>
                                        <td>+966592826784</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><a class="label-default" href="#/">Tiger Nixon</a></td>
                                        <td>2018-03-29 22:18:30</td>
                                        <td>+966592826784</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><a class="label-default" href="#/">Tiger Nixon</a></td>
                                        <td>2018-03-29 22:18:30</td>
                                        <td>+966592826784</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><a class="label-default" href="#/">Tiger Nixon</a></td>
                                        <td>2018-03-29 22:18:30</td>
                                        <td>+966592826784</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Save & New</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Save</button>
                </div>
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
        $('#datatable2').DataTable();
        $('#datatable3').DataTable();
        $('#responsive-datatable').DataTable();

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imageUpload").change(function() {
            readURL(this);
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $('#startDate').datetimepicker({
            format: 'DD-MM-YYYY'
        });
        $('#endDate').datetimepicker({
            format: 'DD-MM-YYYY',
            useCurrent: false //Important! See issue #1075
        });
        $("#startDate").on("dp.change", function(e) {
            $('#endDate').data("DateTimePicker").minDate(e.date);
        });
        $("#endDate").on("dp.change", function(e) {
            $('#startDate').data("DateTimePicker").maxDate(e.date);
        });
        $('#dateofBirth').datetimepicker({
            format: 'DD-MM-YYYY'
        });
    });
</script>
<script>
    var langArray = [];
    $('.vodiapicker option').each(function() {
        var img = $(this).attr("data-thumbnail");
        var text = this.innerText;
        var value = $(this).val();
        var item = '<li><img src="' + img + '" alt="" value="' + value + '"/><span>' + text + '</span></li>';
        langArray.push(item);
    })

    $('#a').html(langArray);

    //Set the button value to the first el of the array
    $('.btn-select').html(langArray[0]);
    $('.btn-select').attr('value', 'en');

    //change button stuff on click
    $('#a li').click(function() {
        var img = $(this).find('img').attr("src");
        var value = $(this).find('img').attr('value');
        var text = this.innerText;
        var item = '<li><img src="' + img + '" alt="" /><span>' + text + '</span></li>';
        $('.btn-select').html(item);
        $('.btn-select').attr('value', value);
        $(".b").toggle();
        //console.log(value);
    });

    $(".btn-select").click(function() {
        $(".b").toggle();
    });

    //check local storage for the lang
    var sessionLang = localStorage.getItem('lang');
    if (sessionLang) {
        //find an item with value of sessionLang
        var langIndex = langArray.indexOf(sessionLang);
        $('.btn-select').html(langArray[langIndex]);
        $('.btn-select').attr('value', sessionLang);
    } else {
        var langIndex = langArray.indexOf('ch');
        console.log(langIndex);
        $('.btn-select').html(langArray[langIndex]);
        //$('.btn-select').attr('value', 'en');
    }
</script>
</body>
</html>
