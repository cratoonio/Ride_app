

</div> <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/jquery.flip.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="js/html5shiv.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>


<script type="text/javascript">
    $(document).ready(function(){

        $('input').addClass('form-control input-sm')
        $('select').addClass('form-control input-sm')
    });
    $("#card").flip({
        trigger: 'manual'
    });


    $(".flipme").click(function(){
        $("#card").flip('toggle');
    });


    $('.datepicker').datepicker();

    $("#withmoney").hide();
    $("#switchmoney").click(function() {
        if ($("#switchmoney").is(":checked")) {
            $(".card").css("height", $(".card").height() + 100);
            $("#withmoney").slideDown("fast");
        }
        else {
            $(".card").css("height", $(".card").height() - 100);
            $("#withmoney").slideUp("fast");
        }
    });
    $("#withtime").hide();
    $("#switchtime").click(function() {
        if ($("#switchtime").is(":checked")) {
            $("#withtime").slideDown("fast");
            $(".card").css("height",$(".card").height() + 150);
        }
        else {
            $("#withtime").slideUp("fast");
            $(".card").css("height",$(".card").height() - 150);
        }
    });

</script>


</body>
</html>

