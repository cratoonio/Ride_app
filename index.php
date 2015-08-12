<?php include 'header.php'; ?>
<body ng-controller="MainController">

<?php //include 'nav.php' ?>
<div class="container" style="margin-top: 10px;">

    <div class="card" id="card" >
        <form method="post" action="">
        <div class="front">

            <span class="flipheader">Give</span>
            <h3 class="top-bar-brand text-centered logo" style="left:44%" data-toggle="modal" data-target="#myModal">Shotgun</h3>
            <i class="glyphicon glyphicon-indent-left pull-right flipme"></i>

            <div class="row">
                <div class="col-xs-8">
                    <label for="origin">Origin</label>
                    <div angucomplete-alt id="ex1" input-name="origin" placeholder="Origin" maxlength="50" pause="100"  local-data="locations" search-fields="settlement,council,town" title-field="settlement" minlength="1" input-class="form-control input-sm form-control-green" match-class="highlight"></div>
                </div>

                <div class="col-xs-3 " style="margin-right: 10px">
                    <label>Money</label>

                    <div class="switch">
                        <input id="switchmoney" name="pay" class="cmn-toggle cmn-toggle-round" type="checkbox">
                        <label for="switchmoney"></label>
                    </div>
                </div>

            </div>
            <div id="withmoney" class="row bg-success" style="display: none">
                <i class="glyphicon glyphicon-chevron-down pull-right green" style="margin-right: 9%"></i>

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
                    <div angucomplete-alt id="ex1" input-name="stops" placeholder="Stops" maxlength="50" pause="100" selected-object="selectedCountry" local-data="locations" search-fields="settlement" title-field="settlement" minlength="1" input-class="form-control input-sm form-control-green" match-class="highlight"></div>
                    
                </div>
                <div class="col-xs-1">
                    <i id="addstop" class="btn-default  btn btn-sm glyphicon glyphicon-plus flippage"></i>
                </div>

            </div>
            <div class="row">

                <div class="col-xs-8">
                    <label for="destination">Destination</label>
                    <div angucomplete-alt id="ex1" input-name="destination"  placeholder="Destination" maxlength="50" pause="100" selected-object="selectedCountry" local-data="locations" search-fields="settlement" title-field="settlement" minlength="1" input-class="form-control input-sm form-control-green" match-class="highlight"></div>
                </div>
                <div class="col-xs-3 ">
                    <label>Time</label>

                    <div class="switch">

                        <input id="switchtime" name="pay" class="cmn-toggle cmn-toggle-round " type="checkbox">
                        <label for="switchtime" class=""></label>
                    </div>

                </div>

            </div>
                <div id="withtime" class="row bg-success" style="display: none">


                    <i class="glyphicon glyphicon-chevron-down pull-right green" style="margin-right: 9%"></i>
                    <div class="container">
                    <div id="datetimepicker" class="datetimepicker-inlinex`"></div>

                        <p>please insert date and time of trip. if not inserted,</p>
                    </div>



            </div>
        </form>
<!--            <div class="pull-right">-->
<!--                -->
<!--            </div>-->
        </div>

        <!-- Modal 1 -->
    <form method="post" action="">
        <div class="back">

            <span class="flipheader">Get</span>
            <h3 class="top-bar-brand text-centered logo" style="left:44%" data-toggle="modal" data-target="#myModal">Shotgun</h3>
            <i class="glyphicon glyphicon-indent-left pull-right flipme"></i>

            <div class="row">
                <div class="col-xs-8">
                    <label for="origin">Origin</label>
                    <div angucomplete-alt id="ex1" input-name="origen" placeholder="Origin" maxlength="50" pause="100" selected-object="selectedCountry" local-data="locations" search-fields="settlement" title-field="settlement" minlength="1" input-class="form-control input-sm form-control-green" match-class="highlight"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <label for="destination">destination</label>
                    <div angucomplete-alt id="ex1" input-name="destination" placeholder="Destination" maxlength="50" pause="100" selected-object="selectedCountry" local-data="locations" search-fields="settlement" title-field="settlement" minlength="1" input-class="form-control input-sm form-control-green" match-class="highlight"></div>
                </div>
                <div class="col-xs-3">
                    <label>Time</label>
                    <div class="switch">
                        <input id="switchtime2" name="pay" class="cmn-toggle cmn-toggle-round" type="checkbox">
                        <label for="switchtime2"></label>
                    </div>
                </div>
            </div>
            <div id="withtime2" class="row bg-success" style="display:none">
                <i class="glyphicon glyphicon-chevron-down pull-right green" style="margin-right: 9%;"></i>

                <div class="col-xs-offset-2" id="datetimepicker1">
            </div>
        </div>

    </div>
    </form>
</div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" style="color: #000000;" id="myModalLabel">Welcome to shotgun young <i class="green">grasshoppers!</i></h4>
                </div>
                <div style="color: #000000" class="modal-body">
                    <p>Got any remarks? Think we just have to change something?
                       Write up anything on your mind.</p> <small>if you have a request it would nice if you can add a name so we know you're a real person.</small>
                    <textarea rows="7" cols="50" class="form-control" ></textarea>
                    <small>nude pictures are welcome (from female users ;))</small>
                </div>
                <div  style="color: #000000; height: 75px" class="modal-footer">
                    <img src="images/turbine.png" class="pull-left" style="width: 20px;margin-top: 15px" />
                    <small style="margin-top: 18px" class="pull-left">Powered by turbine</small>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>

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
