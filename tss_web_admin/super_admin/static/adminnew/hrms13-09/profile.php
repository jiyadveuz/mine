<?php include( 'header.php') ?>
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
                <a href="index.php" class="logo"> <span>
            <img src="images/logo-dark-text.png" alt="">
            </span>
                    <i>
                        <img src="images/fav.png" alt="">
                    </i>
                </a>
            </div>
            <?php include( 'sidebar.php') ?>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -left -->
    </div>
    <!-- Left Sidebar End -->
    <!-- ============================================================== -->
    <?php include( 'left-settings-menu.php') ?>
    <!-- ============================================================== -->
    <div class="content-page ">
        <?php include( 'topnav.php') ?>
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
                                                <li><a href="settings.php">Settings</a></li>
                                                <li><a href="">Users Management</a></li>
                                                <li><a href="">Security</a></li>
                                                <li><a href="profile.php">Profile</a></li>
                                            </ul>
                                            <div>Profile</div>
                                        </div>
                                    </h4>
                                </div>
                                <div class="col-md-5 col-12">
                                    <div class="pull-right p-t-10">
                                        <a data-toggle="modal" class="newbtn_crete" data-target="#newaccount"> <i class="mdi mdi-plus-circle-outline"></i> New</a> <a class="btn enlarge" data-toggle="tooltip" data-original-title="Fullscreen"><i
                                                class="mdi mdi-arrow-expand-all" aria-hidden="true"></i> </a>
                                        <a class="btn dslarge" data-toggle="tooltip" data-original-title="Back"><i
                                                class="mdi mdi-fullscreen-exit" aria-hidden="true"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-box ">
                            <div class="table_rspnsv" id="tableview">
                                <p class="m-l-15 m-r-15">
                                    Profile is a set of permision dealing with module access and operations, setup customization, and access to various app. You can provide different set of permision to various users.
                                </p>
                                <div class="row2 tbl_stngs commen_table">

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap table-hover" style="border-collapse: collapse; border-spacing: 0; width: 100%;">


                                        <thead>
                                        <tr>

                                            <th>Profile Name</th>
                                            <th>Profile Description</th>
                                            <th>Created By</th>
                                            <th>Modified By</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a class="label-default" href="#/">Tiger Nixon</a></td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Garrett Winters</a> </td>
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
                                            <td>66</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Cedric Kelly</a></td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Airi Satou</a> </td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Brielle Williamson</a> </td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Herrod Chandler</a> </td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Rhona Davidson</a></td>
                                            <td>Integration Specialist</td>
                                            <td>Tokyo</td>
                                            <td>55</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Colleen Hurst</a></td>
                                            <td>Javascript Developer</td>
                                            <td>San Francisco</td>
                                            <td>39</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Sonya Frost</a></td>
                                            <td>Software Engineer</td>
                                            <td>Edinburgh</td>
                                            <td>23</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Jena Gaines</a></td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>30</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Quinn Flynn</a> </td>
                                            <td>Support Lead</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Charde Marshall</a></td>
                                            <td>Regional Director</td>
                                            <td>San Francisco</td>
                                            <td>36</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Haley Kennedy</a></td>
                                            <td>Senior Marketing Designer</td>
                                            <td>London</td>
                                            <td>43</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Tatyana Fitzpatrick</a></td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>19</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Michael Silva</a></td>
                                            <td>Marketing Designer</td>
                                            <td>London</td>
                                            <td>66</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Paul Byrd</a></td>
                                            <td>Chief Financial Officer (CFO)</td>
                                            <td>New York</td>
                                            <td>64</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Gloria Little</a> </td>
                                            <td>Systems Administrator</td>
                                            <td>New York</td>
                                            <td>59</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Bradley Greer</a></td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>41</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Dai Rios</a></td>
                                            <td>Personnel Lead</td>
                                            <td>Edinburgh</td>
                                            <td>35</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Jenette Caldwell</a></td>
                                            <td>Development Lead</td>
                                            <td>New York</td>
                                            <td>30</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Yuri Berry</a></td>
                                            <td>Chief Marketing Officer (CMO)</td>
                                            <td>New York</td>
                                            <td>40</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Caesar Vance</a></td>
                                            <td>Pre-Sales Support</td>
                                            <td>New York</td>
                                            <td>21</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Doris Wilder</a> </td>
                                            <td>Sales Assistant</td>
                                            <td>Sidney</td>
                                            <td>23</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Angelica Ramos</a></td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Gavin Joyce</a></td>
                                            <td>Developer</td>
                                            <td>Edinburgh</td>
                                            <td>42</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Jennifer Chang</a></td>
                                            <td>Regional Director</td>
                                            <td>Singapore</td>
                                            <td>28</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Brenden Wagner</a></td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>28</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Fiona Green</a></td>
                                            <td>Chief Operating Officer (COO)</td>
                                            <td>San Francisco</td>
                                            <td>48</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Shou Itou</a></td>
                                            <td>Regional Marketing</td>
                                            <td>Tokyo</td>
                                            <td>20</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Michelle House</a></td>
                                            <td>Integration Specialist</td>
                                            <td>Sidney</td>
                                            <td>37</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Suki Burks</a></td>
                                            <td>Developer</td>
                                            <td>London</td>
                                            <td>53</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Prescott Bartlett</a></td>
                                            <td>Technical Author</td>
                                            <td>London</td>
                                            <td>27</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Tiger Nixon</a></td>
                                            <td>Team Leader</td>
                                            <td>San Francisco</td>
                                            <td>22</td>
                                            <td>
                                                <a class="label-default" href="#/"> <i class="fa fa-pencil"></i> </a>
                                                <a class="label-default" href="#/"> <i class="fa fa-eye"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="label-default" href="#/">Martena Mccray</a> </td>
                                            <td>Post-Sales support</td>
                                            <td>Edinburgh</td>
                                            <td>46</td>
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
                <div class="pull-right"> <a class="btn enlarge_modal" data-toggle="tooltip" data-original-title="Fullscreen"><i
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

<?php include( "footer.php"); ?>
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
