<?php include('header.php') ?>
<link href="css/summernote-bs4.css" rel="stylesheet" />
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

                    <!-- Right Sidebar -->
                    <div class="col-lg-12">

                            <!-- Left sidebar -->
                            <div class="inbox-leftbar">
                                <div class="card-box">
                                    <a href="" class="compose_btn"> <i class="fa fa-plus"></i> Compose</a>

                                <div class="mail-list mt-4">
                                    <a href="#" class="list-group-item border-0 text-danger"><i class="mdi mdi-inbox font-18 align-middle mr-2"></i>Inbox<span class="badge badge-danger float-right ml-2 mt-1">8</span></a>
                                    <a href="#" class="list-group-item border-0"><i class="mdi mdi-star font-18 align-middle mr-2"></i>Starred</a>
                                    <a href="#" class="list-group-item border-0"><i class="mdi mdi-file-document-box font-18 align-middle mr-2"></i>Draft<span class="badge badge-info float-right ml-2 mt-1">32</span></a>
                                    <a href="#" class="list-group-item border-0"><i class="mdi mdi-send font-18 align-middle mr-2"></i>Sent Mail</a>
                                    <a href="#" class="list-group-item border-0"><i class="mdi mdi-delete font-18 align-middle mr-2"></i>Trash</a>
                                </div>

                               <hr>

                                <div class="list-group b-0 mail-list">
                                    <a href="#" class="list-group-item border-0"><span class="fa fa-circle text-info mr-2"></span>Web App</a>
                                    <a href="#" class="list-group-item border-0"><span class="fa fa-circle text-warning mr-2"></span>Recharge</a>
                                    <a href="#" class="list-group-item border-0"><span class="fa fa-circle text-purple mr-2"></span>Wallet Balance</a>
                                    <a href="#" class="list-group-item border-0"><span class="fa fa-circle text-pink mr-2"></span>Friends</a>
                                    <a href="#" class="list-group-item border-0"><span class="fa fa-circle text-success mr-2"></span>Family</a>
                                </div>

                            </div>
                            </div>
                            <!-- End Left sidebar -->

                            <div class="inbox-rightbar">
                                <div class="card-box">
                                <div class="" role="toolbar">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-light waves-effect"><i class="mdi mdi-archive font-18 vertical-middle"></i></button>

                                        <button type="button" class="btn btn-sm btn-light waves-effect"><i class="mdi mdi-alert-octagon font-18 vertical-middle"></i></button>
                                        <button type="button" class="btn btn-sm btn-light waves-effect"><i class="mdi mdi-delete-variant font-18 vertical-middle"></i></button>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-folder font-18 vertical-middle"></i>
                                            <b class="caret m-l-5"></b>
                                        </button>
                                        <div class="dropdown-menu">
                                            <span class="dropdown-header">Move to</span>
                                            <a class="dropdown-item" href="javascript: void(0);">Social</a>
                                            <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                            <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                            <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                        </div>
                                    </div>





                                </div>
<hr>
                                <div class="mt-4">

                                    <form role="form">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="To">
                                        </div>

                                        <div class="form-group m-t-8">
                                            <input type="text" class="form-control" placeholder="Subject">
                                        </div>
                                        <div class="form-group m-t-8 m-b-8">
                                            <div class="summernote">
                                                <h6>Hello Summernote</h6>
                                                <ul>
                                                    <li>
                                                        Select a text to reveal the toolbar.
                                                    </li>
                                                    <li>
                                                        Edit rich document on-the-fly, so elastic!
                                                    </li>
                                                </ul>
                                                <p>
                                                    End of air-mode area
                                                </p>

                                            </div>
                                        </div>

                                        <div class="form-group m-b-0">
                                            <div class="text-right">

                                                <button class="btn btn-purple waves-effect waves-light"> <span>Send</span> <i class="fa fa-send m-l-10"></i> </button>
                                            </div>
                                        </div>

                                    </form>
                                </div> <!-- end card-->

                            </div>

                            <div class="clearfix"></div>
                        </div>

                    </div> <!-- end Col -->

                </div>
            </div>
            <!-- container -->
        </div>
    </div>
</div>


<?php include("footer.php"); ?>
<script src="js/summernote-bs4.min.js"></script>

<script>
    jQuery(document).ready(function(){
        $('.summernote').summernote({
            height: 250,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                 // set focus to editable area after initializing summernote
        });
    });
</script>

</body>

</html>
