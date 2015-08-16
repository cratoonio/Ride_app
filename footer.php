</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/jquery.flip.js"></script>
<script type="text/javascript" src="js/html5shiv.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.0/angular.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.0/angular-touch.min.js"></script>
<script src="js/libs/angucomplete-alt.js"></script>
<script src="js/app.js"></script>


<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>


<script type="text/javascript">
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
            $(".card").css("height", $(".card").height() + 250);
            $("#withMoney").slideDown("fast");
        }
        else {
            $(".card").css("height", $(".card").height() - 250);
            $("#withMoney").slideUp("fast");
        }
    });

    $("#switchTime").click(function () {
        if ($("#switchTime").is(":checked")) {
            $("#withTime").slideDown("fast");
            $(".card").css("height", $(".card").height() + 250);
        }
        else {
            $("#withTime").slideUp("fast");
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
            $("#withTime2").slideDown("fast");
            $(".card").css("height", $(".card").height() + 150);
        }
        else {
            $("#withTime2").slideUp("fast");
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

</script>


</body>
</html>

