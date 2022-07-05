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
                <a href="index.php" class="logo">
               <span>
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
    <?php include('left-settings-menu.php') ?>

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
                                    <div class="mainiconbox"><i class="fa fa-road"></i></div>
                                    <h4 class="m-t-0 header-title">
                                        <div class="breadcrumbs ng-scope">
                                            <ul>
                                                <li><a href="index.php">Home</a></li>
                                                <li><a href="#">Tab</a></li>
                                            </ul>
                                            <div> Tab</div>
                                        </div>
                                    </h4>
                                </div>
                                <div class="col-md-5 col-5">
                                    <div class="pull-right p-t-10">
                                        <a class="btn enlarge" data-toggle="tooltip" data-original-title="Fullscreen"><i
                                                    class="mdi mdi-arrow-expand-all" aria-hidden="true"></i> </a>
                                        <a class="btn dslarge" data-toggle="tooltip" data-original-title="Back"><i
                                                    class="mdi mdi-fullscreen-exit" aria-hidden="true"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-box">
                            <div class=" col-12">
                                <div class="table_rspnsv" id="tableview">
                                    <ul class="nav nav-tabs tabs-bordered">
                                        <li class="nav-item">
                                            <a href="#home-b1" data-toggle="tab" aria-expanded="false"
                                               class="nav-link active show">
                                                Home
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#profile-b1" data-toggle="tab" aria-expanded="true"
                                               class="nav-link">
                                                Profile
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#messages-b1" data-toggle="tab" aria-expanded="false"
                                               class="nav-link">
                                                Messages
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#settings-b1" data-toggle="tab" aria-expanded="false"
                                               class="nav-link">
                                                Settings
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active show" id="home-b1">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                                ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis
                                                dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                                ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                                quis enim.</p>
                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
                                                enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                                                dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus.
                                                Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean
                                                leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                        </div>
                                        <div class="tab-pane" id="profile-b1">
                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
                                                enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                                                dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus.
                                                Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean
                                                leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                                ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis
                                                dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                                ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                                quis enim.</p>
                                        </div>
                                        <div class="tab-pane" id="messages-b1">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                                ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis
                                                dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                                ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                                quis enim.</p>
                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
                                                enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                                                dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus.
                                                Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean
                                                leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                        </div>
                                        <div class="tab-pane" id="settings-b1">
                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
                                                enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                                                dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus.
                                                Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean
                                                leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                                ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis
                                                dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                                ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                                quis enim.</p>
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
        <!-- content -->
    </div>
    <!-- container -->
</div>
<!-- content -->
<?php include('footer.php') ?>
<div id="newaccount" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal_lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
                <div class="pull-right">
                    <a class="btn enlarge_modal" data-toggle="tooltip" data-original-title="Fullscreen"><i
                                class="mdi mdi-crop-free" aria-hidden="true"></i> </a>
                    <a class="btn dslarge_modal" data-toggle="tooltip" data-original-title="Back"><i
                                class="mdi mdi-arrow-expand-all" aria-hidden="true"></i> </a>
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
                                                <label class="bmd-label-floating inputText labl_insd">Time
                                                    picker</label>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pad5">
                                        <div class="form-group bmd-form-group">
                                            <div class="radio radio-info">
                                                <input type="radio" id="customRadio1" name="customRadio">
                                                <label for="customRadio1">Custom radio 1</label>
                                            </div>
                                            <div class="radio radio-info">
                                                <input type="radio" name="customRadio" id="customRadio2">
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
                                            <input type="text" class="form-control input" placeholder="mm/dd/yyyy"
                                                   id="datepicker-autoclose">
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
                                                        <input type="text" class="form-control input" name="start"/>
                                                        <label class="bmd-label-floating inputText labl_insd">From</label>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text "><i
                                                                        class="mdi mdi-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pad5">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control input" name="end"/>
                                                        <label class="bmd-label-floating inputText labl_insd">To</label>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text "><i
                                                                        class="mdi mdi-calendar"></i></span>
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
</body>
</html>
