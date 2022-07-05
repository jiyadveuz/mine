<?php include('header.php') ?>
<link href="css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
</head>

<body class="">
<!-- Begin page -->
<div id="wrapper">
    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="slimscroll-menu" id="remove-scroll">
            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.php" class="logo"> <span>
            <img src="images/logo-dark-text.png" alt="">
            </span>
                    <i>
                        <img src="images/fav.png" alt="">
                    </i>
                </a>
            </div>
            <?php include('sidebar.php') ?>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -left -->
    </div>
    <!-- Left Sidebar End -->
    <!-- ============================================================== -->
    <?php include('left-settings-menu.php') ?>
    <!-- ============================================================== -->
    <div class="content-page ">
        <?php include('topnav.php') ?>
        <!-- Start Page content -->
        <div class="content settings-cntnt-box">
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
                                                <li><a href="index.php">Settings</a></li>
                                                <li><a href="index.php">Users Management</a></li>
                                                <li><a href="index.php">Security</a></li>
                                                <li><a href="#">Login Access</a></li>
                                            </ul>
                                            <div>Login Access</div>
                                        </div>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-box ">
                            <div class="">
                                <p class="m-l-5 m-r-5">
                                    Control which support organization your users can grand login access to
                                </p>
                                <div class="row2 tbl_stngs commen_table">

                                    <table class="table table-bordered lgnaccs_tbl m-b-0">
                                        <thead>
                                        <tr>
                                            <th>Settings</th>
                                            <th>Enabled</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td style="width: 250px">Administrator can log in as any user</td>
                                            <td>
                                                <div class="checkbox checkbox-info">
                                                    <input id="checkbox2" type="checkbox">
                                                    <label for="checkbox2"> </label>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="rolebtonbox">
                                        <button type="submit" class="btn btn-info ">Save</button>
                                    </div>
                                    <div class="clearfix"></div>
                                    <table class="table table-bordered lgnaccs_tbl m-t-20  m-b-0">
                                        <thead>
                                        <tr>
                                            <th>Support Organization</th>
                                            <th>Packages</th>
                                            <th>Available to Users</th>
                                            <th>Available to Administrators Only</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Administrator can log in as any user</td>
                                            <td></td>
                                            <td>
                                                <div class="radio radio-info">
                                                    <input type="radio" id="customRadio1" name="customRadio">
                                                    <label  for="customRadio1"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="radio radio-info">
                                                    <input type="radio" id="customRadio2" name="customRadio">
                                                    <label  for="customRadio2"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="rolebtonbox">

                                        <button type="submit" class="btn btn-info ">Save</button>
                                    </div>
                                    <div class="clearfix"></div>
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
    <div class="modal-dialog modal-md">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Profile</h4>
                <div class="pull-right"><a class="btn enlarge_modal" data-toggle="tooltip"
                                           data-original-title="Fullscreen"><i
                                class="mdi mdi-crop-free" aria-hidden="true"></i> </a>
                    <a class="btn dslarge_modal" data-toggle="tooltip" data-original-title="Back"><i
                                class="mdi mdi-arrow-expand-all" aria-hidden="true"></i> </a>
                </div>
            </div>
            <div class="modal-body modal_maxheigt">
                <form>
                    <div class="col-md-12">
                        <div class="row m-t-15">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-group bmd-form-group required_item">
                                                <input type="text" class="input form-control">
                                                <label class="inputText openselect2">Profile Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 ">
                                        <div class="form-group bmd-form-group required_item">
                                            <input type="password" class="input form-control">
                                            <label class="inputText">Clone Profile</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-group bmd-form-group">
                                                <select class="slect select2">
                                                    <option>Select A</option>
                                                    <option>Select B</option>
                                                    <option>Select C</option>
                                                    <option>Select D</option>
                                                </select>
                                                <label class="inputText openselect2">Clone Profile</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-group bmd-form-group">
                                                <textarea class="form-control input_textaerea"></textarea>
                                                <label class="inputText openselect2">Description</label>
                                            </div>
                                        </div>
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
    $(document).ready(function () {

        // Default Datatable
        $('#datatable').DataTable();
        $('#responsive-datatable').DataTable();

    });
</script>


</body>

</html>
