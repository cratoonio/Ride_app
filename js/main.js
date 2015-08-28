$("#card").flip({
    trigger: 'manual'
});
$(".flipMe").click(function () {
    $("#card").flip('toggle');
});
$("#switchMoney").click(function () {
    if ($("#switchMoney").is(":checked")) {
        $(".card").css("height", $(".card").height() + 150);
        $("#withMoney").show();
    } else {
        $(".card").css("height", $(".card").height() - 150);
        $("#withMoney").hide();
    }
});
$("#switchTime").click(function () {
    if ($("#switchTime").is(":checked")) {
        $("#withTime").show();
        $(".card").css("height", $(".card").height() + 160);
    } else {
        $("#withTime").hide();
        $(".card").css("height", $(".card").height() - 160);
    }
});
$("#switchTime2").click(function () {
    if ($("#switchTime2").is(":checked")) {
        $("#withTime2").show();
        $(".card").css("height", $(".card").height() + 160);
    } else {
        $("#withTime2").hide();
        $(".card").css("height", $(".card").height() - 160);
    }
});
var i = 2;
$('#addstop').click(function () {
    if (i == 4) {

    } else {
        $(".card").css("height", $(".card").height() + 60);
        $("#stop" + i).show();
        i++;
    }
});
$('#days').click(function () {
    $("#withDay").show();

});
$(".hideday").click(function () {
    $("#withDay").hide();
    $(".day").removeClass("active");
    $("#days").removeClass("active");
    $("#1,#2,#3,#4,#5,#6,#7").prop('checked', false);

});

$("#days").click(function () {
    $("#today").prop('checked', true);
    $(".hideday").removeClass("active");
    $("#today").addClass("active");
});
$("#ex6").on("slide", function (slideEvt) {
    $("#ex6SliderVal").text(slideEvt.value + ":00");
});
$("#ex6").slider({
    tooltip: 'hide'
});
$("#ex5").on("slide", function (slideEvt) {
    $("#ex5SliderVal").text(slideEvt.value + ":00");
});
$("#ex5").slider({
    tooltip: 'hide'
});
$(function () {
    $('[data-toggle="tooltip"]').tooltip();

})

$(document).ready(function(){
    $('#give').submit(function(){

        // show that something is loading
        $('#response').html('<img src="images/ajax-loader.gif">');
        $.post('give.php', $(this).serialize(), function(){

            // show the response
            $('#response').empty();
            $('#response').html("Drive safe. its Up");
        }).fail(function() {

            // just in case posting your form failed
            alert( "Posting failed." );

        });
        return false;

    });
});
$(document).ready(function(){
    $('#get').submit(function(){
        // show that something is loading
        $('#response1').html('<img src="images/ajax-loader.gif">');
        $.post('get.php', $(this).serialize(), function(data){

            // show the response
            $('#response1').empty();
            $('#result').html(data);

        }).fail(function() {
            // just in case posting your form failed
            alert( "Posting failed." );
        });
        return false;
    });
});
$(document).ready(function(){
    $( "input[name='origin']").attr("required","");
    $( "input[name='destination']").attr("required","");
});
