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
                                    <div class="mainiconbox"><i class="fa fa-map"></i>
                                    </div>
                                    <h4 class="m-t-0 header-title">
                                        <div class="breadcrumbs ng-scope">
                                            <ul>
                                                <li><a href="index.php">Home</a></li>
                                                <li><a>Settings</a></li>
                                                <li><a>Location</a></li>
                                            </ul>
                                            <div>Location</div>
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
                </div>
                <!-- end row -->
            </div>
            <!-- container -->
        </div>
    </div>
</div>

<div id="newskill" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal_sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Location Details</h4>
                <div class="pull-right"><a class="btn enlarge_modal" data-toggle="tooltip" data-original-title="Fullscreen"><i
                            class="mdi mdi-crop-free" aria-hidden="true"></i> </a>
                    <a class="btn dslarge_modal" data-toggle="tooltip" data-original-title="Back"><i
                            class="mdi mdi-arrow-expand-all" aria-hidden="true"></i> </a>
                </div>
            </div>
            <div class="modal-body modal_maxheigt">

                <form>
                    <div class="form_enterbox">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group bmd-form-group required_item">
                                        <input type="text" class="input form-control"/>
                                        <label class="inputText">Location Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group bmd-form-group">
                                        <input type="text" class="input form-control"/>
                                        <label class="inputText">Mail Alias</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group bmd-form-group required_item">
                                    <select class="slect select2">
                                        <option>Select</option>
                                        <option>India</option>
                                        <option>Iran</option>
                                    </select>
                                    <label class="inputText openselect2">Country</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group bmd-form-group required_item">
                                    <select class="slect select2" name="sel">
                                        <option>Select</option>
                                        <option>India</option>
                                        <option>Iran</option>
                                    </select>
                                    <label class="inputText openselect2">State/Province</label>

                            </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-group">
                                <div class="form-group bmd-form-group">
                                    <select class="slect select2">
                                        <option>Select</option>
                                        <option>India</option>
                                        <option>Iran</option>
                                    </select>
                                    <label class="inputText openselect2">Time zone</label>
                                </div>
                            </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group bmd-form-group">
                                        <textarea type="text" class="input_textaerea form-control" rows="3"></textarea>
                                        <label class="inputText">Description</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-info" id="submit">Save</button>
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
    });
</script>




</body>

</html>
