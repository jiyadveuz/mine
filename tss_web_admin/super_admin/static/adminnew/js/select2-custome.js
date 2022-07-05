

$(".select2-addmore").select2();

$(".select2-multi").select2();

$(".select2-close").select2();

$(".select2").select2();

$(".selectbutton").select2();


$(".slect.select2").change(function(){
    if ($(this).val()){
        $(this).parent().find(".clearbtnn").addClass('select_remove');
        $(this).select2("enable",false);
    }
    else {
        $(this).select2("enable",false);
    }
});


$(".slect.select2-addmore").change(function(){
    if ($(this).val()){
        $(this).parent().find(".clearbtnn").addClass('select_remove');
        $(this).select2("enable",false);
    }
    else {
        $(this).select2("enable",false);
    }
});

$(document).on('click',".clearbtnn",function() {
    $(this).parent().prev().val(1).select2("open").next().find('.select2-selection__rendered').html("");
    $(this).removeClass('select_remove');
});
$(document).on('click',".clearbtnn",function() {
    $(this).parent().prev().val(1).select2("open").next().find('.select2-selection__rendered').html("");
    $(this).removeClass('select_remove');
});

$(".select2-addmore").select2().on("select2:open", function () {
    var a = $(this).data("select2");
    if (!$(".select2-link").length) {
        a.$results.parents(".select2-results")
            .append('<div class="select2-link"><a href="#/"> + Add New item </a></div>')
            .on("click", function (b) {
                a.trigger("close");
            });
    }
});

$('.slect').select2({}).focus(function ()
{
    $(this).closest('.bmd-form-group').find('label.openselect2').addClass('select2_label')
});



$(".openselect2").on("click", function (){
    $(this).parent().find(".select2").select2("open").find('.select2').select2('focus');
});


$(".clearbtnn").click(function(){
    $(this).parent().prev().parent().find(".inputText").addClass("input_focus");
});
$(document).on('click', function(e) {
    if (!$(event.target).parent().prev().parent().find('.inputText').length)  {
        $(".inputText").hasClass(".input_focus").removeClass("input_focus");
    }
});

$(".select2-selection__arrow").click(function(){
    $(this).parent().parent().parent().parent().find(".inputText").addClass("input_focus");
});
$(".select2 select2-container").click(function(){
    $(this).parent().find(".inputText").addClass("input_focus");
});


$(".select2-multi").select2();
$(".openselect2").on("click", function (){
    $(this).parent().find(".select2-multi").select2("open").find('.select2').select2('focus');
});

$(".select2-search__field").focus(function(){
    $(this).parent().parent().parent().parent().parent().parent().parent().find(".inputText").addClass("input_focus");
});

$(".select2-search__field").focusout(function(){
    $(this).parent().parent().parent().parent().parent().parent().parent().find(".inputText").removeClass("input_focus");
});
$(document).on('focus', '.select2', function() {
    if ($(this).focus()){
        $(this).parent(".bmd-form-group").find(".openselect2").addClass('open');
    }
    else {
        $(this).parent(".bmd-form-group").find(".openselect2").removeClass('open');
    }
});
