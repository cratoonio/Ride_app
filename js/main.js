$(function () {
    $('#login-form-link').click(function (e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function (e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
});

$(document).ready(function () {

    $('input').addClass('form-control input-sm')
    $('select').addClass('form-control input-sm')
});
$("#card").flip({
    trigger: 'manual'
});
$(".flipMe").click(function () {
    $("#card").flip('toggle');
});


$("#switchMoney").click(function () {
    if ($("#switchMoney").is(":checked")) {
        $(".card").css("height", $(".card").height() + 290);
        $("#withMoney").show();
    }
    else {
        $(".card").css("height", $(".card").height() - 290);
        $("#withMoney").hide();
    }
});

$("#switchTime").click(function () {
    if ($("#switchTime").is(":checked")) {
        $("#withTime").show();
        $(".card").css("height", $(".card").height() + 250);
    }
    else {
        $("#withTime").hide();
        $(".card").css("height", $(".card").height() - 250);
    }
});
$(function () {
    $('[data-toggle="tooltip"]').tooltip();

})


$("#stop2").hide();
$("#stop3").hide();
$("#switchTime2").click(function () {
    if ($("#switchTime2").is(":checked")) {
        $("#withTime2").show();
        $(".card").css("height", $(".card").height() + 150);
    }
    else {
        $("#withTime2").hide();
        $(".card").css("height", $(".card").height() - 150);
    }
});

var i = 2;
$('#addstop').click(function () {
    if (i == 4) {
        alert("you don't need more stops")
    }
    else {
        $(".card").css("height", $(".card").height() + 40);
        $('#stops').append(" <input type=\"text\" name=\"stop" + i + "\" placeholder=\"Stop-" + i + "\" class=\"form-control input-sm form-control-green\">");
        i++;
    }
});
$('#days').click(function () {
    $("#withDay").slideDown("fast");
});

$(".hideday").click(function () {
    $("#withDay").slideUp("fast");
    $(".day").removeClass("active");
    $("#days").removeClass("active");
    $("#1,#2,#3,#4,#5,#6,#7").prop('checked', false);

});
$("#days").click(function () {
    $("#today").prop('checked', true);
    $(".hideday").removeClass("active");
    $("#today").addClass("active");
});
$("#ex8").slider({
    tooltip: 'always'
});

