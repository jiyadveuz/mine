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
            <div class="topbar-left">
                <a href="index.php" class="logo">
            <span>
            <img src="images/logo-dark-text.png" alt="" >
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
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <?php include('topnav.php') ?>
        <!-- Start Page content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="box_header">
                            <div class="row">
                                <div class="col-md-7 col-12">
                                    <div class="mainiconbox"><i class="fa fa-cog"></i> </div>
                                    <h4 class="m-t-0 header-title">
                                        <div class="breadcrumbs ng-scope">
                                            <ul>
                                                <li><a href="index.php">Home</a></li>
                                                <li><a href="#">Settings</a></li>
                                            </ul>
                                            <div> Settings </div>
                                        </div>
                                    </h4>
                                </div>
                                <div class="col-md-5 col-5">
                                    <div class="pull-right p-t-10">
                                        <a data-toggle="modal" class="newbtn_crete" data-target="#newaccount"> <i class="mdi mdi-plus-circle-outline"></i> New </a>
                                        <a class="btn enlarge" data-toggle="tooltip" data-original-title="Fullscreen"><i class="mdi mdi-arrow-expand-all" aria-hidden="true"></i> </a>
                                        <a class="btn dslarge" data-toggle="tooltip" data-original-title="Back"><i class="mdi mdi-fullscreen-exit" aria-hidden="true"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-box">
                            <div class="sitemap">


                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 col-12">



                                                <ul class="third">
                                                    <div class="bold_gnrl" href="#">General</div>
                                                    <li class="scndbr">
                                                        <a href="#">Company Settings</a>
                                                        <ul class="third mtfxed">
                                                            <li><a href="company-info.php">Company Information</a></li>
                                                            <li><a href="fiscal-year.php">Fiscal Year</a></li>
                                                            <li><a href="business-hour.php">Business Hours</a></li>
                                                            <li><a href="holiday.php">Holidays</a></li>
                                                            <li><a href="currency.php">Manage Currencies</a></li>
                                                            <li><a href="hierarchy.php">Hierarchy Preference</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Gamescope</a></li>
                                                    <li><a href="them-settings.php">Theme colour</a></li>
                                                </ul>

                                            </div>
                                            <div class="col-lg-3 col-md-4 col-12">


                                                <ul class="third forthst">

                                                    <div class="bold_gnrl" href="#">Users Management</div>
                                                    <li><a href="user.php">Users</a></li>
                                                    <li class="scndbr">
                                                        <a href="#">Security</a>
                                                        <ul class="third mtfxed">
                                                            <li><a href="login-access.php">Login Access Policies </a></li>
                                                            <li><a href="profile.php">Profiles</a></li>
                                                            <li><a href="new-role.php">Roles</a></li>
                                                            <li><a href="data-sharing.php">Data Sharing Settings</a></li>
                                                        </ul>
                                                    </li>

                                                    <li><a href="territory.php">Territory management</a></li>
                                                </ul>

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
    <div class="modal-dialog modal_lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
                <div class="pull-right">
                    <a class="btn enlarge_modal" data-toggle="tooltip" data-original-title="Fullscreen"><i class="mdi mdi-crop-free" aria-hidden="true"></i> </a>
                    <a class="btn dslarge_modal" data-toggle="tooltip" data-original-title="Back"><i class="mdi mdi-arrow-expand-all" aria-hidden="true"></i> </a>
                </div>
            </div>
            <div class="modal-body modal_maxheigt">
                <form>
                    <div class="col-md-12">
                        <div class="row m-t-15">
                            <div class="col-md-6 colp_r_15">
                                <div class="row">
                                    <div class="col-md-6 pad5 ">
                                        <div class="form-group bmd-form-group required_item">
                                            <input type="password" class="input form-control">
                                            <label class="inputText">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pad5">
                                        <select class="slect select2">
                                            <option>Select A</option>
                                            <option>Select B</option>
                                            <option>Select C</option>
                                            <option>Select D</option>
                                        </select>
                                        <label class="inputText openselect2">select</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 colp_l_15">
                                <div class="row">
                                    <div class="col-md-6 pad5">
                                        <div class="form-group">
                                            <div class="form-group bmd-form-group">
                                                <select class="select2-multi" multiple="multiple">
                                                    <option>Select A</option>
                                                    <option>Select B</option>
                                                    <option>Select C</option>
                                                    <option>Select D</option>
                                                </select>
                                                <label class="inputText openselect2">multi select</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pad5">
                                        <div class="form-group">
                                            <div class="form-group bmd-form-group">
                                                <input type="text" class="input form-control">
                                                <label class="inputText openselect2">textfield</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 colp_r_15">
                                <div class="row">
                                    <div class="col-md-6 pad5">
                                        <div class="form-group bmd-form-group">
                                            <select class="custom-select">
                                                <option selected="">Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <label class="bmd-label-floating inputText">Commen Select</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pad5">
                                        <div class="form-group bmd-form-group">
                                            <div class="input-group">
                                                <input id="timepicker" type="text" class="form-control input">
                                                <label class="bmd-label-floating inputText labl_insd">Time picker</label>
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="mdi mdi-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 colp_l_15">
                                <div class="row">
                                    <div class="col-md-6 pad5">
                                        <div class="form-group bmd-form-group">
                                            <div class="checkbox checkbox-info">
                                                <input id="checkbox2" type="checkbox">
                                                <label for="checkbox2">
                                                    Check me out !
                                                </label>
                                            </div></div>
                                    </div>
                                    <div class="col-md-6 pad5">
                                        <div class="form-group bmd-form-group">
                                            <div class="radio radio-info">
                                                <input type="radio" id="customRadio1" name="customRadio">
                                                <label  for="customRadio1">Custom radio 1</label>
                                            </div>
                                            <div class="radio radio-info">
                                                <input type="radio" name="customRadio" id="customRadio2" >
                                                <label for="customRadio2">
                                                    Info
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 colp_r_15">
                                <div class="row">
                                    <div class="col-md-6 pad5">
                                        <div class="input-group">
                                            <input type="text" class="form-control input" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                            <label class="bmd-label-floating inputText labl_insd">Datepicker</label>
                                            <div class="input-group-append">
                                                <span class="input-group-text "><i class="mdi mdi-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 colp_l_15">
                                        <div class="input-daterange" id="date-range">
                                            <div class="row">
                                                <div class="col-md-6 pad5">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control input" name="start" />
                                                        <label class="bmd-label-floating inputText labl_insd">From</label>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text "><i class="mdi mdi-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pad5">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control input" name="end" />
                                                        <label class="bmd-label-floating inputText labl_insd">To</label>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text "><i class="mdi mdi-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 colp_l_15">
                                <div class="row">
                                    <div class="col-md-12 pad5">
                                        <div class="form-group bmd-form-group">
                                            <input type="file" class="filestyle input" data-btnClass="btn-info">
                                            <label class="bmd-label-floating inputText">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 colp_r_15">
                                <div class="row">
                                    <div class="col-md-12 pad5 ">
                                        <div class="form-group bmd-form-group required_item">
                                            <textarea rows="3" class="form-control input_textaerea tstarea"></textarea>
                                            <label class="bmd-label-floating inputText">Textarea</label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 colp_l_15">

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
<div id="kanbnstgsmodal" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-md">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Kanaban Settings</h4>
            </div>
            <div class="modal-body">
                <div class="col-md-12 col-12 overeffdtfocus">
                    <div class="row">
                        <div class="col-12 m-t-15">

                            <div class="form-group bmd-form-group">
                                <select class="slect select2">
                                    <option>Select A</option>
                                    <option>Select B</option>
                                    <option>Select C</option>
                                    <option>Select D</option>
                                </select>
                                <label class="vz_labl openselect2 inputText">Summerized by</label>
                            </div>
                        </div>
                        <div class="col-12">

                            <div class="form-group bmd-form-group">
                                <select class="slect select2">
                                    <option>Select A</option>
                                    <option>Select B</option>
                                    <option>Select C</option>
                                    <option>Select D</option>
                                </select>
                                <label class="vz_labl openselect2 inputText">Group By</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="width: 100%">
                <div class="col-12 pad0">
                    <div class="rolebtonbox">
                        <button type="submit" class="btn btn-info pull-right">Save</button>
                        <button type="submit" class="btn btn-default pull-right" data-dismiss="modal">Cancel</button>
                    </div>
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

        //Buttons examples
        var table = $('#datatable-buttons').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf']
        });

        // Key Tables

        $('#key-table').DataTable({
            keys: true
        });

        // Responsive Datatable
        $('#responsive-datatable').DataTable();

        // Multi Selection Datatable
        $('#selection-datatable').DataTable({
            select: {
                style: 'multi'
            }
        });

        table.buttons().container()
            .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
    } );

    $("#Kanbanbtn").click(function(){
        $("#kanabanexampleview .tablebox").addClass("block");
        $("#tableview .tbl_stngs").addClass("hide");
    });
    $("#comntablebtn").click(function(){
        $("#kanabanexampleview .tablebox").removeClass("block");
        $("#tableview .tbl_stngs").removeClass("hide");
    });

</script>
<script>
    (function()
    {

        //exclude older browsers by the features we need them to support
        //and legacy opera explicitly so we don't waste time on a dead browser
        if
        (
            !document.querySelectorAll
            ||
            !('draggable' in document.createElement('span'))
            ||
            window.opera
        )
        { return; }

        //get the collection of draggable items and add their draggable attribute
        for(var
                items = document.querySelectorAll('[data-draggable="item"]'),
                len = items.length,
                i = 0; i < len; i ++)
        {
            items[i].setAttribute('draggable', 'true');
        }

        //variable for storing the dragging item reference
        //this will avoid the need to define any transfer data
        //which means that the elements don't need to have IDs
        var item = null;

        //dragstart event to initiate mouse dragging
        document.addEventListener('dragstart', function(e)
        {
            //set the item reference to this element
            item = e.target;

            //we don't need the transfer data, but we have to define something
            //otherwise the drop action won't work at all in firefox
            //most browsers support the proper mime-type syntax, eg. "text/plain"
            //but we have to use this incorrect syntax for the benefit of IE10+
            e.dataTransfer.setData('text', '');

        }, false);

        //dragover event to allow the drag by preventing its default
        //ie. the default action of an element is not to allow dragging
        document.addEventListener('dragover', function(e)
        {
            if(item)
            {
                e.preventDefault();
            }

        }, false);

        //drop event to allow the element to be dropped into valid targets
        document.addEventListener('drop', function(e)
        {
            //if this element is a drop target, move the item here

            //then prevent default to allow the action (same as dragover)
            if(e.target.getAttribute('data-draggable') == 'target')
            {
                e.target.appendChild(item);

                e.preventDefault();
            }

        }, false);

        //dragend event to clean-up after drop or abort
        //which fires whether or not the drop target was valid
        document.addEventListener('dragend', function(e)
        {
            item = null;

        }, false);

    })();
</script>
</body>
</html>
