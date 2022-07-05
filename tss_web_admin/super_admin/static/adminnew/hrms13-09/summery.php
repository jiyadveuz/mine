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
                                    <div class="mainiconbox"><i class="fa fa-leanpub"></i>
                                    </div>
                                    <h4 class="m-t-0 header-title">
                                        <div class="breadcrumbs ng-scope">
                                            <ul>
                                                <li><a href="index.php">Home</a></li>
                                                <li><a>Settings</a></li>
                                                <li><a>Summary</a></li>
                                            </ul>
                                            <div>Summary</div>
                                        </div>
                                    </h4>
                                </div>

                                <div class="col-md-5 col-12">
                                    <div class="pull-right p-t-10">
                                        <a data-toggle="modal" class="btn btn-info newbtn_crete" data-target="#newsummery"> <i class="mdi mdi-plus-circle-outline"></i> New
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
                                                <th style="width: 60%">Question</th>
                                                <th >Status</th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            <tr>
                                                <td>What are all the areas he/she needs improvement ?</td>
                                                <td>

                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </td>
                                            </tr>
                                                <tr>
                                                <td>Do you recommend him/her for promotion ?</td>
                                                <td> <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label></td>
                                                </tr>
                                            <tr>
                                                <td>Do you like his/her performance during appraisal period ?</td>
                                                <td> <label class="switch">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round"></span>
                                                    </label></td>
                                            </tr>
                                            <tr>
                                                <td>Do you suggest any improvement he/she can do to improve his/her performance ?</td>
                                                <td> <label class="switch">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round"></span>
                                                    </label></td>
                                            </tr>

                                            <tr>
                                                <td>How do you rate his/her performance during the appraisal period? </td>
                                                <td> <label class="switch">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round"></span>
                                                    </label></td>
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

<div id="newsummery" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal_sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Summary</h4>
                <div class="pull-right"><a class="btn enlarge_modal" data-toggle="tooltip" data-original-title="Fullscreen"><i
                            class="mdi mdi-crop-free" aria-hidden="true"></i> </a>
                    <a class="btn dslarge_modal" data-toggle="tooltip" data-original-title="Back"><i
                            class="mdi mdi-arrow-expand-all" aria-hidden="true"></i> </a>
                </div>
            </div>
            <div class="modal-body">

                <form>
                    <div class="form_enterbox">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group bmd-form-group">
                                        <textarea type="text" class="input_textaerea form-control" rows="5"></textarea>
                                        <label class="inputText">Add Summary</label>
                                    </div>
                                </div>
                            </div>
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

    });
</script>

</body>

</html>
