<?php include('header.php') ?>
<link href="css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="">
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
                                    <div class="mainiconbox"> <img src="images/dummyuser.jpg" class="profileview">
                                    </div>
                                    <h4 class="m-t-0 header-title">
                                        <div class="breadcrumbs ng-scope">
                                            <ul>
                                                <li><a href="index.php">Home</a></li>
                                                <li><a>Employee</a></li>
                                            </ul>
                                            <div>16489479</div>
                                        </div>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-box ">
                            <div class="col-12 p-t-15">
                                <form>
                                    <h4 data-toggle="collapse" href="#basic" class="sub_hdng_edit"><i
                                                class="fa fa-chevron-down"></i> Basic Detaiils</h4>
                                    <div id="basic" class="panel-collapse collapse show">
                                        <div class="m-t-30 m-b-15 acrdn_panel">
                                            <div class="row">
                                                <div class="col-md-6 colp_r_15">
                                                    <div class="row">

                                                        <div class="col-sm-6 pad5 ">
                                                            <div class="form-group bmd-form-group required_item">
                                                                <input type="text" class="input form-control getVal" >
                                                                <label class="inputText">First Name</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 pad5">
                                                            <div class="form-group bmd-form-group required_item">
                                                                <input type="text" class="input form-control">
                                                                <label class="inputText">Last Name</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-3 col-lg-4  pad5   position-relative">
                                                            <div class="form-group bmd-form-group selecticonbox required_item" >
                                                                <input type="number"
                                                                       class="input  form-control" value="987">
                                                                <label class="inputText">Contact Number</label>
                                                            </div>
                                                        </div>


                                                        <div class="col-xl-4 col-lg-4 pad5">
                                                            <div class="form-group bmd-form-group">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control input"
                                                                           autocomplete="off" id="dateofBirth">
                                                                    <label class="bmd-label-floating inputText labl_insd">Date
                                                                        of Birth</label>
                                                                    <div class="input-group-append">
                                                                    <span class="input-group-text "><i
                                                                                class="fa fa-calendar"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-5 col-lg-4">
                                                            <div class="form-group bmd-form-group m-t-8">

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


                                                        <div class="col-md-9 col-sm-8 pad5">

                                                            <div class="form-group">
                                                                <div class="form-group bmd-form-group ">
                                                                    <select class="slect select2">
                                                                        <option>Marketing Manager</option>
                                                                        <option>Business Development Manager</option>
                                                                        <option>Divorced</option>
                                                                        <option>Seperated</option>
                                                                    </select>
                                                                    <label class="inputText openselect2">Employee Type</label>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 colp_l_15">
                                                    <div class="row">

                                                        <div class="col-sm-12 pad5">
                                                            <div class="form-group bmd-form-group">
                                                            <textarea rows="2"
                                                                      class="form-control input_textaerea tstarea"></textarea>
                                                                <label class="inputText">Notes</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-8 pad5">
                                                            <div class="input-daterange" id="date-range">
                                                                <div class="row">
                                                                    <div class="col-md-6 pad5">
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control input"
                                                                                   name="start" id="startDate"/>
                                                                            <label class="bmd-label-floating inputText labl_insd">From</label>
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text "><i  class="fa fa-calendar"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 pad5">
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control input"
                                                                                   name="end" id="endDate"/>
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
                                    </div>
                                    <div class="clearfix"></div>
                                    <!--**************************************************************************-->
                                    <h4 data-toggle="collapse" href="#work" class="sub_hdng_edit"><i class="fa fa-chevron-down"></i> Work Detaiils</h4>
                                    <div id="work" class="panel-collapse collapse show ">
                                        <div class="m-t-30 m-b-15 col-12">
                                            <div class="row">
                                                <div class="col-md-6 colp_r_15">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <div class="form-group bmd-form-group ">
                                                                    <input type="text" class="input form-control">
                                                                    <label class="inputText">Department</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <div class="form-group bmd-form-group">
                                                                    <input type="text" class="input form-control">
                                                                    <label class="inputText">Location</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 colp_l_15">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                                            <div class="form-group">
                                                                <div class="form-group bmd-form-group ">
                                                                    <select class="slect select2">
                                                                        <option>Corporate Headquarters</option>
                                                                        <option>Harsco Industrial</option>
                                                                        <option>Harsco Infrastructure</option>
                                                                        <option>Harsco Metals</option>
                                                                        <option>Harsco Metals</option>
                                                                        <option>Harsco Minerals</option>
                                                                        <option>Harsco Rail</option>
                                                                    </select>
                                                                    <label class="inputText openselect2">Reporting To
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5 col-md-5 col-sm-5">
                                                            <div class="form-group">
                                                                <div class="form-group bmd-form-group">
                                                                    <input type="text" class="input form-control">
                                                                    <label class="inputText openselect2">Title</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 colp_r_15">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-7 col-sm-6">
                                                            <div class="form-group">
                                                                <div class="form-group bmd-form-group ">
                                                                    <input type="text" class="input form-control">
                                                                    <label class="inputText">Source of Hire</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-5 col-sm-6">
                                                            <div class="form-group">
                                                                <div class="form-group bmd-form-group">
                                                                    <div class="input-group date">
                                                                        <input type="text" class="input form-control" id="joiningDate">
                                                                        <span class="input-group-addon"> <i
                                                                                    class="fa fa-calendar"></i> </span>
                                                                        <label class="inputText">Date of Joining</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 colp_l_15">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-7 col-sm-6">
                                                            <div class="form-group">
                                                                <div class="form-group bmd-form-group ">
                                                                    <div class="form-group bmd-form-group">
                                                                        <input type="text" class="input form-control">
                                                                        <label class="inputText ">Work Location</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-5 col-sm-6">
                                                            <div class="form-group">
                                                                <div class="form-group bmd-form-group">
                                                                    <select class="form-control">
                                                                        <option>Active</option>
                                                                        <option>Active</option>
                                                                        <option>Active</option>
                                                                    </select>
                                                                    <label class="inputText">Employee Status</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 colp_r_15">
                                                    <div class="row">
                                                        <div class="col-lg-5 col-md-12 col-sm-12">
                                                            <div class="form-group">
                                                                <div class="form-group bmd-form-group ">
                                                                    <select class="slect select2">
                                                                        <option>Corporate Headquarters</option>
                                                                        <option>Harsco Industrial</option>
                                                                        <option>Harsco Infrastructure</option>
                                                                        <option>Harsco Metals</option>
                                                                        <option>Harsco Metals</option>
                                                                        <option>Harsco Minerals</option>
                                                                        <option>Harsco Rail</option>
                                                                    </select>
                                                                    <label class="inputText openselect2">Employee Type</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-8 col-sm-12">
                                                            <div class="form-group">
                                                                <div class="form-group bmd-form-group">
                                                                    <input type="text" class="input form-control">
                                                                    <label class="inputText">Work Phone</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-4 col-sm-12">
                                                            <div class="form-group">
                                                                <div class="form-group bmd-form-group">
                                                                    <div class="input-group date">
                                                                        <input type="text" class="input form-control">
                                                                        <label class="inputText">Extension</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <!--*****************************************************-->
                                    <h4 data-toggle="collapse" href="#Personal" class="sub_hdng_edit"><i class="fa fa-chevron-down"></i> Personal Detaiils</h4>
                                    <div id="Personal" class="panel-collapse collapse show">
                                        <div class="m-t-30 m-b-15 col-12">
                                            <div class="row">
                                                <div class="col-md-6 colp_r_15">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-5 col-sm-5">
                                                            <div class="form-group">
                                                                <div class="form-group bmd-form-group ">
                                                                    <input type="text" class="input form-control">
                                                                    <label class="inputText">Mobile Phone</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8 col-md-7 col-sm-7">
                                                            <div class="form-group">
                                                                <div class="form-group bmd-form-group">
                                                                    <input type="text" class="input form-control">
                                                                    <label class="inputText">Other Email</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-5 col-sm-9">
                                                            <div class="form-group">
                                                                <div class="form-group bmd-form-group ">
                                                                    <select class="form-control">
                                                                        <option>Single</option>
                                                                        <option>Single</option>
                                                                        <option>Single</option>
                                                                    </select>
                                                                    <label class="inputText">Marital Status</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-sm-3">
                                                            <div class="form-group">
                                                                <div class="form-group bmd-form-group">
                                                                    <input type="text" class="input form-control">
                                                                    <label class="inputText">Age</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 colp_r_15">
                                                    <div class="row">
                                                        <div class="col-md-12 pad5">
                                                            <div class="form-group bmd-form-group">
                                                                <textarea rows="2" class="form-control input_textaerea tstarea"></textarea>
                                                                <label class="inputText">Address</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
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
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4 pad5 ">
                                                            <div class="form-group bmd-form-group required_item">
                                                                <input type="text" class="input form-control">
                                                                <label class="inputText">Zipcode</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8 pad5">
                                                            <div class="form-group bmd-form-group required_item">
                                                                <select class="slect select2">
                                                                    <option>US-United State of America</option>
                                                                    <option>IN-India</option>
                                                                    <option>UK-United Kingdom</option>
                                                                    <option>QA-Qatar</option>
                                                                </select>


                                                                <label class="inputText openselect2">Country</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <!--**************************************************************************-->
                                    <div class="clearfix"></div>

                                    <h4 data-toggle="collapse" href="#location" class="sub_hdng_edit"><i class="fa fa-chevron-down"></i>Location</h4>
                                    <div id="location" class="panel-collapse collapse show ">
                                        <div class="m-t-30 m-b-15 col-12">
                                            <p>Assigned locations where this staff member can be booked.</p>
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
                                    </div>
                                    <div class="clearfix"></div>
                                    <!--*****************************************************-->
                                    <div class="clearfix"></div>
                                    <h4 data-toggle="collapse" href="#assignment" class="sub_hdng_edit"><i class="fa fa-chevron-down"></i>Assignment</h4>
                                    <div id="assignment" class="panel-collapse collapse show ">
                                        <div class="m-t-30 m-b-15 col-12">



                                            <div class="col-md-6 pad5 m-t-15 colp_r_15">
                                                <div class="row">
                                                    <div class="col-sm-9">
                                                        <div class="form-group bmd-form-group">
                                                            <div class="input-group">
                                                                <input type="text" class="input form-control">
                                                                <label  class="inputText inputText_addon">Supervisor</label>
                                                                <div class="input-group-addon cursor_pontr" data-toggle="modal"
                                                                     data-target="#employee_suprvsr"><i class="fa fa-search"></i>
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
                                    </div>
                                    <!--*****************************************************-->
                                    <!--*****************************************************-->
                                    <div class="clearfix"></div>
                                    <h4 data-toggle="collapse" href="#resume" class="sub_hdng_edit"><i class="fa fa-chevron-down"></i>Resume</h4>
                                    <div id="resume" class="panel-collapse collapse show ">
                                        <div class="m-t-30 m-b-15 col-12">

                                            <h4 class="ternary_title">Attachment Summery Information</h4>
                                            <div class="row">
                                            <div class="col-md-6 colp_r_15">

                                                <div class="row m-t-8">
                                                    <div class="col-lg-9 col-md-3 col-sm-3">
                                                        <div class="form-group">
                                                            <div class="form-group bmd-form-group">
                                                                <input type="text" class="input form-control">
                                                                <label class="inputText">Title</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-5 col-sm-9">
                                                        <div class="form-group">
                                                            <div class="form-group bmd-form-group ">
                                                                <select class="form-control">
                                                                    <option>Resume</option>
                                                                    <option>Resume</option>

                                                                </select>
                                                                <label class="inputText">Category</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 colp_l_15">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <div class="form-group bmd-form-group">
                                                                <textarea class="input_textaerea form-control"></textarea>
                                                                <label class="inputText">Description</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <h4 class="ternary_title">Define Attachment</h4>

                                            <a class="resume_button" data-toggle="modal" data-target="#resume_modal"> + Add File</a>
                                            <br>

                                        </div>
                                        </div>

                                            <!--**************************************************************************-->

                                    <h4 data-toggle="collapse" href="#Summery" class="sub_hdng_edit"><i class="fa fa-chevron-down"></i> Summery</h4>
                                    <div id="Summery" class="panel-collapse collapse show">
                                        <div class="m-t-30 m-b-15 col-12">

                                            <div class="row">
                                                <div class="col-md-6 colp_r_15">
                                                    <div class="form-group">
                                                        <div class="form-group bmd-form-group ">
                                                            <textarea class="input_textaerea form-control" rows="1"></textarea>
                                                            <label class="inputText openselect2">Job Description</label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 colp_l_15">
                                                    <div class="form-group">
                                                        <div class="form-group bmd-form-group ">
                                                            <textarea class="input_textaerea form-control" rows="1"></textarea>
                                                            <label class="inputText">About Me</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 colp_r_15">
                                                    <div class="form-group">
                                                        <div class="form-group bmd-form-group ">
                                                            <textarea class="input_textaerea form-control" rows="1"></textarea>
                                                            <label class="inputText openselect2">Ask Me About/Expertise</label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 colp_l_15">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-5 col-sm-5">
                                                            <div class="form-group">
                                                                <div class="form-group bmd-form-group">
                                                                    <div class="input-group date">
                                                                        <input type="text" class="input form-control" id="dateofExit">
                                                                        <span class="input-group-addon"> <i
                                                                                    class="fa fa-calendar"></i> </span>
                                                                        <label class="inputText">Date of Exit</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-5 col-sm-5">
                                                            <div class="form-group">
                                                                <div class="form-group bmd-form-group">
                                                                    <select class="input form-control">
                                                                        <option>Male</option>
                                                                        <option>Female</option>
                                                                        <option>Other</option>
                                                                    </select>
                                                                    <label class="inputText">Gender</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!--*****************************************************-->
                                    <div class="clearfix"></div>
                                    <h4 data-toggle="collapse" href="#workExperience" class="sub_hdng_edit"><i class="fa fa-chevron-down"></i> Work Experience</h4>
                                    <div id="workExperience" class="panel-collapse collapse position-relative">
                                        <div class="tbl_stngs commen_table">
                                            <div class="table_createNewBtn"><a data-toggle="modal" data-target="#create_workExperience"> + Create New</a></div>
                                            <table id="workExperiencedatatable"
                                                   class="table table-bordered dt-responsive nowrap table-hover"
                                                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>

                                                    <th>Sr #</th>
                                                    <th>Title</th>
                                                    <th>Start Date</th>
                                                    <th>Competion Date</th>
                                                    <th>Status</th>
                                                    <th>Institute</th>
                                                    <th>Type</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--*****************************************************-->
                                    <div class="clearfix"></div>
                                    <h4 data-toggle="collapse" href="#education" class="sub_hdng_edit"><i class="fa fa-chevron-down"></i> Education</h4>
                                    <div id="education" class="panel-collapse collapse position-relative">
                                        <div class="tbl_stngs commen_table">
                                            <div class="table_createNewBtn"><a data-toggle="modal" data-target="#create_Education"> + Create New</a></div>
                                            <table id="educationdatatable"
                                                   class="table table-bordered dt-responsive nowrap table-hover"
                                                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>

                                                    <th>Sr #</th>
                                                    <th>Title</th>
                                                    <th>Start Date</th>
                                                    <th>Competion Date</th>
                                                    <th>Status</th>
                                                    <th>Institute</th>
                                                    <th>Type</th>
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
                                                    <td>2</td>
                                                    <td><a class="label-default" href="#/">Garrett Winters</a></td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>
                                                        <a class="label-default" href="employee-view.php"> <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a class="label-default" href="#/"> <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td><a class="label-default" href="#/">Ashton Cox</a></td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>
                                                        <a class="label-default" href="employee-view.php"> <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a class="label-default" href="#/"> <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td><a class="label-default" href="#/">Cedric Kelly</a></td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>
                                                        <a class="label-default" href="employee-view.php"> <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a class="label-default" href="#/"> <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td><a class="label-default" href="#/">Airi Satou</a></td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>
                                                        <a class="label-default" href="employee-view.php"> <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a class="label-default" href="#/"> <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>10</td>
                                                    <td><a class="label-default" href="#/">Sonya Frost</a></td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>
                                                        <a class="label-default" href="employee-view.php"> <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a class="label-default" href="#/"> <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td><a class="label-default" href="#/">Jena Gaines</a></td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>
                                                        <a class="label-default" href="employee-view.php"> <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a class="label-default" href="#/"> <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td><a class="label-default" href="#/">Quinn Flynn</a></td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>
                                                        <a class="label-default" href="employee-view.php"> <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a class="label-default" href="#/"> <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td><a class="label-default" href="#/">Charde Marshall</a></td>
                                                    <td>Regional Director</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>
                                                        <a class="label-default" href="employee-view.php"> <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a class="label-default" href="#/"> <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td><a class="label-default" href="#/">Haley Kennedy</a></td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>
                                                        <a class="label-default" href="employee-view.php"> <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a class="label-default" href="#/"> <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>15</td>
                                                    <td><a class="label-default" href="#/">Tatyana Fitzpatrick</a></td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>
                                                        <a class="label-default" href="employee-view.php"> <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a class="label-default" href="#/"> <i class="fa fa-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td><a class="label-default" href="#/">Michael Silva</a></td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>
                                                        <a class="label-default" href="employee-view.php"> <i class="fa fa-pencil"></i>
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
                                    <!--*****************************************************-->
                                    <div class="clearfix"></div>
                                    <h4 data-toggle="collapse" href="#dependend" class="sub_hdng_edit"><i class="fa fa-chevron-down"></i> Dependend</h4>
                                    <div id="dependend" class="panel-collapse collapse position-relative">
                                        <div class="tbl_stngs commen_table">
                                            <div class="table_createNewBtn"><a data-toggle="modal" data-target="#create_dependend"> + Create New</a></div>
                                            <table id="dependenddatatable"
                                                   class="table table-bordered dt-responsive nowrap table-hover"
                                                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>

                                                    <th>Sr #</th>
                                                    <th>Title</th>
                                                    <th>Start Date</th>
                                                    <th>Competion Date</th>
                                                    <th>Status</th>
                                                    <th>Institute</th>
                                                    <th>Type</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--*****************************************************-->

                                    <div class="clearfix"></div>
                                      <h4 class="secondary_title">Related Forms</h4>
                                    <div class="clearfix"></div>
                                    <h4 data-toggle="collapse" href="#asset" class="sub_hdng_edit"><i class="fa fa-chevron-down"></i> Asset</h4>
                                    <div id="asset" class="panel-collapse collapse position-relative">
                                        <div class="tbl_stngs commen_table">
                                            <div class="table_createNewBtn"><a data-toggle="modal" data-target="#create_dependend"> + Create New</a></div>
                                            <table id="assetdatatable"
                                                   class="table table-bordered dt-responsive nowrap table-hover"
                                                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>

                                                    <th>Sr #</th>
                                                    <th>Title</th>
                                                    <th>Start Date</th>
                                                    <th>Competion Date</th>
                                                    <th>Status</th>
                                                    <th>Institute</th>
                                                    <th>Type</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                    <h4 data-toggle="collapse" href="#benefit" class="sub_hdng_edit"><i class="fa fa-chevron-down"></i> Benefit</h4>
                                    <div id="benefit" class="panel-collapse collapse position-relative">
                                        <div class="tbl_stngs commen_table">
                                            <div class="table_createNewBtn"><a data-toggle="modal" data-target="#create_dependend"> + Create New</a></div>
                                            <table id="benefitdatatable"
                                                   class="table table-bordered dt-responsive nowrap table-hover"
                                                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>

                                                    <th>Sr #</th>
                                                    <th>Title</th>
                                                    <th>Start Date</th>
                                                    <th>Competion Date</th>
                                                    <th>Status</th>
                                                    <th>Institute</th>
                                                    <th>Type</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--*****************************************************-->

                                    <div class="clearfix"></div>
                                    <h4 data-toggle="collapse" href="#CompanyPolicy" class="sub_hdng_edit"><i class="fa fa-chevron-down"></i> Company Policy</h4>
                                    <div id="CompanyPolicy" class="panel-collapse collapse position-relative">
                                        <div class="tbl_stngs commen_table">
                                            <div class="table_createNewBtn"><a data-toggle="modal" data-target="#create_dependend"> + Create New</a></div>
                                            <table id="CompanyPolicydatatable"
                                                   class="table table-bordered dt-responsive nowrap table-hover"
                                                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>

                                                    <th>Sr #</th>
                                                    <th>Title</th>
                                                    <th>Start Date</th>
                                                    <th>Competion Date</th>
                                                    <th>Status</th>
                                                    <th>Institute</th>
                                                    <th>Type</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--*****************************************************-->

                                    <div class="clearfix"></div>
                                    <h4 data-toggle="collapse" href="#ExitDetails" class="sub_hdng_edit"><i class="fa fa-chevron-down"></i> Exit Details</h4>
                                    <div id="ExitDetails" class="panel-collapse collapse position-relative">
                                        <div class="tbl_stngs commen_table">
                                            <div class="table_createNewBtn"><a data-toggle="modal" data-target="#create_dependend"> + Create New</a></div>
                                            <table id="ExitDetailsdatatable"
                                                   class="table table-bordered dt-responsive nowrap table-hover"
                                                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>

                                                    <th>Sr #</th>
                                                    <th>Title</th>
                                                    <th>Start Date</th>
                                                    <th>Competion Date</th>
                                                    <th>Status</th>
                                                    <th>Institute</th>
                                                    <th>Type</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--*****************************************************-->
                                    <div class="clearfix"></div>
                                    <h4 data-toggle="collapse" href="#training" class="sub_hdng_edit"><i class="fa fa-chevron-down"></i> Training Details</h4>
                                    <div id="training" class="panel-collapse collapse position-relative">
                                        <div class="tbl_stngs commen_table">
                                            <div class="table_createNewBtn"><a data-toggle="modal" data-target="#create_dependend"> + Create New</a></div>
                                            <table id="trainingdatatable"
                                                   class="table table-bordered dt-responsive nowrap table-hover"
                                                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>

                                                    <th>Sr #</th>
                                                    <th>Title</th>
                                                    <th>Start Date</th>
                                                    <th>Competion Date</th>
                                                    <th>Status</th>
                                                    <th>Institute</th>
                                                    <th>Type</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--*****************************************************-->
                                    <div class="clearfix"></div>
                                    <h4 data-toggle="collapse" href="#trainingFeedback" class="sub_hdng_edit"><i class="fa fa-chevron-down"></i> Training Feedback</h4>
                                    <div id="trainingFeedback" class="panel-collapse collapse position-relative">
                                        <div class="tbl_stngs commen_table">
                                            <div class="table_createNewBtn"><a data-toggle="modal" data-target="#create_dependend"> + Create New</a></div>
                                            <table id="trainingFeedbackdatatable"
                                                   class="table table-bordered dt-responsive nowrap table-hover"
                                                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>

                                                    <th>Sr #</th>
                                                    <th>Title</th>
                                                    <th>Start Date</th>
                                                    <th>Competion Date</th>
                                                    <th>Status</th>
                                                    <th>Institute</th>
                                                    <th>Type</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--*****************************************************-->
                                    <div class="clearfix"></div>
                                    <h4 data-toggle="collapse" href="#trainingregistration" class="sub_hdng_edit"><i class="fa fa-chevron-down"></i> Training Registration</h4>
                                    <div id="trainingregistration" class="panel-collapse collapse position-relative">
                                        <div class="tbl_stngs commen_table">
                                            <div class="table_createNewBtn"><a data-toggle="modal" data-target="#create_dependend"> + Create New</a></div>
                                            <table id="trainingregistration_datatable"
                                                   class="table table-bordered dt-responsive nowrap table-hover"
                                                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>

                                                    <th>Sr #</th>
                                                    <th>Title</th>
                                                    <th>Start Date</th>
                                                    <th>Competion Date</th>
                                                    <th>Status</th>
                                                    <th>Institute</th>
                                                    <th>Type</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--*****************************************************-->
                                    <div class="clearfix"></div>
                                    <h4 data-toggle="collapse" href="#travel_expense" class="sub_hdng_edit"><i class="fa fa-chevron-down"></i> Travel Expense</h4>
                                    <div id="travel_expense" class="panel-collapse collapse position-relative">
                                        <div class="tbl_stngs commen_table">
                                            <div class="table_createNewBtn"><a data-toggle="modal" data-target="#create_dependend"> + Create New</a></div>
                                            <table id="travel_expense_datatable"
                                                   class="table table-bordered dt-responsive nowrap table-hover"
                                                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>

                                                    <th>Sr #</th>
                                                    <th>Title</th>
                                                    <th>Start Date</th>
                                                    <th>Competion Date</th>
                                                    <th>Status</th>
                                                    <th>Institute</th>
                                                    <th>Type</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--*****************************************************-->

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info pull-left">Save</button>
                                    </div>
                                </form>
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

<div id="create_Education" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-xl">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Education</h4>
                <div class="pull-right"><a class="btn enlarge_modal" data-toggle="tooltip"
                                           data-original-title="Fullscreen"><i
                                class="mdi mdi-crop-free" aria-hidden="true"></i> </a>
                    <a class="btn dslarge_modal" data-toggle="tooltip" data-original-title="Back"><i
                                class="mdi mdi-arrow-expand-all" aria-hidden="true"></i> </a>
                </div>
            </div>
            <div class="modal-body">

                <div class="panel-body">
                    <div class="pills-struct mt-40">


                        <div class="col-md-12">
                            <div class="row m-t-15">
                                <div class="col-md-6 colp_r_15">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 pad5 ">
                                            <div class="form-group bmd-form-group">
                                                <select class="input form-control">
                                                    <option>Graduate</option>
                                                    <option>High School</option>
                                                    <option>Post Graduation</option>
                                                </select>
                                                <label class="inputText">Type</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-8 pad5">
                                            <div class="form-group bmd-form-group">
                                                <input type="text" class="input form-control">
                                                <label class="inputText">Title</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6 colp_l_15">
                                    <div class="row">
                                        <div class="col-sm-10 pad5">

                                                <div class="row">
                                                    <div class="col-md-6 pad5">
                                                        <div class="form-group bmd-form-group">
                                                        <div class="input-group ">
                                                            <input type="text" class="form-control input" name="start" id="coursestartDate">
                                                            <label class="bmd-label-floating inputText labl_insd">Course Start Date</label>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text "><i class="fa fa-calendar"></i></span>
                                                            </div>
                                                        </div>
                                                    </div></div>
                                                    <div class="col-md-6 pad5">
                                                        <div class="form-group bmd-form-group">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control input" name="end" id="copleteDate">
                                                            <label class="bmd-label-floating inputText labl_insd">Course Completion Date</label>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text "><i class="fa fa-calendar"></i></span>
                                                            </div>
                                                        </div>
                                                        </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 colp_r_15">
                                    <div class="row">
                                        <div class="col-sm-12 pad5 ">
                                            <div class="form-group bmd-form-group">
                                                <input type="text" class="input form-control">
                                                <label class="inputText">Institute/University</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 colp_l_15">
                                    <div class="row">
                                        <div class="col-sm-4 pad5 ">
                                            <div class="form-group bmd-form-group">
                                                <select class="input form-control">
                                                    <option>Complete</option>
                                                    <option>Incomplete</option>
                                                    <option>Ongoing</option>
                                                </select>
                                                <label class="inputText">Status</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 pad5">
                                            <div class="form-group bmd-form-group">
                                                <input type="text" class="input form-control">
                                                <label class="inputText">Grade</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 pad5 m-t-8">
                                            <div class="checkbox checkbox-info">
                                                <input id="FullTime" type="checkbox">
                                                <label for="FullTime">
                                                    Full-Time
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                            <div class="col-sm-6 pad5 colp_r_15">
                                <div class="form-group bmd-form-group">
                                                            <textarea rows="2"
                                                                      class="form-control input_textaerea tstarea"></textarea>
                                    <label class="inputText">Comments</label>
                                </div>
                            </div>
                            </div>

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
<div id="resume_modal" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Education</h4>
                <div class="pull-right"><a class="btn enlarge_modal" data-toggle="tooltip"
                                           data-original-title="Fullscreen"><i
                                class="mdi mdi-crop-free" aria-hidden="true"></i> </a>
                    <a class="btn dslarge_modal" data-toggle="tooltip" data-original-title="Back"><i
                                class="mdi mdi-arrow-expand-all" aria-hidden="true"></i> </a>
                </div>
            </div>
            <div class="modal-body">

                <div class="panel-body">
                    <div class="pills-struct mt-40">


                        <div class="row">

                            <div class="col-md-11 colp_r_15">

                                <div class="row m-t-8">
                                    <div class="col">
                                        Type
                                    </div>

                                    <div class="col-md-11">


                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="col-md-12">
                                                <div class="radio radio-info">
                                                    <input type="radio" id="resumeFile" name="resume" checked="checked">
                                                    <label for="resumeFile">File</label>
                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="radio radio-info">
                                                    <input type="radio" id="resumeurl" name="resume">
                                                    <label for="resumeurl">URL</label>
                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="radio radio-info">
                                                    <input type="radio" id="resumeText" name="resume">
                                                    <label for="resumeText">Text</label>
                                                </div>
                                                </div>
                                            </div>
                                           <div class="col-lg-7 col-md-12 col-sm-12 hide resumeurlField">
                                                <div class="form-group">
                                                    <div class="form-group bmd-form-group">
                                                        <input type="text" class="input form-control">
                                                        <label class="inputText">URL</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-7 col-md-12 col-sm-12 hide resumeTextField">
                                                <div class="form-group">
                                                    <div class="form-group bmd-form-group ">
                                                        <textarea class="input_textaerea form-control"></textarea>
                                                        <label class="inputText">Text</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-12 col-sm-12 resumeFileField">
                                                <div class="form-group">
                                            <div class="file-upload">


                                                <div class="image-upload-wrap">
                                                    <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                                                    <div class="drag-text">
                                                        <h3>Drag and drop a file or select File</h3>
                                                    </div>
                                                </div>
                                                <div class="file-upload-content">
                                                    <img class="file-upload-image" src="#" alt="your image" />
                                                    <div class="image-title-wrap">
                                                        <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            </div>




                                        </div>

                                        <div class="row">
                                       </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>


<div id="create_workExperience" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-xl">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Education</h4>
                <div class="pull-right"><a class="btn enlarge_modal" data-toggle="tooltip"
                                           data-original-title="Fullscreen"><i
                                class="mdi mdi-crop-free" aria-hidden="true"></i> </a>
                    <a class="btn dslarge_modal" data-toggle="tooltip" data-original-title="Back"><i
                                class="mdi mdi-arrow-expand-all" aria-hidden="true"></i> </a>
                </div>
            </div>
            <div class="modal-body">

                <div class="panel-body">
                    <div class="pills-struct mt-40">


                        <div id="work" class="panel-collapse collapse show ">
                            <div class="m-t-30 m-b-15 col-12">
                                <div class="row">
                                    <div class="col-md-6 colp_r_15">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <div class="form-group bmd-form-group ">
                                                        <input type="text" class="input form-control">
                                                        <label class="inputText">Department</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <div class="form-group bmd-form-group">
                                                        <input type="text" class="input form-control">
                                                        <label class="inputText">Location</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 colp_l_15">
                                        <div class="row">
                                            <div class="col-lg-7 col-md-7 col-sm-7">
                                                <div class="form-group">
                                                    <div class="form-group bmd-form-group ">
                                                        <select class="slect select2">
                                                            <option>Corporate Headquarters</option>
                                                            <option>Harsco Industrial</option>
                                                            <option>Harsco Infrastructure</option>
                                                            <option>Harsco Metals</option>
                                                            <option>Harsco Metals</option>
                                                            <option>Harsco Minerals</option>
                                                            <option>Harsco Rail</option>
                                                        </select>
                                                        <label class="inputText openselect2">Reporting To
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-5 col-sm-5">
                                                <div class="form-group">
                                                    <div class="form-group bmd-form-group">
                                                        <input type="text" class="input form-control">
                                                        <label class="inputText openselect2">Title</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 colp_r_15">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-7 col-sm-6">
                                                <div class="form-group">
                                                    <div class="form-group bmd-form-group ">
                                                        <input type="text" class="input form-control">
                                                        <label class="inputText">Source of Hire</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-5 col-sm-6">
                                                <div class="form-group">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="input-group date">
                                                            <input type="text" class="input form-control" id="joiningDate">
                                                            <span class="input-group-addon"> <i
                                                                        class="fa fa-calendar"></i> </span>
                                                            <label class="inputText">Date of Joining</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 colp_l_15">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-7 col-sm-6">
                                                <div class="form-group">
                                                    <div class="form-group bmd-form-group ">
                                                        <div class="form-group bmd-form-group">
                                                            <input type="text" class="input form-control">
                                                            <label class="inputText ">Work Location</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-5 col-sm-6">
                                                <div class="form-group">
                                                    <div class="form-group bmd-form-group">
                                                        <select class="form-control">
                                                            <option>Active</option>
                                                            <option>Active</option>
                                                            <option>Active</option>
                                                        </select>
                                                        <label class="inputText">Employee Status</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 colp_r_15">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-group bmd-form-group ">
                                                        <select class="slect select2">
                                                            <option>Corporate Headquarters</option>
                                                            <option>Harsco Industrial</option>
                                                            <option>Harsco Infrastructure</option>
                                                            <option>Harsco Metals</option>
                                                            <option>Harsco Metals</option>
                                                            <option>Harsco Minerals</option>
                                                            <option>Harsco Rail</option>
                                                        </select>
                                                        <label class="inputText openselect2">Employee Type</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-8 col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-group bmd-form-group">
                                                        <input type="text" class="input form-control">
                                                        <label class="inputText">Work Phone</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="input-group date">
                                                            <input type="text" class="input form-control">
                                                            <label class="inputText">Extension</label>
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Save & New</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>



<div id="create_Education" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-xl">
        Modal content
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Select Employee Supervisor</h4>
                <div class="pull-right"><a class="btn enlarge_modal" data-toggle="tooltip"
                                           data-original-title="Fullscreen"><i
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

                                <table id="datatable3"
                                       class="table table-bordered dt-responsive nowrap table-hover"
                                       style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
        $('#datatable').DataTable();
        $('#workExperiencedatatable').DataTable();
        $('#educationdatatable').DataTable();
        $('#dependenddatatable').DataTable();
        $('#assetdatatable').DataTable();
        $('#benefitdatatable').DataTable();
        $('#CompanyPolicydatatable').DataTable();
        $('#ExitDetailsdatatable').DataTable();
        $('#trainingdatatable').DataTable();
        $('#trainingFeedbackdatatable').DataTable();
        $('#trainingregistration_datatable').DataTable();
        $('#travel_expense_datatable').DataTable();
        $('#responsive-datatable').DataTable();

        $('#datetimepicker1').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        $('#datetimepicker2').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        $('#joiningDate').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        $('#dateofBirth2').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        $('#dateofExit').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        $('#coursestartDate').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        $('#copleteDate').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        $('#startDate').datetimepicker({format: 'DD-MM-YYYY'});
        $('#endDate').datetimepicker({
            format: 'DD-MM-YYYY',
            useCurrent: false //Important! See issue #1075
        });
        $("#startDate").on("dp.change", function (e) {
            $('#endDate').data("DateTimePicker").minDate(e.date);
        });
        $("#endDate").on("dp.change", function (e) {
            $('#startDate').data("DateTimePicker").maxDate(e.date);
        });
        $('#dateofBirth').datetimepicker({format: 'DD-MM-YYYY'});

    });
</script>
<script>

    $(document).ready(function () {
        $("#resumeText").click(function() {
            $(".resumeurlField").addClass("hide");
            $(".resumeFileField").addClass("hide");
            $(".resumeTextField").removeClass("hide");
        });
        $("#resumeurl").click(function() {
            $(".resumeurlField").removeClass("hide");
            $(".resumeFileField").addClass("hide");
            $(".resumeTextField").addClass("hide");
        });
        $("#resumeFile").click(function() {
            $(".resumeurlField").addClass("hide");
            $(".resumeFileField").removeClass("hide");
            $(".resumeTextField").addClass("hide");
        })
    });
</script>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {
                $('.image-upload-wrap').hide();

                $('.file-upload-image').attr('src', e.target.result);
                $('.file-upload-content').show();

                $('.image-title').html(input.files[0].name);
            };

            reader.readAsDataURL(input.files[0]);

        } else {
            removeUpload();
        }
    }

    function removeUpload() {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show();
    }
    $('.image-upload-wrap').bind('dragover', function () {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function () {
        $('.image-upload-wrap').removeClass('image-dropping');
    });

</script>
</body>
</html>
