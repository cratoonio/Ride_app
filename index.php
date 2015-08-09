<?php include 'header.php'; ?>
<body>

<?php //include 'nav.php' ?>
<div class="container" style="margin-top: 10px;">
    <!--        <img src="images/turbine.png"  class="img-responsive col-xs-10 col-xs-offset-2 text-center" style="position:fixed;top:22%;">-->
    <div class="card" id="card" style="box-sizing: inherit">
        <div class="front">

            <span style="color: #ffffff;font-weight: 900;font-size: x-large">Give</span>
            <i class="glyphicon glyphicon-indent-left pull-right flipme" style="font-size: x-large"></i>

            <div class="row">
                <div class="col-xs-8">
                    <label for="origin">Origin</label>
                    <input type="text" name="origin" placeholder="Origin" class="form-control form-control-green">
                </div>

                <div class="col-xs-3 " style="margin-right: 10px">
                    <label>Money</label>

                    <div class="switch" style="margin-top: 3px ">
                        <input id="switchmoney" name="pay" class="cmn-toggle cmn-toggle-round" type="checkbox">
                        <label for="switchmoney"></label>
                    </div>
                </div>

            </div>
            <div id="withmoney" class="row bg-success">
                <i class="glyphicon glyphicon-chevron-down pull-right" style="margin-right: 9%;color: #16A085;"></i>

                <div class="col-xs-12 ">
                    <div class="btn-group" role="group" aria-label="...">
                        <button type="button" class="btn btn-default form-control-green">0</button>
                        <button type="button" class="btn btn-default form-control-green">5</button>
                        <button type="button" class="btn btn-default form-control-green">10</button>
                        <button type="button" class="btn btn-default form-control-green">15</button>
                        <button type="button" class="btn btn-default form-control-green">20</button>
                        <button type="button" class="btn btn-default form-control-green">25</button>
                        <button type="button" class="btn btn-default form-control-green">30</button>
                        <button type="button" class="btn btn-default form-control-green">35</button>
                        <button type="button" class="btn btn-default form-control-green">40</button>
                        <button type="button" class="btn btn-default form-control-green">45</button>
                        <button type="button" class="btn btn-default form-control-green">50</button>
                    </div>
                </div>
            </div>


            <div class="row">
                <div id="stops" class="col-xs-8">
                    <label for="stops">Stops</label>
                    <input type="text" name="stops" placeholder="Stop" class="form-control form-control-green">
                </div>
                <div class="col-xs-1">
                    <i style="background-color: #Ffffff;color:#16A085 ; margin-top: 28px" id="addstop"
                       class="btn-default  btn btn-sm glyphicon glyphicon-plus"></i>
                </div>

            </div>
            <div class="row">

                <div class="col-xs-8">
                    <label for="destination">Destination</label>
                    <input type="text" name="destination" placeholder="Destination" class="form-control form-control-green">
                </div>
                <div class="col-xs-3 " style="margin-right: 10px">
                    <label>Time</label>

                    <div class="switch " style="margin-top: 3px ">

                        <input id="switchtime" name="pay" class="cmn-toggle cmn-toggle-round " type="checkbox">
                        <label for="switchtime" class=""></label>
                    </div>

                </div>

            </div>
            <div id="withtime" style="color: #16A085" class="row bg-success">

                <div class="container">
                    <div class="col-xs-offset-2" id="datetimepicker"></div>

                </div>


            </div>


        </div>

        <!-- Modal 1 -->
        <div class="back">
            <span style="color: #ffffff;font-weight: 900;font-size: x-large">Get</span>
            <i class="glyphicon glyphicon-indent-left pull-right flipme" style="font-size: x-large"></i>

            <div class="row">
                <div class="col-xs-12">
                    <label for="origin">Origin</label>
                    <input type="text" name="origin" placeholder="Origin" class="form-control form-control-green">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <label for="destination">destination</label>
                    <input type="text" name="destination" placeholder="Destination" class="form-control form-control-green">
                </div>
                <div class="col-xs-3" style="margin-right: 10px">
                    <div class="switch2" style="margin-top: 29px ">
                        <input id="switchtime2" name="pay" class="cmn-toggle cmn-toggle-round" type="checkbox">
                        <label for="switchtime2"></label>
                    </div>
                </div>
            </div>
            <div id="withtime2" style="color: #16A085" class="row bg-success">
                <i class="glyphicon glyphicon-chevron-down pull-right" style="margin-right: 9%;color: #16A085;"></i>

                <div class="col-xs-offset-2"
                " id="datetimepicker1">
            </div>
        </div>

    </div>
</div>


<!---->
<!--                <a href="#" class="btn bg-primary"><img src="images/facebook-512.png" style="height: 77px;"></a>-->
<!---->
<!--                <a href="#" class="btn btn-info"><img src="images/whatsapp-512.png" style="height: 77px;"></a>-->
<!---->
<!--                <a href="#" class="btn btn-success"><img src="images/android-512.png" style="height: 77px;"></a>-->
<!---->



<?php include 'footer.php'; ?>
