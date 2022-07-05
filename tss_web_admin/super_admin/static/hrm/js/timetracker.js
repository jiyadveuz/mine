
$(".FilterDrop div i").click(function () {
    $(this).parent().parent().toggleClass("FilterDropActive");
    $(".FilterDropBox").toggleClass("hide");
});
$(".FilterCloseButton").click(function () {
    $(".FilterDropBox").addClass("hide");
    $(".FilterDrop").toggleClass("FilterDropActive");
});


$('#datetimepicker6').datetimepicker({format: 'DD-MM-YYYY'});
$('#datetimepicker7').datetimepicker({
    format: 'DD-MM-YYYY',
    useCurrent: false //Important! See issue #1075
});
$("#datetimepicker6").on("dp.change", function (e) {
    $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
});
$("#datetimepicker7").on("dp.change", function (e) {
    $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
});


function color(){
    var color = document.querySelector(".colorpicker").value;
    document.querySelector("html").setAttribute("style", "--bg-color:" + color + ";");
};

window.onload=function(){
    $slideshow = $('.slider').slick({
        dots:true,
        autoplay:false,
        arrows:true,
        prevArrow:'<button type="button" class="slick-prev"></button>',
        nextArrow:'<button type="button" class="slick-next"></button>',
        slidesToShow:1,
        slidesToScroll:1
    });
    $('.slide').click(function() {
        $slideshow.slick('slickNext');
    });
};

$(function () {
    $('#datetimepickerTimelog').datetimepicker({format: 'DD-MM-YYYY',});

        $('#Houronly').datetimepicker({
            format: 'LT'
        });

    $('#HourStart').datetimepicker({ format: 'LT'});
    $('#HourEnd').datetimepicker({
        format: 'LT',
        useCurrent: false //Important! See issue #1075
    });
    $("#HourStart").on("dp.change", function (e) {
        $('#HourEnd').data("DateTimePicker").minDate(e.date);
    });
    $("#HourEnd").on("dp.change", function (e) {
        $('#HourStart').data("DateTimePicker").maxDate(e.date);
    });


});

$(".Bulk_Edit_Button").click(function (e) {
    $('.bulkCheckBox').toggleClass("hide");
});

$(".bulk_SUB_CheckAlign").click(function (e) {
    $('.bulkEdit_Tools').removeClass("hide");
});

$(".prjectSubPlay_Btn").click(function (e) {
    $(this).addClass("hide");
    $(this).siblings().removeClass("hide");
});

$(".prjectSubPause_Btn").click(function (e) {
    $(this).addClass("hide");
    $(this).siblings().removeClass("hide");
});

$(".noteBtn").click(function (e) {
    $(this).siblings('.dropdown-menuBox').toggleClass("hide");

});
$(".NoteCloseButton i").click(function (e) {
    $(this).parent().parent().addClass("hide");

});

$('#checkbox_Start_End').click(function(){
        $('.checkbox_Start_EndBox').removeClass('hide');
        $('.checkboxHoursBox').addClass('hide');
        $('.checkbox_Start_TimerBox').removeClass('hide');

});
$('#checkboxHours').click(function(){
        $('.checkbox_Start_EndBox').addClass('hide');
        $('.checkboxHoursBox').removeClass('hide');
        $('.checkbox_Start_TimerBox').removeClass('hide');

});
$('#checkbox_Start_Timer').click(function(){
        $('.checkbox_Start_TimerBox').addClass('hide');

});




