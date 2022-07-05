<?php include( 'header.php') ?>
<link href="css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="">
<!-- Begin page -->
<div id="wrapper">

    <div class="left side-menu">
        <div class="slimscroll-menu" id="remove-scroll">

            <?php include( 'sidebar.php') ?>
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
                                    <div class="mainiconbox"><i class="fa fa-black-tie"></i>
                                    </div>
                                    <h4 class="m-t-0 header-title">
                                        <div class="breadcrumbs ng-scope">
                                            <ul>
                                                <li><a href="index.php">Home</a></li>
                                                <li><a>Settings</a></li>
                                                <li><a>Designation</a></li>
                                            </ul>
                                            <div>Designation</div>
                                        </div>
                                    </h4>
                                </div>

                                <div class="col-md-5 col-12">
                                    <div class="pull-right p-t-10">
                                        <a data-toggle="modal" class="btn btn-info newbtn_crete" data-target="#newsrole"> <i class="mdi mdi-plus-circle-outline"></i> New
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
                                                <th>Designation</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>

                                                <td>System Architect</td>
                                                <td>
                                                    <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                    <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                                </td>

                                            </tr>
                                            <tr>

                                                <td>Accountant</td>
                                                <td>
                                                    <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                    <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                                </td>

                                            </tr>
                                            <tr>

                                                <td>Junior Technical Author</td>
                                                <td>
                                                    <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                    <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>Senior Javascript Developer</td>

                                                <td>
                                                    <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                    <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>Accountant</td>
                                                <td>
                                                    <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                    <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>Integration Specialist</td>
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

<div id="newsrole" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal_large">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Department</h4>
                <div class="pull-right"><a class="btn enlarge_modal" data-toggle="tooltip" data-original-title="Fullscreen"><i
                                class="mdi mdi-crop-free" aria-hidden="true"></i> </a>
                    <a class="btn dslarge_modal" data-toggle="tooltip" data-original-title="Back"><i
                                class="mdi mdi-arrow-expand-all" aria-hidden="true"></i> </a>
                </div>
            </div>
            <div class="modal-body">
                <form>
                    <div class="col-md-12">
                        <div class="row m-t-15">
                            <div class="col-xl-12 col-lg-12 col-md-12 colp_r_15">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <div class="form-group bmd-form-group">
                                                    <input type="text" class="input form-control">
                                                    <label class="inputText openselect2">Role Name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea rows="1" class="form-control input_textaerea tstarea"></textarea>
                                                <label class="bmd-label-floating inputText">Description</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="user_daterangpickrbox expirationbox m-t-10-imprtnt">

                                            <h3 class="big_title2">Status</h3>

                                            <div class="input-daterange" id="date-range">
                                                <div class="form-group bmd-form-group m-t-8">
                                                    <!--                                                        <label class="">Gender</label>-->

                                                    <div class="radio radio-info float_left_radio">
                                                        <input type="radio" id="customRadio1" name="customRadio">
                                                        <label for="customRadio1">Active</label>
                                                    </div>
                                                    <div class="radio radio-info">
                                                        <input type="radio" name="customRadio" id="customRadio2">
                                                        <label for="customRadio2">Inactive </label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row m-t-15">
                            <div class="col-xl-10 col-lg-12 col-md-12">
                                <div class="row_addroltablealign">
                                    <table class="addroletablealn">
                                        <thead>
                                        <tr class="bgcolr1">
                                            <th style=" border-bottom: 1px solid #e7e7e7;width: 160px"></th>
                                            <th>Read</th>
                                            <th>Write</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <th>View All</th>
                                            <th>Manage All</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <th>User</th>
                                            <td>




                                                <div class="checkbox">
                                                    <input id="CheckRead_9" name="roleLinkAllocation[0].readAccess" type="checkbox" value="1">
                                                    <input type="hidden" name="_roleLinkAllocation[0].readAccess" value="on">
                                                    <label for="CheckRead_9"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_2" checked="">
                                                    <label for="Checkbox_2"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_3">
                                                    <label for="Checkbox_3"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_4">
                                                    <label for="Checkbox_4"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_5" checked="">
                                                    <label for="Checkbox_5"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_11" checked="">
                                                    <label for="Checkbox_11"></label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th>Customer</th>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_6">
                                                    <label for="Checkbox_6"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_7">
                                                    <label for="Checkbox_7"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_8">
                                                    <label for="Checkbox_8"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_9">
                                                    <label for="Checkbox_9"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_10">
                                                    <label for="Checkbox_10"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_12">
                                                    <label for="Checkbox_12"></label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th>Employee</th>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_13" checked="">
                                                    <label for="Checkbox_13"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_14">
                                                    <label for="Checkbox_14"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_15" checked="">
                                                    <label for="Checkbox_15"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_16">
                                                    <label for="Checkbox_16"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_17">
                                                    <label for="Checkbox_17"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_18">
                                                    <label for="Checkbox_18"></label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th>Quatation</th>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_19">
                                                    <label for="Checkbox_19"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_20">
                                                    <label for="Checkbox_20"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_21">
                                                    <label for="Checkbox_21"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_22" checked="">
                                                    <label for="Checkbox_22"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_23">
                                                    <label for="Checkbox_23"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_24">
                                                    <label for="Checkbox_24"></label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th>Sales Order</th>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_25">
                                                    <label for="Checkbox_25"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_26">
                                                    <label for="Checkbox_26"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_27">
                                                    <label for="Checkbox_27"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_28">
                                                    <label for="Checkbox_28"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_29">
                                                    <label for="Checkbox_29"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_30">
                                                    <label for="Checkbox_30"></label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <th>Estimate</th>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_31">
                                                    <label for="Checkbox_31"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_32">
                                                    <label for="Checkbox_32"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_33">
                                                    <label for="Checkbox_33"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_34">
                                                    <label for="Checkbox_34"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_35">
                                                    <label for="Checkbox_35"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_36">
                                                    <label for="Checkbox_36"></label>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Item Master</th>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_37">
                                                    <label for="Checkbox_37"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_38">
                                                    <label for="Checkbox_38"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_39">
                                                    <label for="Checkbox_39"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_40">
                                                    <label for="Checkbox_40"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_41">
                                                    <label for="Checkbox_41"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_42">
                                                    <label for="Checkbox_42"></label>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th style="height: 30px"></th>
                                            <th>Add</th>
                                            <th>View</th>
                                            <th colspan="4"></th>
                                        </tr>
                                        <tr>
                                            <th>Inventory</th>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_43">
                                                    <label for="Checkbox_43"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_44">
                                                    <label for="Checkbox_44"></label>
                                                </div>
                                            </td>
                                            <td colspan="4"></td>

                                        </tr>

                                        <tr>
                                            <th>Settings</th>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_45">
                                                    <label for="Checkbox_45"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="Checkbox_46">
                                                    <label for="Checkbox_46"></label>
                                                </div>
                                            </td>
                                            <td colspan="4"></td>

                                        </tr>

                                        </tbody>
                                    </table>

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



<?php include( "footer.php"); ?>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

        // Default Datatable
        $('#datatable').DataTable();
        $('#responsive-datatable').DataTable();

        table.buttons().container()
            .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
    });
</script>


<script type="text/javascript">
    $(document).ready(function() {

        // Default Datatable
        $('#datatable').DataTable();
        $('#responsive-datatable').DataTable();




    });
</script>


</body>

</html>
