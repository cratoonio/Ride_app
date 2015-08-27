$("#card").flip({
    trigger: 'manual'
});
$(".flipMe").click(function() {
    $("#card").flip('toggle');
});
$("#switchMoney").click(function() {
    if ($("#switchMoney").is(":checked")) {
        $(".card").css("height", $(".card").height() + 290);
        $("#withMoney").show();
    } else {
        $(".card").css("height", $(".card").height() - 290);
        $("#withMoney").hide();
    }
});
$("#switchTime").click(function() {
    if ($("#switchTime").is(":checked")) {
        $("#withTime").show();
        $(".card").css("height", $(".card").height() + 250);
    } else {
        $("#withTime").hide();
        $(".card").css("height", $(".card").height() - 250);
    }
});
$("#switchTime2").click(function() {
    if ($("#switchTime2").is(":checked")) {
        $("#withTime2").show();
        $(".card").css("height", $(".card").height() + 150);
    } else {
        $("#withTime2").hide();
        $(".card").css("height", $(".card").height() - 150);
    }
});
var i = 2;
$('#addstop').click(function() {
    if (i == 4) {

    } else {
        $(".card").css("height", $(".card").height() + 40);
        $("#stop" + i).show();
        i++;
    }
});
$('#days').click(function() {
    $("#withDay").show();

});
$(".hideday").click(function() {
    $("#withDay").hide();
    $(".day").removeClass("active");
    $("#days").removeClass("active");
    $("#1,#2,#3,#4,#5,#6,#7").prop('checked', false);

});

$("#days").click(function() {
    $("#today").prop('checked', true);
    $(".hideday").removeClass("active");
    $("#today").addClass("active");
});
$("#ex6").on("slide", function(slideEvt) {
    $("#ex6SliderVal").text(slideEvt.value + ":00");
});
$("#ex6").slider({
    tooltip: 'hide'
});
$("#ex5").on("slide", function(slideEvt) {
    $("#ex5SliderVal").text(slideEvt.value + ":00");
});
$("#ex5").slider({
    tooltip: 'hide'
});
$(function() {
    $('[data-toggle="tooltip"]').tooltip();

})