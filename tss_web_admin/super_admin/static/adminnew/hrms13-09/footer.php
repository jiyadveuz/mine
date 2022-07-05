
<script src="js/jquery.min.js"></script>
<script src="js/custome.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/metisMenu.min.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/moment.js"></script>
<script src="js/bootstrap-timepicker.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<!--<script src="js/moment.js"></script>-->

<script src="js/jquery.core.js"></script>
<script src="js/jquery.app.js"></script>


<script>
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 0) {
            $("html").addClass("modal-open2");
        }
    });
</script>
<script>
    $(document).ready(function() {
        // Check if body height is higher than window height :)
        if ($("body").height() > $(window).height()) {
            // alert('asda')
            $('html').addClass('modal-open2');
        }
    });
</script>



<script>
    let eleBtnStart = document.querySelector("#btnStart");
    let eleBtnStop = document.querySelector("#btnStop");
    let eleTimer = document.querySelector("#divTimer");

    let timeTicker = (() => {
        var hours = minutes = seconds = 0;
        var timerTick;
        return {
            start : () => {
                if(!timerTick) {
                    timerTick = setInterval(() => {
                        seconds++;
                        if(seconds == 60) {
                            minutes += 1;
                            seconds = 0;
                            if(minutes == 60) {
                                hours += 1;
                                minutes = 0;
                            }
                        }
                        eleTimer.innerHTML = `
${hours.toString().length == 1 ? "0" + hours : hours}
: ${minutes.toString().length == 1 ? "0" + minutes:minutes} Hrs`;
                    },25);
                }
            },
            stop : () => {
                if(timerTick) {
                    clearInterval(timerTick);
                    timerTick = false;
                }
            },
            reset : () => {
                seconds = minutes = hours = 0;
                clearInterval(timerTick);
                timerTick = false;
                eleTimer.innerHTML = `0${hours}:0${minutes}  Hrs`;
            }
        }
    })();
 eleBtnStart.addEventListener('click', () => {
        timeTicker.start();
    });
    eleBtnStop.addEventListener('click', () => {
        timeTicker.stop();
    });

    $('#btnStart').click(function (){
        $(this).closest('.timer').addClass('timer_actv')
    });
    $('#btnStop').click(function (){
        $(this).closest('.timer').removeClass('timer_actv')
    });

    $('.timerbtn_start').click(function (){
        $(this).addClass('disnone_timer')
        $(this).siblings('.timerbtn').addClass('timerbtn_stop');
        $(this).parent().siblings('.divTimer').addClass('divTimer_dsplay')

    });
    $('.timerbtn_stop').click(function (){
        $(this).removeClass('timerbtn_stop')
        $(this).siblings('.timerbtn').removeClass('disnone_timer');
        $(this).parent().siblings('.divTimer').removeClass('divTimer_dsplay')
    });


</script>
<script>
    $(document).ready(function () {
        $(window).click(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 0) {
                $("#wrapper").addClass("modal-open2");
            }
        });
    });
</script>

<script src="js/jquery.core.js"></script>
<script src="js/jquery.app.js"></script>
<!-- App js -->
<script src="js/select2.full.js"></script>
<script src="js/select2-custome.js"></script>

