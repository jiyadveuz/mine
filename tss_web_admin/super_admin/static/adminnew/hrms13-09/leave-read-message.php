<?php include('header.php') ?>
<link href="css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
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
        <div class="content ">
            <div class="container-fluid">
                <div class="row">
                    <!-- Right Sidebar -->
                    <div class="col-lg-12">
                        <!-- Left sidebar -->
                        <!-- End Left sidebar -->
                        <div class="box_header">
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <div class="mainiconbox" style="background: none;line-height: 40px">
                                        <img class=" mr-3  thumb-sm" src="images/dummyuser.jpg" style="height: 35px">
                                    </div>
                                    <h4 class="m-t-0 header-title">
                                        <div class="breadcrumbs ng-scope">
                                            <ul>
                                                <li><a href="index.php">Home</a></li>
                                                <li><a>Notification</a></li>
                                            </ul>
                                            <div>Nabeel - 36165</div>
                                        </div>
                                    </h4>
                                </div>
                                <div class="col-md-8 col-12 m-t-8">
                                    <button type="button" class="btn btn-sm btn-info waves-effect pull-right m-l-3"
                                            data-target="#moreDetails" data-toggle="modal"><i
                                                class="fa fa-question-circle"></i> Request Information
                                    </button>
                                    <button type="button" class="btn btn-sm btn-info waves-effect pull-right m-l-3"
                                            data-target="#Reassign" data-toggle="modal"><i class="fa fa-user-plus"></i>
                                        Reassign
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger waves-effect pull-right m-l-3"><i
                                                class="fa fa-thumbs-down"></i> Reject
                                    </button>
                                    <button type="button" class="btn btn-sm btn-success waves-effect pull-right m-l-3">
                                        <i
                                                class="fa fa-thumbs-up"></i> Approve
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-box">
                            <div class="mt-4 col-12">

                                <div class="col-12 mb-4 mt-1 leave_detail_view">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 pad0 ltbtmbdr">
                                            <div class="media bg-white">
                                                <div class="media-body">
                                                    <p><strong>Employee Name</strong></p>
                                                    <p>Nabeel</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 pad0 ltbtmbdr">
                                            <div class="media bg-white">
                                                <div class="media-body">
                                                    <p><strong>Email Address</strong></p>
                                                    <p>nabeel@veuz.in</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 pad0 ltbtmbdr">
                                            <div class="media bg-white">
                                                <div class="media-body">
                                                    <p><strong>Employee Number</strong></p>
                                                    <p>36165</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 pad0 ltbtmbdr">
                                            <div class="media bg-white">
                                                <div class="media-body">
                                                    <p><strong>Absence Status</strong></p>
                                                    <p>Confirmed</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 pad0 ltbtmbdr">
                                            <div class="media bg-white">
                                                <div class="media-body">
                                                    <p><strong>Absence Type</strong></p>
                                                    <p>Exam Leave</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 pad0 ltbtmbdr">
                                            <div class="media bg-white">
                                                <div class="media-body">
                                                    <p><strong>Absence Category</strong></p>
                                                    <p>Unpaid Leave</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 pad0 ltbtmbdr">
                                            <div class="media bg-white">
                                                <div class="media-body">
                                                    <p><strong>Start Date</strong></p>
                                                    <p>29-05-2020</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 pad0 ltbtmbdr">
                                            <div class="media bg-white">
                                                <div class="media-body">
                                                    <p><strong>End Date</strong></p>
                                                    <p>31-05-2020</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 pad0 ltbtmbdr">
                                            <div class="media bg-white">
                                                <div class="media-body">
                                                    <p><strong>Total Days</strong></p>
                                                    <p>2</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 pad0 ltbtmbdr">
                                            <div class="media bg-white">
                                                <div class="media-body">
                                                    <p><strong>Replaced By</strong></p>
                                                    <p>Veuz Concepts</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </div>

                                <div class="clearfix"></div>
                                <h4 data-toggle="collapse" href="#entitlementsheetView" class="sub_hdng_edit"><i
                                            class="fa fa-chevron-down"></i> View Entitlement Balances</h4>
                                <div id="entitlementsheetView" class="panel-collapse show collapse position-relative">
                                    <div class="row commen_table">

                                        <table id="entitlementsheet"
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
                                <h4 data-toggle="collapse" href="#Supporting_DocumentsView" class="sub_hdng_edit"><i
                                            class="fa fa-chevron-down"></i> Supporting Documents</h4>
                                <div id="Supporting_DocumentsView"
                                     class="panel-collapse show collapse position-relative">
                                    <div class="row commen_table">
                                        <table id="Supporting_Documents"
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
                                <h4 data-toggle="collapse" href="#ActionHistory" class="sub_hdng_edit"><i
                                            class="fa fa-chevron-down"></i> Action History</h4>
                                <div id="ActionHistory" class="panel-collapse show collapse position-relative">
                                    <div class="row commen_table">
                                        <table id="ActionHistory_table"
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
                                <h4 data-toggle="collapse" href="#Response" class="sub_hdng_edit"><i
                                            class="fa fa-chevron-down"></i> Response</h4>

                                <div id="Response" class="panel-collapse show collapse position-relative m-t-20">
                                <div class="col-md-8 pad5">
                                    <div class="form-group bmd-form-group">
                                        <textarea rows="4" class="form-control input_textaerea tstarea"></textarea>
                                        <label class="inputText"> Note</label>
                                    </div>
                                </div>
                                </div>

                                <!--*****************************************************-->

                            </div>
                            <!-- end card-->
                        </div>
                    </div>
                    <!-- end Col -->
                </div>
            </div>
            <!-- container -->
        </div>
    </div>
</div>
<div id="moreDetails" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Information requested</h4>
            </div>
            <div class="modal-body">
                <div class="col-md-12 pad5  m-t-10">
                    <label for="anyuser">Requested More Information From</label>
                    <div class="row">
                        <div class="col pad5 m-t-10">
                            <div class="radio">
                                <input name="request" type="radio" id="Workflow-Participant" checked="">
                                <label for="Workflow-Participant">Workflow Participant</label>
                            </div>
                        </div>
                        <div class="col pad5">
                            <div class="bmd-form-group">
                                <input type="text" class="input form-control" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col pad5">
                            <div class="radio">
                                <input name="request" type="radio" id="anyuser">
                                <label for="anyuser">Any User</label>
                            </div>
                        </div>
                        <div class="col pad5">
                            <div class="bmd-form-group">
                                <div class="input-group">
                                    <input type="text" class="input form-control">
                                    <div class="input-group-addon cursor_pontr" data-toggle="modal" data-target="#"><i
                                                class="fa fa-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 pad5">
                    <div class="form-group bmd-form-group required_item">
                        <textarea rows="4" class="form-control input_textaerea tstarea"></textarea>
                        <label class="inputText">Information Requested</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-info">Send</button>
            </div>
        </div>
    </div>
</div>
<div id="Reassign" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Reassign</h4>
            </div>
            <div class="modal-body ">
                <div class="col-md-12 pad5  m-t-10">
                    <div class="row">
                        <div class="col pad5">
                            <div class="form-group bmd-form-group required_item">
                                <div class="input-group">
                                    <input type="text" class="input form-control">
                                    <div class="input-group-addon cursor_pontr" data-toggle="modal" data-target="#"><i class="fa fa-search"></i>
                                    </div>
                                    <label class="inputText">Assignee</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group bmd-form-group">
                        <div class="form-group">

                            <div class="radio">
                                <input name="group1" type="radio" id="telegate" checked="">
                                <label for="telegate">Telegate Your Response</label>
                            </div>
                            <div class="radio">
                                <input name="group1" type="radio" id="ownership">
                                <label for="ownership">Transfer Notification Ownership</label>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-12 pad5">
                    <div class="form-group bmd-form-group">
                        <textarea rows="4" class="form-control input_textaerea tstarea"></textarea>
                        <label class="inputText">Comments</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-info">Send</button>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>


<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#entitlementsheet').DataTable();
        $('#Supporting_Documents').DataTable();
        $('#ActionHistory_table').DataTable();


    });
</script>

</body>
</html>
