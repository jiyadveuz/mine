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
        <div class="content ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="box_header">
                            <div class="row">
                                <div class="col-md-7 col-12">
                                    <div class="mainiconbox"><i class="fa fa-eraser"></i>
                                    </div>
                                    <h4 class="m-t-0 header-title">
                                        <div class="breadcrumbs ng-scope">
                                            <ul>
                                                <li><a href="index.php">Home</a></li>
                                                <li><a>Settings</a></li>
                                                <li><a>Absence Management</a></li>
                                            </ul>
                                            <div>Absence Management</div>
                                        </div>
                                    </h4>
                                </div>

                                <div class="col-md-5 col-12">
                                    <div class="pull-right p-t-10">
                                        <a data-toggle="modal" class="btn btn-info newbtn_crete" data-target="#newskill"> <i class="mdi mdi-plus-circle-outline"></i> New
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-box ">
                            <div class="card-box ">
                                <div class="table_rspnsv" id="tableview">
                                    <div class="row2 tbl_stngs commen_table">

                                        <table id="datatable" class="table table-bordered dt-responsive nowrap table-hover" style="width: 100%;">

                                            <thead>
                                            <tr>
                                                <th>Employee Id</th>
                                                <th>Leave Type</th>
                                                <th>Manager's Name</th>
                                                <th style="width: 80px">From Date</th>
                                                <th style="width: 80px">To Date</th>
                                                <th>Team Email ID</th>
                                                <th>Reason for Leave</th>
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
                                                <td>San Francisco</td>
                                                <td>66</td>
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
                </div>
                <!-- end row -->
            </div>
            <!-- container -->
        </div>
    </div>
</div>

<div id="newskill" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal_large">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Leave</h4>
                <div class="pull-right"><a class="btn enlarge_modal" data-toggle="tooltip" data-original-title="Fullscreen"><i
                                class="mdi mdi-crop-free" aria-hidden="true"></i> </a>
                    <a class="btn dslarge_modal" data-toggle="tooltip" data-original-title="Back"><i
                                class="mdi mdi-arrow-expand-all" aria-hidden="true"></i> </a>
                </div>
            </div>
            <div class="modal-body modal_maxheigt m-t-8">
                <div class="panel-body">
                    <form>
                        <div class="form_enterbox col-md-12">
                            <div class="row">
                                <div class="col-md-6 colp_r_15">
                                    <div class="row">
                                        <div class="col-sm-12 pad5 ">
                                            <div class="form-group bmd-form-group">
                                                <input type="text" class="input form-control getVal">
                                                <label class="inputText input-has-value">Employee Name</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 colp_l_15">
                                    <div class="row">
                                        <div class="col-sm-12 pad5 ">
                                            <div class="form-group bmd-form-group">
                                                <input type="text" class="input form-control getVal">
                                                <label class="inputText input-has-value">Email</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 colp_r_15">
                                    <div class="row">
                                        <div class="col-sm-4 pad5 ">
                                            <div class="form-group bmd-form-group">
                                                <input type="text" class="input form-control">
                                                <label class="inputText">Employee Number</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 pad5 ">
                                            <div class="form-group bmd-form-group">
                                                <select class="input form-control">
                                                    <option>Confirmed</option>
                                                    <option>Planned</option>
                                                </select>
                                                <label class="inputText">Absence Status</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 colp_l_15">
                                    <div class="row">
                                        <div class="col-sm-6 pad5 ">
                                            <div class="form-group bmd-form-group">
                                                <select class="input form-control">
                                                    <option>Annual Leave</option>
                                                    <option>Exam Leave</option>
                                                    <option>Family Leave</option>
                                                    <option>Unpaid Leave</option>
                                                    <option>Compensatory Leave</option>
                                                </select>
                                                <label class="inputText">Absence Type</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pad5 ">
                                            <div class="form-group bmd-form-group">
                                                <select class="input form-control">
                                                    <option>Paid Leave</option>
                                                    <option>Unpaid Leave</option>

                                                </select>
                                                <label class="inputText">Absence Category</label>
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
                                                <label class="inputText">Leave Available</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 colp_l_15">
                                    <div class="row">
                                        <div class="col-sm-6 pad5 ">
                                            <div class="form-group bmd-form-group">
                                                <div class="input-group bmd-date-group">
                                                    <input type="text" class="form-control input" id="startDate" />
                                                    <label class="bmd-label-floating inputText labl_insd">From</label>
                                                    <div class="input-group-append"> <span class="input-group-text "><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 pad5 ">
                                            <div class="form-group bmd-form-group">
                                                <div class="input-group bmd-date-group">
                                                    <input type="text" class="form-control input" id="endDate" />
                                                    <label class="bmd-label-floating inputText labl_insd">To</label>
                                                    <div class="input-group-append"> <span class="input-group-text "><i class="fa fa-calendar"></i></span>
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
                                        <div class="col-sm-3 pad5 ">
                                            <div class="form-group bmd-form-group">
                                                <input type="text" class="input form-control">
                                                <label class="inputText">Total Days</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 pad5 ">
                                            <div class="form-group bmd-form-group">
                                                <input type="text" class="input form-control">
                                                <label class="inputText">Replace By</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 colp_l_15">
                                    <div class="row">
                                        <div class="col-sm-12 pad5 ">
                                            <div class="form-group bmd-form-group">

                                                <textarea class="form-control input_textaerea"></textarea>
                                                <label class="inputText">Reason for Leave/Comments</label>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <h4 class="sub_hdng_edit">View Entitlement Balances</h4>
                                </div>
                                <div class="col-md-12 pad0 ">

                                    <div class="tbl_stngs commen_table m-t-8">

                                        <table id="entitlementsheet" class="table table-bordered dt-responsive nowrap table-hover dataTable no-footer" style="width: 100%">

                                            <thead>
                                            <tr>
                                                <th>Sr #</th>
                                                <th>Name</th>
                                                <th>Last Modified Date</th>
                                                <th>Size</th>
                                                <th style="width: 40px">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    bg-1.jpeg
                                                </td>
                                                <td>12-12-2019</td>
                                                <td>187.2kb</td>
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
                            <div class="row">
                                <div class="col-12 m-t-10">
                                    <h4 class="sub_hdng_edit">Supporting Documents</h4>
                                </div>

                                <div class="col-md-12 pad0 ">
                                    <div class="table_createNewBtn"><a data-toggle="modal" data-target="#AddDocument"> + Add File</a></div>
                                    <div class="tbl_stngs commen_table m-t-8">
                                        <table id="supprtDocmnt" class="table table-bordered dt-responsive nowrap table-hover dataTable no-footer" style="width: 100%">
                                            <thead>
                                            <tr>
                                                <th style="width: 30px">Sr #</th>
                                                <th>Document</th>
                                                <th>Last Modified Date</th>
                                                <th>Size</th>
                                                <th style="width: 40px">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <img src="../assets/images/screenshot-icon.png">
                                                    <a class="linkcolr">bg-1.jpeg</a>
                                                </td>
                                                <td>12-12-2019</td>
                                                <td>187.2kb</td>
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

                    </form>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-info" id="submit">Save</button>
            </div>
        </div>
    </div>
</div>

<div id="AddDocument" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal_sm">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Attach File</h4>
                <div class="pull-right"><a class="btn enlarge_modal" data-toggle="tooltip" data-original-title="Fullscreen"><i
                                class="mdi mdi-crop-free" aria-hidden="true"></i> </a>
                    <a class="btn dslarge_modal" data-toggle="tooltip" data-original-title="Back"><i
                                class="mdi mdi-arrow-expand-all" aria-hidden="true"></i> </a>
                </div>
            </div>
            <div class="modal-body">
                <div class="panel-body p-b-10">
                    <div class="pills-struct mt-40">
                        <div class="row">
                            <div class="col-md-12 colp_r_15">
                                <div class="col-lg-12 col-md-12 col-sm-12 resumeFileField">
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

<?php include("footer.php"); ?>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Default Datatable
        $('#datatable').DataTable();
        $('#entitlementsheet').DataTable();
        $('#supprtDocmnt').DataTable();
        $('#responsive-datatable').DataTable();
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
    $('.image-upload-wrap').bind('dragover', function() {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function() {
        $('.image-upload-wrap').removeClass('image-dropping');
    });
</script>

</body>

</html>
