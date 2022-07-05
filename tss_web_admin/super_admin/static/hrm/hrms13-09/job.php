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
                    <div class="col-12">
                        <div class="box_headerApprsal">
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <h4 class="m-t-0 header-title row">
                                        <div class="col p-l-3 p-r-3 clname">
                                            <select class="slect">
                                                <option>Jobs</option>
                                                <option>Jobs</option>
                                                <option>Jobs</option>
                                                <option>Jobs</option>
                                            </select>
                                        </div>
                                    </h4>
                                </div>
                                <div class="col-md-8 col-12">
                                    <div class="Apprsl_Filtr_Box">
                                        <ul>
                                            <li class="dropdown ExportDrop">
                                                <a class="dropdown-toggle" data-toggle="dropdown"><i
                                                            class="fa fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Export</a>
                                                    <a class="dropdown-item" href="#">Link 2</a>
                                                    <a class="dropdown-item" href="#">Link 3</a>
                                                </div>
                                            </li>
                                            <!-- **************************************-->
                                            <li class="dropdown FilterDrop">
                                                <div class="dropdown-toggle" data-toggle="dropdown"><i
                                                            class="fa fa-filter"></i></div>
                                            </li>
                                        </ul>                                    </div>
                                    <a data-toggle="modal" class="btn btn-info newbtn_crete m-t-8 m-r-3 pull-right"
                                       data-target="#AddJob">
                                        <i class="mdi mdi-plus-circle-outline"></i> Assign Users
                                    </a>
                                    <a data-toggle="modal" class="PrInsideBtn"
                                       data-target="#newLog"> Department
                                    </a>
                                    <a data-toggle="modal" class="PrInsideBtn PrInsideActive"
                                       data-target="#newLog"> User
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="FilterDropBox hide">
                            <h4 class="float-left FilterDropTitle">Filter</h4>
                            <div class="float-right FilterCloseButton"><i
                                        class="mdi mdi-close"></i>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group bmd_Filter">
                                            <label class="">Period</label>
                                            <select class="slect select2">
                                                <option>Administration</option>
                                                <option>Engineering</option>
                                                <option>Finance</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group bmd_Filter">
                                            <label class="">Projects</label>
                                            <select class="slect select2">
                                                <option>Administration</option>
                                                <option>Engineering</option>
                                                <option>Finance</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group bmd_Filter">
                                            <label class="">Jobs</label>
                                            <select class="slect select2">
                                                <option>Administration</option>
                                                <option>Engineering</option>
                                                <option>Finance</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group bmd_Filter">
                                            <label class="">Billable Status</label>
                                            <select class="slect select2">
                                                <option>Administration</option>
                                                <option>Engineering</option>
                                                <option>Finance</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group bmd_Filter">
                                            <label class="">Approval Status</label>
                                            <select class="slect select2">
                                                <option>Administration</option>
                                                <option>Engineering</option>
                                                <option>Finance</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--                                                            <div class="col-lg-12">
                                       <label class=""><b>Experience</b></label>
                                       <div class="row">
                                           <div class="col-6">
                                               <div class="form-group bmd_Filter">
                                                   <label class="">From</label>
                                                   <div class="form-group">
                                                       <div class='input-group date'>
                                                           <input type='text'
                                                                  class="form-control"
                                                                  id='datetimepicker6'
                                                                  autocomplete="off"/>
                                                           <span class="input-group-addon">
                                         <span class="fa fa-calendar"></span>
                                         </span>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="col-6">
                                               <div class="form-group bmd_Filter">
                                                   <label class="">To</label>
                                                   <div class="form-group">
                                                       <div class='input-group date'>
                                                           <input type='text'
                                                                  class="form-control"
                                                                  id='datetimepicker7'
                                                                  autocomplete="off"/>
                                                           <span class="input-group-addon">
                                         <span class="fa fa-calendar"></span>
                                         </span>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       </div>
                                       -->
                                    <div class="col-lg-12 m-t-10">
                                        <button class="btn btn-Searchh">Search</button>
                                        <a class="linkColor">Reset</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- **************************************-->
                        <div class="card-box Card_height">
                            <div class="row">
                                <div class="tableScroll" id="tableview">
                                    <table id="datatable" class="table table-bordered  table-hover tableprject"
                                           style="width: 100%;">
                                        <thead>
                                        <tr>
                                            <th class="ProjectCheckBoxtd">
                                                <div class="bulkCheckBox ProjectCheckBox">
                                                    <div class=" checkbox checkbox-info">
                                                        <input id="checkbox3" type="checkbox">
                                                        <label for="checkbox3"></label>
                                                    </div>
                                                </div>
                                            </th>
                                            <th>Job Name</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Estimated Hours</th>
                                            <th>Logged Hours</th>
                                            <th>Status</th>
                                            <th>User(s)</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tr>
                                            <td>
                                                <div class="bulkCheckBox ProjectCheckBox">
                                                    <div class=" checkbox checkbox-info">
                                                        <input id="checkbox3" type="checkbox">
                                                        <label for="checkbox3"></label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                          <span class="cl-badge-same-entries" data-toggle="collapse"
                                                data-target="#Prjct1">3</span>
                                                    <span class="project_JobName"> Service Page - </span>
                                                    <span class="project_ProjectName"> RGS Website Development </span>
                                                </div>
                                            </td>
                                            <td>21-7-2019</td>
                                            <td>21-10-2019</td>
                                            <td>0 Hours 0 Min.</td>
                                            <td>5 Hours 23 Min.</td>
                                            <td>
                                                <div class="statusYes"></div>
                                            </td>
                                            <td>
                                                <div class="jobiconbox">
                                                    <i class="fa fa-user"></i><span class="JobCount">2</span>
                                                </div>
                                                <div class="jobaddbox hide">
                                          <span><a class="AddJobButton" data-target="#assign_users"
                                                   data-toggle="modal">
                                          <i class="mdi mdi-plus"></i> Assign Users </a>
                                          </span>
                                                    <span class="jobaddboxClose"><i class="mdi mdi-close"></i></span>
                                                </div>
                                            </td>
                                            <td>
                                       <span class="dropdown projectEditDrop">
                                          <span class="p-l-5 p-r-5 dropdown-toggle" data-toggle="dropdown">
                                          <img src="images/menu-dots-vertical.svg">
                                          </span>
                                          <ul class="dropdown-menu">
                                             <li><a href="#">Duplicate </a> </li>
                                             <li><a href="#">Edit</a></li>
                                             <li><a href="#">Delete</a></li>
                                          </ul>
                                       </span>
                                            </td>
                                        </tr>
                                        <tr class="collapse" id="Prjct1">
                                            <td>
                                                <div class="bulkCheckBox ProjectCheckBox">
                                                    <div class=" checkbox checkbox-info">
                                                        <input id="checkbox3" type="checkbox">
                                                        <label for="checkbox3"></label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <span class="checkboxDummySpace"></span>
                                                    <span class="project_JobName"> Service Page - </span>
                                                    <span class="project_ProjectName"> RGS Website Development </span>
                                                </div>
                                            </td>
                                            <td>21-7-2019</td>
                                            <td>21-10-2019</td>
                                            <td>0 Hours 0 Min.</td>
                                            <td>5 Hours 23 Min.</td>
                                            <td>
                                                <div class="statusYes"></div>
                                            </td>
                                            <td>
                                                <div class="jobiconbox">
                                                    <i class="fa fa-user"></i><span
                                                            class="JobCount">2</span>
                                                </div>
                                                <div class="jobaddbox hide">
                                          <span><a class="AddJobButton" data-target="#assign_users"
                                                   data-toggle="modal">
                                          <i class="mdi mdi-plus"></i> Assign Users </a>
                                          </span>
                                                    <span class="jobaddboxClose"><i
                                                                class="mdi mdi-close"></i></span>
                                                </div>
                                            </td>
                                            <td>
                                       <span class="dropdown projectEditDrop">
                                          <span class="p-l-5 p-r-5 dropdown-toggle" data-toggle="dropdown"> <img
                                                      src="images/menu-dots-vertical.svg"> </span>
                                          <ul class="dropdown-menu">
                                             <li><a href="#">Duplicate </a> </li>
                                             <li><a href="#">Edit</a></li>
                                             <li><a href="#">Delete</a></li>
                                          </ul>
                                       </span>
                                            </td>
                                        </tr>
                                        <tr class="collapse" id="Prjct1">
                                            <td>
                                                <div class="bulkCheckBox ProjectCheckBox">
                                                    <div class=" checkbox checkbox-info">
                                                        <input id="checkbox3" type="checkbox">
                                                        <label for="checkbox3"></label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <span class="checkboxDummySpace"></span>
                                                    <span class="project_JobName"> Service Page - </span>
                                                    <span class="project_ProjectName"> RGS Website Development </span>
                                                </div>
                                            </td>
                                            <td>21-7-2019</td>
                                            <td>21-10-2019</td>
                                            <td>0 Hours 0 Min.</td>
                                            <td>5 Hours 23 Min.</td>
                                            <td>
                                                <div class="statusYes"></div>
                                            </td>
                                            <td>
                                                <div class="jobiconbox">
                                                    <i class="fa fa-user"></i><span
                                                            class="JobCount">2</span>
                                                </div>
                                                <div class="jobaddbox hide">
                                          <span><a class="AddJobButton" data-target="#assign_users"
                                                   data-toggle="modal">
                                          <i class="mdi mdi-plus"></i> Assign Users </a>
                                          </span>
                                                    <span class="jobaddboxClose"><i
                                                                class="mdi mdi-close"></i></span>
                                                </div>
                                            </td>
                                            <td>
                                       <span class="dropdown projectEditDrop">
                                          <span class="p-l-5 p-r-5 dropdown-toggle" data-toggle="dropdown"> <img
                                                      src="images/menu-dots-vertical.svg"> </span>
                                          <ul class="dropdown-menu">
                                             <li><a href="#">Duplicate </a> </li>
                                             <li><a href="#">Edit</a></li>
                                             <li><a href="#">Delete</a></li>
                                          </ul>
                                       </span>
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
<div id="AddJob" class="modal fade modalpaddproject" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal_md">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Create Job</h4>
                <div class="pull-right">
                    <a class="btn dslarge_modal" data-toggle="tooltip" data-original-title="Back"><i
                                class="mdi mdi-arrow-expand-all" aria-hidden="true"></i> </a>
                </div>
            </div>
            <div class="modal-body">
                <form>
                    <div class="col-md-12">
                        <div class="row m-t-15">
                            <div class="col-sm-6 pad5 colp_r_15">
                                <div class="form-group bmd-form-group required_item">
                                    <input type="text" class="input form-control">
                                    <label class="inputText">Project Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6 pad5 colp_l_15">
                                <div class="form-group bmd-form-group">
                                    <select class="form-control slect project">
                                        <option></option>
                                        <option>RGS</option>
                                        <option>RGS</option>
                                        <option>RGS</option>
                                    </select>
                                    <label class="inputText">Project</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 pad5 colp_r_15">
                                <div class="row">
                                    <div class="col-sm-6 pad5">
                                        <div class="form-group bmd-form-group">
                                            <div class='input-group date'>
                                                <input type='text' class="form-control" id="startDate"/>
                                                <span class="input-group-addon">
                                       <span class="fa fa-calendar"></span>
                                       </span>
                                            </div>
                                            <label class="inputText">Start Date</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 pad5">
                                        <div class="form-group bmd-form-group">
                                            <div class='input-group date'>
                                                <input type='text' class="form-control" id="endDate"/>
                                                <span class="input-group-addon">
                                       <span class="fa fa-calendar"></span>
                                       </span>
                                            </div>
                                            <label class="inputText">End Date</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 pad5 colp_l_15">
                                <div class="form-group bmd-form-group">
                                    <div class='input-group date'>
                                        <input type='text' class="form-control" id='Hours'/>
                                        <span class="input-group-addon">
                                 <span class="fa fa-clock-o"></span>
                                 </span>
                                    </div>
                                    <label class="inputText">Hours</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 pad5 colp_r_15">
                                <div class="form-group bmd-form-group">
                                    <div class="input-group">
                                        <div class="Select_Multiple_ItemBox">
                                            <ul class="select2_custome__rendered">
                                                <li class="select2_custome__choice"> Wyoming<span
                                                            class="choice__remover" role="presentation">×</span></li>
                                            </ul>
                                        </div>
                                        <span class="input-group-addon br_Multiple">
                                 <i class="fa fa-files-o ProjectUserButton"></i>
                                 </span>
                                    </div>
                                    <label class="inputText">Project Users</label>
                                </div>
                                <div class="Multiple_Item_DropBox row hide">
                                    <div class="Item_Drop_LeftBox">
                                        <!-- required for floating -->
                                        <!-- Nav tabs -->
                                        <ul class="nav  tabs-left sideways">
                                            <li class=""><a class="active" href="#User-v" data-toggle="tab">Users</a>
                                            </li>
                                            <li><a href="#Department-v" data-toggle="tab">Department</a></li>
                                        </ul>
                                    </div>
                                    <div class="Item_Drop_RightBox">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="User-v">
                                                <div class="Search_Drop_Main">
                                                    <div class="Search_Drop">
                                                        <div class="checkbox checkbox-info">
                                                            <input id="Remindar" type="checkbox">
                                                            <label for="Remindar"></label>
                                                        </div>
                                                    </div>
                                                    <div class="serchBox">
                                                        <input type="text" id="search-bar" placeholder="Search..">
                                                        <a href="#"><img class="search-icon"
                                                                         src="images/search.png"></a>
                                                    </div>
                                                </div>
                                                <ul class="Item_Checkbox">
                                                    <li class="">
                                                        <div class="checkbox checkbox-info">
                                                            <input id="Remindar1" type="checkbox">
                                                            <label for="Remindar1">Muhammed Navab</label>
                                                        </div>
                                                    </li>
                                                    <li class="">
                                                        <div class="checkbox checkbox-info">
                                                            <input id="Remindar2" type="checkbox">
                                                            <label for="Remindar2">Muhammed Navab</label>
                                                        </div>
                                                    </li>
                                                    <li class="">
                                                        <div class="checkbox checkbox-info">
                                                            <input id="Remindar2" type="checkbox">
                                                            <label for="Remindar2">Muhammed Navab</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane" id="Department-v">
                                                <div class="Search_Drop_Main">
                                                    <div class="Search_Drop">
                                                        <div class="checkbox checkbox-info">
                                                            <input id="Remindar4" type="checkbox">
                                                            <label for="Remindar4"></label>
                                                        </div>
                                                    </div>
                                                    <div class="serchBox">
                                                        <input type="text" id="search-bar" placeholder="Search..">
                                                        <a href="#"><img class="search-icon"
                                                                         src="images/search.png"></a>
                                                    </div>
                                                </div>
                                                <ul class="Item_Checkbox">
                                                    <li class="">
                                                        <div class="checkbox checkbox-info">
                                                            <input id="Remindar5" type="checkbox">
                                                            <label for="Remindar5">Information Tech</label>
                                                        </div>
                                                    </li>
                                                    <li class="">
                                                        <div class="checkbox checkbox-info">
                                                            <input id="Remindar6" type="checkbox">
                                                            <label for="Remindar6">Hr</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 pad5 colp_l_15">
                                <div class="form-group bmd-form-group">
                                    <input type='text' class="form-control"/>
                                    <label class="inputText">Rate Per Hour</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 pad5 ">
                                <div class="form-group bmd-form-group">
                                    <textarea rows="2" class="form-control input_textaerea tstarea"></textarea>
                                    <label class="inputText">Description</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 pad5 colp_r_15">
                                <div class="form-group bmd-form-group timeAttach">
                                    <div class="file-upload timeAttach">
                                        <div class="file-select">
                                            <div class="file-select-button" id="fileName">Choose File</div>
                                            <div class="file-select-name" id="noFile">No file chosen...</div>
                                            <input type="file" name="chooseFile" id="chooseFile">
                                        </div>
                                    </div>
                                    <label class="inputText">Attachment</label>
                                </div>
                            </div>
                            <div class="col-sm-6 pad5 colp_l_15">
                                <div class="row">
                                    <div class="col-sm-3 pad5">
                                        <div class="form-group bmd-form-group">
                                            <div class="checkbox checkbox-info">
                                                <input id="Reminda" type="checkbox">
                                                <label for="Reminda"></label>
                                            </div>
                                            <label class="inputText">Remindar</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-9 pad5">
                                        <div class="form-group bmd-form-group">
                                            <select class="form-control">
                                                <option value="AL">Billable</option>
                                                <option value="WY">Non-Billable</option>
                                            </select>
                                            <label class="inputText">Billable Status</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 pad5 colp_r_15">
                                <div class="form-group bmd-form-group">
                                    <a class="appnd_apnedButton appendWork">Add Work Item</a>
                                    <div class="workItemBox">
                                        <div class="row workItemBoxappend">
                                            <div class="col-md-6 pad5 m-t-5">
                                                <div class="groupAppendWorkitm">
                                                    <input type="text" class="form-control"
                                                           placeholder="Enter a work item">
                                                    <a class="appnd_deleteButton appendWork"> - </a>
                                                </div>
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
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-info" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<div id="assign_users" class="modal fade modalpaddproject" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal_sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Assign user</h4>
                <div class="pull-right">
                    <a class="btn dslarge_modal" data-toggle="tooltip" data-original-title="Back"><i
                                class="mdi mdi-arrow-expand-all" aria-hidden="true"></i> </a>
                </div>
            </div>
            <form>
                <div class="modal-body">
                    <div class="col-sm-12">
                        <div class="form-group bmd-form-group">
                            <label class="">Project Users</label>
                            <div class="input-group">
                                <div class="Select_Multiple_ItemBox">
                                    <ul class="select2_custome__rendered">
                                        <li class="select2_custome__choice"> Wyoming<span
                                                    class="choice__remover" role="presentation">×</span></li>
                                    </ul>
                                </div>
                                <span class="input-group-addon br_Multiple">
                           <i class="fa fa-files-o ProjectUserButton"></i>
                           </span>
                            </div>
                        </div>
                        <div class="Multiple_Item_DropBox Multiple_Item_DropBox2 row hide">
                            <div class="Item_Drop_LeftBox">
                                <!-- required for floating -->
                                <!-- Nav tabs -->
                                <ul class="nav  tabs-left sideways">
                                    <li class=""><a class="active" href="#User-v" data-toggle="tab">Users</a>
                                    </li>
                                    <li><a href="#Department-v" data-toggle="tab">Department</a></li>
                                </ul>
                            </div>
                            <div class="Item_Drop_RightBox">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="User-v">
                                        <div class="Search_Drop_Main">
                                            <div class="Search_Drop">
                                                <div class="checkbox checkbox-info">
                                                    <input id="Reminda" type="checkbox">
                                                    <label for="Reminda"></label>
                                                </div>
                                            </div>
                                            <div class="serchBox">
                                                <input type="text" id="search-bar" placeholder="Search..">
                                                <a href="#"><img class="search-icon"
                                                                 src="images/search.png"></a>
                                            </div>
                                        </div>
                                        <ul class="Item_Checkbox">
                                            <li class="">
                                                <div class="checkbox checkbox-info">
                                                    <input id="Remindar1" type="checkbox">
                                                    <label for="Remindar1">Muhammed Navab</label>
                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="checkbox checkbox-info">
                                                    <input id="Remindar2" type="checkbox">
                                                    <label for="Remindar2">Muhammed Navab</label>
                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="checkbox checkbox-info">
                                                    <input id="Remindar2" type="checkbox">
                                                    <label for="Remindar2">Muhammed Navab</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="Department-v">
                                        <div class="Search_Drop_Main">
                                            <div class="Search_Drop">
                                                <div class="checkbox checkbox-info">
                                                    <input id="Remindar4" type="checkbox">
                                                    <label for="Remindar4"></label>
                                                </div>
                                            </div>
                                            <div class="serchBox">
                                                <input type="text" id="search-bar" placeholder="Search..">
                                                <a href="#"><img class="search-icon"
                                                                 src="images/search.png"></a>
                                            </div>
                                        </div>
                                        <ul class="Item_Checkbox">
                                            <li class="">
                                                <div class="checkbox checkbox-info">
                                                    <input id="Remindar5" type="checkbox">
                                                    <label for="Remindar5">Information Tech</label>
                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="checkbox checkbox-info">
                                                    <input id="Remindar6" type="checkbox">
                                                    <label for="Remindar6">Hr</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="AddNew_Project" class="modal fade modalpaddproject" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal_sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Create New Project</h4>
                <div class="pull-right">
                    <a class="btn dslarge_modal" data-toggle="tooltip" data-original-title="Back"><i
                                class="mdi mdi-arrow-expand-all" aria-hidden="true"></i> </a>
                </div>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form_enterbox p-t-15">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group bmd-form-group">
                                            <input type="text" class="input_textaerea form-control">
                                            <label class="inputText">Client Name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
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
<script>
    $(document).ready(function () {
        $('.jobiconbox').click(function () {
            $(this).addClass('hide');
            $(this).siblings().removeClass('hide');
        });
        $('.jobaddboxClose').click(function () {
            $(this).parent().addClass('hide');
            $(this).closest('.jobaddbox').prev('.jobiconbox ').removeClass('hide');
        });

        $(".project").select2({
            placeholder: "Select",
        });
        $(".project").on("select2:open", function () {
            var a = $(this).data("select2");
            if (!$(".select2-link").length) {
                a.$results.parents(".select2-results")
                    .append('<div class="select2-link"><a data-toggle="modal" data-target="#AddNew_Project"> <img src="images/plus-blue-small.svg"> Create New Project </a></div>')
                    .on("click", function (b) {
                        a.trigger("close");
                    });
            }
        });
        // *******************************Filter *********************************
        $(".FilterDrop div i").click(function () {
            $(this).parent().parent().toggleClass("FilterDropActive");
            $(".FilterDropBox").toggleClass("hide");
        });
        $(".FilterCloseButton").click(function () {
            $(".FilterDropBox").addClass("hide");
            $(".FilterDrop").toggleClass("FilterDropActive");
        });
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 56) {
                $(".FilterDropBox").addClass("sticky");
            }
            else {
                $(".FilterDropBox").removeClass("sticky");
            }
        });
        // *******************************date range *********************************
        $('#startDate').datetimepicker({
            format: 'DD-MM-YYYY'
        });
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
        $('#dateofBirth').datetimepicker({
            format: 'DD-MM-YYYY'
        });
        // ****************************** hours *********************************
        $(function () {
            $('#Hours').datetimepicker({
                format: 'LT'
            });
        });
        // *******************************file upload *********************************
        $('#chooseFile').bind('change', function () {
            var filename = $("#chooseFile").val();
            if (/^\s*$/.test(filename)) {
                $(".file-upload").removeClass('active');
                $("#noFile").text("No file chosen...");
            } else {
                $(".file-upload").addClass('active');
                $("#noFile").text(filename.replace("C:\\fakepath\\", ""));
            }
        });
        // *******************************append work item*********************************

        $(".appendWork").click(function () {
            $(".workItemBoxappend").append("<div class=\"col-md-6 pad5 m-t-5\">\n" +
                "                                                <div class=\"groupAppendWorkitm\">\n" +
                "                                                <input type=\"text\" class=\"form-control\" placeholder=\"Enter a work item\">\n" +
                "                                                    <a class=\"appnd_deleteButton appendWork\"> - </a>\n" +
                "                                                </div>\n" +
                "                                            </div>");
            $('.appnd_deleteButton').on('click', function () {
                $(this).closest('.col-md-6').addClass('hide');
            });
        });
        // *****************    select Multiple Drop   *************************************************
        $(".ProjectUserButton").click(function () {
            $(".Multiple_Item_DropBox").toggleClass("hide");
        });

        $(".choice__remover").click(function () {
            $(this).parent().addClass("hideparnt");
        });
    });

</script>
</body>
</html>
