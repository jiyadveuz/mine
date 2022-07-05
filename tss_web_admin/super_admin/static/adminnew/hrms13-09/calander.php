<?php include('header.php') ?>
<link href="css/fullcalendar.min.css" rel="stylesheet"/>



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
                                            <li class="dropdown FilterDrop">
                                                <div class="dropdown-toggle" data-toggle="dropdown"><i
                                                            class="fa fa-filter"></i></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- **************************************-->
                        <div class="card-box Card_height">
                            <div class="row">
                                <div class="clndr_Box">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- container -->
    </div>
</div>


<div id="modal-view-event-add" class="modal modal-top fade calendar-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="add-event">
                <div class="modal-body">
                    <h4>Add Event Detail</h4>
                    <div class="form-group">
                        <label>Event name</label>
                        <input type="text" class="form-control" name="ename">
                    </div>
                    <div class="form-group">
                        <label>Event Date</label>
                        <input type='text' class="form-control date" id="edate">
                    </div>
                    <div class="form-group">
                        <label>Event Description</label>
                        <textarea class="form-control" name="edesc"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Event Color</label>
                        <select class="form-control" name="ecolor">
                            <option value="fc-bg-default">fc-bg-default</option>
                            <option value="fc-bg-blue">fc-bg-blue</option>
                            <option value="fc-bg-lightgreen">fc-bg-lightgreen</option>
                            <option value="fc-bg-pinkred">fc-bg-pinkred</option>
                            <option value="fc-bg-deepskyblue">fc-bg-deepskyblue</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Event Icon</label>
                        <select class="form-control" name="eicon">
                            <option value="circle">circle</option>
                            <option value="cog">cog</option>
                            <option value="group">group</option>
                            <option value="suitcase">suitcase</option>
                            <option value="calendar">calendar</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
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
<?php include("footer.php"); ?>

<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/timetracker.js"></script>


<script src="js/fullcalendar.min.js"></script>



<!-- Page specific script -->
<script>
    jQuery(document).ready(function () {
        jQuery('.datetimepicker').datepicker({
            timepicker: true,
            language: 'en',
            range: true,
            multipleDates: true,
            multipleDatesSeparator: " - "
        });
        jQuery("#add-event").submit(function () {
            alert("Submitted");
            var values = {};
            $.each($('#add-event').serializeArray(), function (i, field) {
                values[field.name] = field.value;
            });
            console.log(
                values
            );
        });
    });

    (function () {
        'use strict';
        // ------------------------------------------------------- //
        // Calendar
        // ------------------------------------------------------ //
        jQuery(function () {
            // page is ready
            jQuery('#calendar').fullCalendar({
                themeSystem: 'bootstrap4',
                // emphasizes business hours
                businessHours: false,
                defaultView: 'month',
                // event dragging & resizing
                editable: true,
                // header
                header: {
                    left: 'title',
                    center: 'month,agendaWeek,agendaDay',
                    right: 'today prev,next'
                },
                events: [
                    {
                        title: 'Barber',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                        start: '2019-07-07',
                        end: '2019-07-07',
                        className: 'fc-bg-default',
                        icon: "circle"
                    },
                    {
                        title: 'Flight Paris',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                        start: '2019-08-08T14:00:00',
                        end: '2019-08-08T20:00:00',
                        className: 'fc-bg-deepskyblue',
                        icon: "cog",
                        allDay: false
                    },
                    {
                        title: 'Team Meeting',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                        start: '2019-07-10T13:00:00',
                        end: '2019-07-10T16:00:00',
                        className: 'fc-bg-pinkred',
                        icon: "group",
                        allDay: false
                    },
                    {
                        title: 'Meeting',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                        start: '2019-08-12',
                        className: 'fc-bg-lightgreen',
                        icon: "suitcase"
                    },
                    {
                        title: 'Conference',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                        start: '2019-08-13',
                        end: '2019-08-15',
                        className: 'fc-bg-blue',
                        icon: "calendar"
                    },
                    {
                        title: 'Baby Shower',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                        start: '2019-08-13',
                        end: '2019-08-14',
                        className: 'fc-bg-default',
                        icon: "child"
                    },
                    {
                        title: 'Birthday',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                        start: '2019-09-13',
                        end: '2019-09-14',
                        className: 'fc-bg-default',
                        icon: "birthday-cake"
                    },
                    {
                        title: 'Restaurant',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                        start: '2019-10-15T09:30:00',
                        end: '2019-10-15T11:45:00',
                        className: 'fc-bg-default',
                        icon: "glass",
                        allDay: false
                    },
                    {
                        title: 'Dinner',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                        start: '2019-11-15T20:00:00',
                        end: '2019-11-15T22:30:00',
                        className: 'fc-bg-default',
                        icon: "cutlery",
                        allDay: false
                    },
                    {
                        title: 'Shooting',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                        start: '2019-08-25',
                        end: '2019-08-25',
                        className: 'fc-bg-blue',
                        icon: "camera"
                    },
                    {
                        title: 'Go Space :)',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                        start: '2019-12-27',
                        end: '2019-12-27',
                        className: 'fc-bg-default',
                        icon: "rocket"
                    },
                    {
                        title: 'Dentist',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu pellentesque nibh. In nisl nulla, convallis ac nulla eget, pellentesque pellentesque magna.',
                        start: '2019-12-29T11:30:00',
                        end: '2019-12-29T012:30:00',
                        className: 'fc-bg-blue',
                        icon: "medkit",
                        allDay: false
                    }
                ],
                eventRender: function (event, element) {
                    if (event.icon) {
                        element.find(".fc-title").prepend("<i class='fa fa-" + event.icon + "'></i>");
                    }
                },
                dayClick: function () {
                    jQuery('#modal-view-event-add').modal();
                },
                eventClick: function (event, jsEvent, view) {
                    jQuery('.event-icon').html("<i class='fa fa-" + event.icon + "'></i>");
                    jQuery('.event-title').html(event.title);
                    jQuery('.event-body').html(event.description);
                    jQuery('.eventUrl').attr('href', event.url);
                    jQuery('#modal-view-event').modal();
                },
            })
        });

    })(jQuery);
</script>
<script>
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 56) {
            $(".FilterDropBox").addClass("sticky");
        } else {
            $(".FilterDropBox").removeClass("sticky");
        }
    });
</script>

<script type="text/javascript">
    $(function () {
        $('#edate').datetimepicker();
    });
</script>

</body>
</html>
