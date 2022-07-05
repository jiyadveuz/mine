<?php include('header.php') ?>
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

                                    <div class="col-lg-12 m-t-10">
                                        <button class="btn btn-Searchh">Search</button>
                                        <a class="linkColor">Reset</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box_headerApprsal">
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <h4 class="m-t-0 header-title row">
                                        <div class="box_headerApprsalIcon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="col p-l-3 p-r-3 clname">
                                            <select class="slect">
                                                <option>1020 Navab</option>
                                                <option>1020 Navab</option>
                                                <option>1020 Navab</option>
                                                <option>1020 Navab</option>
                                            </select>
                                        </div>
                                    </h4>
                                </div>
                                <div class="col-md-5 col-12">
                                    <h4 class="m-t-0 header-title">
                                        <div class="SubDate">
                                            <div class="slider-wrap">
                                                <div class="slider">
                                                    <div class="slide">
                                                        <p>21-Jul-2019 - 27-Jul-2019</p>
                                                    </div>
                                                    <div class="slide">
                                                        <p>28-Jul-2019 - 4-Aug-2019</p>
                                                    </div>
                                                    <div class="slide">
                                                        <p>5-Aug-2019 - 11-Aug-2019</p>
                                                    </div>
                                                    <div class="slide">
                                                        <p>12-Aug-2019 - 19-Aug-2019</p>
                                                    </div>
                                                    <div class="slide">
                                                        <p>20-Aug-2019 - 27-Aug-2019</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </h4>
                                </div>
                                <div class="col-md-3 col-12">
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
                                            </ul>
                                    </div>
                                    <a data-toggle="modal" class="btn btn-info logTimebtn pull-right"
                                       data-target="#newLog">
                                        Log Time</a>
                                </div>
                            </div>
                        </div>

                        <!-- **************************************-->
                        <div class="card-box Card_height">
                            <div class="ProjectDisplayManBox">
                                <div class="row">
                                    <div class="ProjectDisplayLeftBox">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-6 timeTrackerbrder">
                                                        <select class="slect selectProject addmore">
                                                            <option></option>
                                                            <option>Marketing Manager</option>
                                                            <option>Business Development Manager</option>
                                                            <option>Divorced</option>
                                                            <option>Seperated</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-6 timeTrackerbrder">
                                                        <select class="slect selectJob addmoreBtn">
                                                            <option></option>
                                                            <option>Marketing Manager</option>
                                                            <option>Business Development Manager</option>
                                                            <option>Divorced</option>
                                                            <option>Seperated</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 timeTrackerbrder">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <input type="text" class="prjecNameType form-control"
                                                               placeholder="What are you working on?">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ProjectDisplayRightBox">
                                        <div class="row">
                                            <div class="col timeTrackerbrder">
                                                <select class="form-control billselect">
                                                    <option>Billable</option>
                                                    <option>Non-Billable</option>
                                                </select>
                                            </div>
                                            <div class="timeTracker">
                                                <div id="timer" class="timer">
                                                    <span class="fa fa-clock-o"></span> <span> 00:00:00</span>
                                                </div>
                                                <div class="btn">
                                                    <a id="start" class="button logtime"><span>START</span>
                                                    </a>
                                                    <a id="stop" class="button logtime stopbtn hide">
                                                        <span>STOP</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
                            <div class="projectDisplayBox m-t-35">
                                <div class="projectDisplayHead">
                                    <div class="row">
                                        <div class="col-md-8">
                                    <span class="checkbox checkbox-info bulkCheckBox bulkCheckAlign hide">
                                    <input id="checkbox2" type="checkbox">
                                    <label for="checkbox2"></label>
                                    </span>
                                            <span class="pr_DateText">Jul 27 2019</span>
                                            <span class="blue_color bulkEdit_Tools hide">
                                    <span class="Bulk_Edit" data-toggle="modal"
                                          data-target="#AddNew_Project">Bulk Edit</span>
                                    <span class="Bulk_Delete"> Delete</span>
                                    </span>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="TotalTimeCount_SinglePrjct">
                                                <span class="cl-entry-total-label">Total:</span>
                                                <span class="cl-h2 blue_color">00:02:05</span>
                                                <a class="cl-ml-2 Bulk_Edit_Button"
                                                   tabindex="0" title="Bulk edit"><img src="images/bulk-edit.svg"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ************** projectDisplayHead End************************-->
                                <div class="projectDisplaySub_Box">
                                    <div class="projectDisplaySub_Box_Left">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="bulkCheckBox bulk_SUB_CheckAlign hide">
                                                    <div class=" checkbox checkbox-info">
                                                        <input id="checkbox3" type="checkbox"/>
                                                        <label for="checkbox3"></label>
                                                    </div>
                                                </div>
                                                <div class="">
                                          <span class="cl-badge-same-entries" data-toggle="collapse"
                                                data-target="#Prjct1">3</span>
                                                    <span class="project_JobName"> Service Page - </span>
                                                    <span class="project_ProjectName"> RGS Website Development </span>
                                                </div>
                                            </div>
                                            <!--//////-->
                                            <div class="col-md-4">
                                                <div class="">
                                                    <span class="project_Workngfor"> Banner Issue</span>
                                                </div>
                                            </div>
                                            <!--///////////-->
                                        </div>
                                    </div>
                                    <!-- +++++++++ -->
                                    <div class="projectDisplaySub_Box_Right">
                                        <div class="row">
                                            <div class="col-md-4 p-l-3 p-r-3">
                                                <div class="">
                                                    <span class="project_Billable"> Non-Billable</span>
                                                </div>
                                            </div>
                                            <!--////////-->
                                            <div class="col-md-8 p-l-3 p-r-3">
                                                <div class="float-right">
                                          <span class="col Sub_TimeCounter">
                                          <span class="blue_color"> 00:00:05</span>
                                          </span>
                                                    <span class="noteBtnBox timeTrackerbrder">
                                             <img class="noteBtn" src="images/note.png">
                                             <span class="noteCount">2</span>
                                             <div class="dropdown-menuBox hide">
                                                <div class="float-right NoteCloseButton"><i class="mdi mdi-close"></i>
                                                </div>
                                                <div class="p-l-15 p-r-15">
                                                   <div class="form-group bmd-form-group">
                                                       <textarea type="text" class="form-control max-het40"
                                                                 placeholder="Write a Note.."></textarea>
                                                   </div>
                                                </div>
                                                 <ul class="noteItems">
                                                     <li>
                                                         <a class="blue_color"> 19-07-2019, 12:05:05</a>
                                                         <p> Testing </p>
                                                     </li>
                                                     <li>
                                                         <a class="blue_color"> 19-07-2019, 12:05:05</a>
                                                         <p> Testing </p>
                                                     </li>
                                                     <li>
                                                         <a class="blue_color"> 19-07-2019, 12:05:05</a>
                                                         <p> Testing </p>
                                                     </li>
                                                 </ul>
                                             </div>
                                          </span>
                                                    <span class="timeTrackerbrder">
                                             <span class="PlaybtnBox timeTrackerbrder">
                                                <span class="prjectSubPlay_Btn prjectSubPlay_wrapper">
                                                   <div class="circle pulse"></div>
                                                   <div class="circle">
                                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                                         <polygon points="40,30 65,50 40,70"></polygon>
                                                      </svg>
                                                   </div>
                                                </span>
                                                <img class="prjectSubPause_Btn hide" src="images/pause.png">
                                             </span>
                                          </span>
                                                    <span class="dropdown projectEditDrop">
                                             <span class="p-l-5 p-r-5 dropdown-toggle" data-toggle="dropdown"> <img
                                                         src="images/menu-dots-vertical.svg"> </span>
                                             <ul class="dropdown-menu">
                                                <li><a href="#">Duplicate </a> </li>
                                                <li><a href="#">Edit</a></li>
                                                <li><a href="#">Delete</a></li>
                                             </ul>
                                          </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--//////////////////////////////-->
                                </div>
                                <!-- ************** projectDisplaySub_Box End************************-->
                                <div class="collapse" id="Prjct1">
                                    <div class="projectDisplaySub_Box">
                                        <div class="projectDisplaySub_Box_Left">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="bulkCheckBox bulk_SUB_CheckAlign hide">
                                                        <div class=" checkbox checkbox-info">
                                                            <input id="checkbox3" type="checkbox"/>
                                                            <label for="checkbox3"></label>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <span class="checkboxDummySpace"></span>
                                                        <span class="project_JobName"> Service Page - </span>
                                                        <span class="project_ProjectName"> RGS Website Development </span>
                                                    </div>
                                                </div>
                                                <!--//////-->
                                                <div class="col-md-4">
                                                    <div class="">
                                                        <span class="project_Workngfor"> Banner Issue</span>
                                                    </div>
                                                </div>
                                                <!--///////////-->
                                            </div>
                                        </div>
                                        <!-- +++++++++ -->
                                        <div class="projectDisplaySub_Box_Right">
                                            <div class="row">
                                                <div class="col-md-4 p-l-3 p-r-3">
                                                    <div class="">
                                                        <span class="project_Billable"> Non-Billable</span>
                                                    </div>
                                                </div>
                                                <!--////////-->
                                                <div class="col-md-8 p-l-3 p-r-3">
                                                    <div class="float-right">
                                          <span class="col Sub_TimeCounter">
                                          <span class="blue_color"> 00:00:05</span>
                                          </span>
                                                        <span class="noteBtnBox timeTrackerbrder">
                                             <img class="noteBtn" src="images/note.png">
                                             <span class="noteCount">2</span>
                                             <div class="dropdown-menuBox hide">
                                                <div class="float-right NoteCloseButton"><i class="mdi mdi-close"></i>
                                                </div>
                                                <div class="p-l-15 p-r-15">
                                                   <div class="form-group bmd-form-group">
                                                       <textarea type="text" class="form-control max-het40"
                                                                 placeholder="Write a Note.."></textarea>
                                                   </div>
                                                </div>
                                                 <ul class="noteItems">
                                                     <li>
                                                         <a class="blue_color"> 19-07-2019, 12:05:05</a>
                                                         <p> Testing </p>
                                                     </li>
                                                     <li>
                                                         <a class="blue_color"> 19-07-2019, 12:05:05</a>
                                                         <p> Testing </p>
                                                     </li>
                                                     <li>
                                                         <a class="blue_color"> 19-07-2019, 12:05:05</a>
                                                         <p> Testing </p>
                                                     </li>
                                                 </ul>
                                             </div>
                                          </span>
                                                        <span class="timeTrackerbrder">
                                             <span class="PlaybtnBox timeTrackerbrder">
                                                <span class="prjectSubPlay_Btn prjectSubPlay_wrapper">
                                                   <div class="circle pulse"></div>
                                                   <div class="circle">
                                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                                         <polygon points="40,30 65,50 40,70"></polygon>
                                                      </svg>
                                                   </div>
                                                </span>
                                                <img class="prjectSubPause_Btn hide" src="images/pause.png">
                                             </span>
                                          </span>
                                                        <span class="dropdown projectEditDrop">
                                             <span class="p-l-5 p-r-5 dropdown-toggle" data-toggle="dropdown"> <img
                                                         src="images/menu-dots-vertical.svg"> </span>
                                             <ul class="dropdown-menu">
                                                <li><a href="#">Duplicate </a> </li>
                                                <li><a href="#">Edit</a></li>
                                                <li><a href="#">Delete</a></li>
                                             </ul>
                                          </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--//////////////////////////////-->
                                    </div>
                                    <!-- ************** projectDisplaySub_Box End************************-->
                                    <div class="projectDisplaySub_Box">
                                        <div class="projectDisplaySub_Box_Left">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="bulkCheckBox bulk_SUB_CheckAlign hide">
                                                        <div class=" checkbox checkbox-info">
                                                            <input id="checkbox3" type="checkbox"/>
                                                            <label for="checkbox3"></label>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <span class="checkboxDummySpace"></span>
                                                        <span class="project_JobName"> Service Page - </span>
                                                        <span class="project_ProjectName"> RGS Website Development </span>
                                                    </div>
                                                </div>
                                                <!--//////-->
                                                <div class="col-md-4">
                                                    <div class="">
                                                        <span class="project_Workngfor"> Banner Issue</span>
                                                    </div>
                                                </div>
                                                <!--///////////-->
                                            </div>
                                        </div>
                                        <!-- +++++++++ -->
                                        <div class="projectDisplaySub_Box_Right">
                                            <div class="row">
                                                <div class="col-md-4 p-l-3 p-r-3">
                                                    <div class="">
                                                        <span class="project_Billable"> Non-Billable</span>
                                                    </div>
                                                </div>
                                                <!--////////-->
                                                <div class="col-md-8 p-l-3 p-r-3">
                                                    <div class="float-right">
                                          <span class="col Sub_TimeCounter">
                                          <span class="blue_color"> 00:00:05</span>
                                          </span>
                                                        <span class="noteBtnBox timeTrackerbrder">
                                             <img class="noteBtn" src="images/note.png">
                                             <span class="noteCount">2</span>
                                             <div class="dropdown-menuBox hide">
                                                <div class="float-right NoteCloseButton"><i class="mdi mdi-close"></i>
                                                </div>
                                                <div class="p-l-15 p-r-15">
                                                   <div class="form-group bmd-form-group">
                                                       <textarea type="text" class="form-control max-het40"
                                                                 placeholder="Write a Note.."></textarea>
                                                   </div>
                                                </div>
                                                 <ul class="noteItems">
                                                     <li>
                                                         <a class="blue_color"> 19-07-2019, 12:05:05</a>
                                                         <p> Testing </p>
                                                     </li>
                                                     <li>
                                                         <a class="blue_color"> 19-07-2019, 12:05:05</a>
                                                         <p> Testing </p>
                                                     </li>
                                                     <li>
                                                         <a class="blue_color"> 19-07-2019, 12:05:05</a>
                                                         <p> Testing </p>
                                                     </li>
                                                 </ul>
                                             </div>
                                          </span>
                                                        <span class="timeTrackerbrder">
                                             <span class="PlaybtnBox timeTrackerbrder">
                                                <span class="prjectSubPlay_Btn prjectSubPlay_wrapper">
                                                   <div class="circle pulse"></div>
                                                   <div class="circle">
                                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                                         <polygon points="40,30 65,50 40,70"></polygon>
                                                      </svg>
                                                   </div>
                                                </span>
                                                <img class="prjectSubPause_Btn hide" src="images/pause.png">
                                             </span>
                                          </span>
                                                        <span class="dropdown projectEditDrop">
                                             <span class="p-l-5 p-r-5 dropdown-toggle" data-toggle="dropdown"> <img
                                                         src="images/menu-dots-vertical.svg"> </span>
                                             <ul class="dropdown-menu">
                                                <li><a href="#">Duplicate </a> </li>
                                                <li><a href="#">Edit</a></li>
                                                <li><a href="#">Delete</a></li>
                                             </ul>
                                          </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--//////////////////////////////-->
                                        <!--//////////////////////////////-->
                                    </div>
                                    <!-- ************** projectDisplaySub_Box End************************-->
                                    <div class="projectDisplaySub_Box">
                                        <div class="projectDisplaySub_Box_Left">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="bulkCheckBox bulk_SUB_CheckAlign hide">
                                                        <div class=" checkbox checkbox-info">
                                                            <input id="checkbox3" type="checkbox"/>
                                                            <label for="checkbox3"></label>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <span class="checkboxDummySpace"></span>
                                                        <span class="project_JobName"> Service Page - </span>
                                                        <span class="project_ProjectName"> RGS Website Development </span>
                                                    </div>
                                                </div>
                                                <!--//////-->
                                                <div class="col-md-4">
                                                    <div class="">
                                                        <span class="project_Workngfor"> Banner Issue</span>
                                                    </div>
                                                </div>
                                                <!--///////////-->
                                            </div>
                                        </div>
                                        <!-- +++++++++ -->
                                        <div class="projectDisplaySub_Box_Right">
                                            <div class="row">
                                                <div class="col-md-4 p-l-3 p-r-3">
                                                    <div class="">
                                                        <span class="project_Billable"> Non-Billable</span>
                                                    </div>
                                                </div>
                                                <!--////////-->
                                                <div class="col-md-8 p-l-3 p-r-3">
                                                    <div class="float-right">
                                          <span class="col Sub_TimeCounter">
                                          <span class="blue_color"> 00:00:05</span>
                                          </span>
                                                        <span class="noteBtnBox timeTrackerbrder">
                                             <img class="noteBtn" src="images/note.png">
                                             <span class="noteCount">2</span>
                                             <div class="dropdown-menuBox hide">
                                                <div class="float-right NoteCloseButton"><i class="mdi mdi-close"></i>
                                                </div>
                                                <div class="p-l-15 p-r-15">
                                                   <div class="form-group bmd-form-group">
                                                       <textarea type="text" class="form-control max-het40"
                                                                 placeholder="Write a Note.."></textarea>
                                                   </div>
                                                </div>
                                                 <ul class="noteItems">
                                                     <li>
                                                         <a class="blue_color"> 19-07-2019, 12:05:05</a>
                                                         <p> Testing </p>
                                                     </li>
                                                     <li>
                                                         <a class="blue_color"> 19-07-2019, 12:05:05</a>
                                                         <p> Testing </p>
                                                     </li>
                                                     <li>
                                                         <a class="blue_color"> 19-07-2019, 12:05:05</a>
                                                         <p> Testing </p>
                                                     </li>
                                                 </ul>
                                             </div>
                                          </span>
                                                        <span class="timeTrackerbrder">
                                             <span class="PlaybtnBox timeTrackerbrder">
                                                <span class="prjectSubPlay_Btn prjectSubPlay_wrapper">
                                                   <div class="circle pulse"></div>
                                                   <div class="circle">
                                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                                         <polygon points="40,30 65,50 40,70"></polygon>
                                                      </svg>
                                                   </div>
                                                </span>
                                                <img class="prjectSubPause_Btn hide" src="images/pause.png">
                                             </span>
                                          </span>
                                                        <span class="dropdown projectEditDrop">
                                             <span class="p-l-5 p-r-5 dropdown-toggle" data-toggle="dropdown"> <img
                                                         src="images/menu-dots-vertical.svg"> </span>
                                             <ul class="dropdown-menu">
                                                <li><a href="#">Duplicate </a> </li>
                                                <li><a href="#">Edit</a></li>
                                                <li><a href="#">Delete</a></li>
                                             </ul>
                                          </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--//////////////////////////////-->
                                        <!--//////////////////////////////-->
                                    </div>
                                    <!-- ************** projectDisplaySub_Box End************************-->
                                </div>
                                <!-- +++++++++++++ collapse End  +++++++++++++-->
                                <div class="projectDisplaySub_Box">
                                    <div class="projectDisplaySub_Box_Left">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="bulkCheckBox bulk_SUB_CheckAlign hide">
                                                    <div class=" checkbox checkbox-info">
                                                        <input id="checkbox3" type="checkbox"/>
                                                        <label for="checkbox3"></label>
                                                    </div>
                                                </div>
                                                <div class="">
                                          <span class="cl-badge-same-entries" data-toggle="collapse"
                                                data-target="#Prjct2">2</span>
                                                    <span class="project_JobName"> Service Page - </span>
                                                    <span class="project_ProjectName"> RGS Website Development </span>
                                                </div>
                                            </div>
                                            <!--//////-->
                                            <div class="col-md-4">
                                                <div class="">
                                                    <span class="project_Workngfor"> Banner Issue</span>
                                                </div>
                                            </div>
                                            <!--///////////-->
                                        </div>
                                    </div>
                                    <!-- +++++++++ -->
                                    <div class="projectDisplaySub_Box_Right">
                                        <div class="row">
                                            <div class="col-md-4 p-l-3 p-r-3">
                                                <div class="">
                                                    <span class="project_Billable"> Non-Billable</span>
                                                </div>
                                            </div>
                                            <!--////////-->
                                            <div class="col-md-8 p-l-3 p-r-3">
                                                <div class="float-right">
                                          <span class="col Sub_TimeCounter">
                                          <span class="blue_color"> 00:00:05</span>
                                          </span>
                                                    <span class="noteBtnBox timeTrackerbrder">
                                             <img class="noteBtn" src="images/note.png">
                                             <span class="noteCount">2</span>
                                             <div class="dropdown-menuBox hide">
                                                <div class="float-right NoteCloseButton"><i class="mdi mdi-close"></i>
                                                </div>
                                                <div class="p-l-15 p-r-15">
                                                   <div class="form-group bmd-form-group">
                                                       <textarea type="text" class="form-control max-het40"
                                                                 placeholder="Write a Note.."></textarea>
                                                   </div>
                                                </div>
                                                 <ul class="noteItems">
                                                     <li>
                                                         <a class="blue_color"> 19-07-2019, 12:05:05</a>
                                                         <p> Testing </p>
                                                     </li>
                                                     <li>
                                                         <a class="blue_color"> 19-07-2019, 12:05:05</a>
                                                         <p> Testing </p>
                                                     </li>
                                                     <li>
                                                         <a class="blue_color"> 19-07-2019, 12:05:05</a>
                                                         <p> Testing </p>
                                                     </li>
                                                 </ul>
                                             </div>
                                          </span>
                                                    <span class="timeTrackerbrder">
                                             <span class="PlaybtnBox timeTrackerbrder">
                                                <span class="prjectSubPlay_Btn prjectSubPlay_wrapper">
                                                   <div class="circle pulse"></div>
                                                   <div class="circle">
                                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                                         <polygon points="40,30 65,50 40,70"></polygon>
                                                      </svg>
                                                   </div>
                                                </span>
                                                <img class="prjectSubPause_Btn hide" src="images/pause.png">
                                             </span>
                                          </span>
                                                    <span class="dropdown projectEditDrop">
                                             <span class="p-l-5 p-r-5 dropdown-toggle" data-toggle="dropdown"> <img
                                                         src="images/menu-dots-vertical.svg"> </span>
                                             <ul class="dropdown-menu">
                                                <li><a href="#">Duplicate </a> </li>
                                                <li><a href="#">Edit</a></li>
                                                <li><a href="#">Delete</a></li>
                                             </ul>
                                          </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--//////////////////////////////-->
                                </div>
                                <!-- ************** projectDisplaySub_Box End************************-->
                                <!-- ************** projectDisplaySub_Box End************************-->
                            </div>
                        </div>
                        <!-- **************************************-->
                    </div>


                </div>
                <!-- end row -->
            </div>
            <!-- container -->
        </div>
    </div>
</div>
<div class="TimetrackerFooter">
    <div class="TimetrackerFooterRightgSub">
        <div class="FooterRightgSub_total">
            <h5>Total</h5>
            <p>00.03.00Hrs</p>
        </div>
        <div class="FooterRightgSub_Submitted">
            <h5>Submitted</h5>
            <p>00.03.00Hrs</p>
        </div>
        <div class="FooterRightgSub_Not_Submitted">
            <div class="Not_SubmittedSub">
                <h5>Not Submitted</h5>
                <p>00.03.00Hrs</p>
            </div>
            <i class="fa fa-external-link"></i>
        </div>
    </div>
</div>




<div id="AddNew_Job" class="modal fade modalpaddproject" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal_sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Create New Job</h4>
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
                                            <label class="inputText">Project Name</label>
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
                            <div class="col-md-1">
                                <div class="form-group bmd-form-group">
                                    <input class="colorpicker" type="color" value="#000" oninput="color()">
                                </div>
                            </div>
                            <div class="col-md-11">
                                <div class="form-group">
                                    <div class="form-group bmd-form-group">
                                        <input type="text" class="input_textaerea form-control">
                                        <label class="inputText">Project Name</label>
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
<div id="newLog" class="modal modal-right fade modalpaddproject" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal_sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Time Log</h4>
                <div class="pull-right">
                    <a class="btn dslarge_modal" data-toggle="tooltip" data-original-title="Back"><i
                                class="mdi mdi-arrow-expand-all" aria-hidden="true"></i> </a>
                </div>
            </div>
            <div class="modal-body RightFulll_height">
                <form>
                    <div class="form_enterbox p-t-15">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group bmd-form-group">
                                            <label class="">Project Name</label>
                                            <select class="form-control slect Right_PrName">
                                                <option>Billable</option>
                                                <option>Non-Billable</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group bmd-form-group">
                                            <label class="">Job Name</label>
                                            <select class="form-control slect Right_JobName">
                                                <option>Billable</option>
                                                <option>Non-Billable</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label class="">Work Item</label>
                                        <input type="text" class="form-control form-control">

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label class="">Date</label>
                                        <div class='input-group date'>
                                            <input type='text' class="form-control" id='datetimepickerTimelog'/>
                                            <span class="input-group-addon">
                        <span class="fa fa-calendar"></span>
                    </span>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group bmd-form-group">
                                            <label class="">Description</label>
                                            <textarea rows="2" class="form-control input_textaerea"></textarea>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group bmd-form-group">
                                            <label class="">Hours</label>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="radio radio-info float_left_radio">
                                                        <input type="radio" id="checkboxHours" name="customRadio"
                                                               checked>
                                                        <label for="checkboxHours">Hours</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="radio radio-info float_left_radio">
                                                        <input type="radio" id="checkbox_Start_End" name="customRadio">
                                                        <label for="checkbox_Start_End">Start & End</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="radio radio-info float_left_radio">
                                                        <input type="radio" id="checkbox_Start_Timer"
                                                               name="customRadio">
                                                        <label for="checkbox_Start_Timer">Start Timer</label>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="HouesGroup checkbox_Start_TimerBox">
                                                <div class="row m-t-8 checkboxHoursBox">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class='input-group date' id='Houronly'>
                                                                <input type='text' class="form-control"/>
                                                                <span class="input-group-addon timeinfo">
                                                                    <span class="fa fa-clock-o">
                                                                <div class="tooltip2">
                                                                    <div class="right2">
                                                                        <div class="text-content">
                                                                            <ul>
                                                                                <li><span>2:50</span> <span class="letterdispaly">two hours and fifty min.<span></li>
                                                                                <li><span>10:5</span> <span class="letterdispaly">ten hours and five min.</span></li>
                                                                                <li><span>:35</span> <span class="letterdispaly">thirty five min.</span></li>
                                                                                <li><span>3.5</span> <span class="letterdispaly">three hours and thirty Min.</span></li>
                                                                                <li><span>0:5</span> <span class="letterdispaly">thirty Min.</span></li>
                                                                                <li><span>7</span> <span class="letterdispaly">seven hours</span></li>
                                                                            </ul>
                                                                        </div>
                                                                        <i></i>
                                                                    </div>
                                                                </div>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row m-t-8 hide checkbox_Start_EndBox">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class='input-group date' id='HourStart'>
                                                                <input type='text' class="form-control"/>
                                                                <span class="input-group-addon">
                        <span class="fa fa-clock-o"></span>
                    </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class='input-group date' id='HourEnd'>
                                                                <input type='text' class="form-control"/>
                                                                <span class="input-group-addon">
                        <span class="fa fa-clock-o"></span>
                    </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group bmd-form-group">
                                            <label class="">Billabble Status</label>
                                            <select class="form-control">
                                                <option>Billable</option>
                                                <option>Non-Billable</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group bmd-form-group timeAttach">
                                            <label class="">Attachment</label>
                                            <div class="file-upload timeAttach">
                                                <div class="file-select">
                                                    <div class="file-select-button" id="fileName">Choose File</div>
                                                    <div class="file-select-name" id="noFile">No file chosen...</div>
                                                    <input type="file" name="chooseFile" id="chooseFile">
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
<?php include("footer.php"); ?>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/timetracker.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

        $(".addmore").select2({
            placeholder: "Select Project",
        });
        $(".addmore").on("select2:open", function () {
            var a = $(this).data("select2");
            if (!$(".select2-link").length) {
                a.$results.parents(".select2-results")
                    .append('<div class="select2-link"><a data-toggle="modal" data-target="#AddNew_Project"> <img src="images/plus-blue-small.svg"> Create New Project </a></div>')
                    .on("click", function (b) {
                        a.trigger("close");
                    });
            }
        });
// ****************************** *********************************

        $(".addmoreBtn").select2({
            placeholder: "Select Job",
        });
        $(".addmoreBtn").on("select2:open", function () {
            var a = $(this).data("select2");
            if (!$(".select2-link").length) {
                a.$results.parents(".select2-results")
                    .append('<div class="select2-link"><a data-toggle="modal" data-target="#AddNew_Job"> <img src="images/plus-blue-small.svg"> Create New Project </a></div>')
                    .on("click", function (b) {
                        a.trigger("close");
                    });
            }
        });
// ****************************** *********************************

        $(".Right_PrName").select2({
            placeholder: "Select Job",
        });
        $(".Right_PrName").on("select2:open", function () {
            var a = $(this).data("select2");
            if (!$(".select2-link").length) {
                a.$results.parents(".select2-results")
                    .append('<div class="select2-link"><a data-toggle="modal" data-target=""> <img src="images/plus-blue-small.svg"> Create New Project </a></div>')
                    .on("click", function (b) {
                        a.trigger("close");
                    });
            }
        });
// ****************************** *********************************
        $(".Right_JobName").select2({
            placeholder: "Select Job",
        });
        $(".Right_JobName").on("select2:open", function () {
            var a = $(this).data("select2");
            if (!$(".select2-link").length) {
                a.$results.parents(".select2-results")
                    .append('<div class="select2-link"><a data-toggle="modal" data-target=""> <img src="images/plus-blue-small.svg"> Create New Project </a></div>')
                    .on("click", function (b) {
                        a.trigger("close");
                    });
            }
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
// *******************************file upload end*********************************
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 56) {
                $(".FilterDropBox").addClass("sticky");
            }
            else {
                $(".FilterDropBox").removeClass("sticky");
            }
        });
    });
</script>
<script>
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 500) {
            $(".FilterDropBox").addClass("sticky");
        }
    });
</script>
<script>
    var timer = null;
    let sec = 0;
    let min = 0;
    let hour = 0;

    let start = document.getElementById('start');
    let stop = document.getElementById('stop');

    start.addEventListener('click', function () {
        if (timer != null) return;
        timer = setInterval(timeHandler, 1000);
        $(this).addClass('hide');
        $("#stop").removeClass('hide');
        $("span.clockanimation").addClass('hide');
        $("span.clockanimationsub").removeClass('hide');
        $("span.clockanimation").removeClass('hide');
        $("span.clockanimationsub").addClass('hide');
    });

    stop.addEventListener('click', function () {
        clearInterval(timer);
        timer = null;
        $(this).addClass('hide');
        $("#start").removeClass('hide');
        $("span.clockanimation").addClass('hide');
        $("span.clockanimationsub").removeClass('hide');

    });

    function timeHandler() {
        sec++;
        if (sec == 60) {
            sec = 0;
            min++;
        }

        if (min == 60) {
            min = 0;
            hour++;
        }

        displayTime();
    }

    function displayTime() {
        let time = document.getElementById('timer');
        let currentMin = min;
        let currentHour = hour;

        if (sec < 10) sec = `0${sec}`;
        if (min < 10) currentMin = `0${min}`;
        if (hour < 10) currentHour = `0${hour}`;

        time.innerHTML = `<span class="fa fa-clock-o clockanimation"></span><span class="fa fa-clock-o clockanimationsub hide"></span><span>${currentHour}:${currentMin}:${sec}<span>`
    }


</script>
</body>
</html>
