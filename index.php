<?php include 'header.php'; ?>

<div class="container" style="margin-top: 10px;">

    <div class="card" id="card" >
        <form method="post" action="">
        <div class="front">
            <h3 class="center-block text-center">
            <span class="flipheader pull-left">Give</span>
            <span class="logo" data-toggle="modal" data-target="#myModal">Grasshoppers</span>
            <span class="fa fa-bars flipme pull-right"></span>
            </h3>

            <div class="row">
                <div class="col-xs-8">
                    <label for="origin">Origin</label>
                    <div angucomplete-alt id="ex1" input-name="origin" placeholder="Origin" maxlength="50" pause="100"  local-data="locations" search-fields="settlement,council,town" title-field="settlement" minlength="1" input-class="form-control input-sm form-control-green" match-class="highlight" ></div>
                </div>

                <div class="col-xs-3">
                    <label>Terms</label>

                    <div class="switch">
                        <input id="switchmoney" name="pay" class="cmn-toggle cmn-toggle-round" type="checkbox">
                        <label for="switchmoney"></label>
                    </div>
                </div>

            </div>
            <div id="withmoney" class="row bg-success" style="display: none">


                <div class="col-xs-12 ">
                    <h5 class="green">Money</h5>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-success active">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked>0</label>
                            <label class="btn btn-success">
                                <input type="radio" name="options" id="option2" autocomplete="off">5 <i class="fa fa-ils" style="font-size: 11px;"></i> </label>
                            <label class="btn btn-success">
                                <input type="radio" name="options" id="option2" autocomplete="off">10 <i class="fa fa-ils" style="font-size: 11px;"></i> </label>
                            <label class="btn btn-success">
                                <input type="radio" name="options" id="option2" autocomplete="off">15 <i class="fa fa-ils" style="font-size: 11px;"></i> </label>
                            <label class="btn btn-success">
                                <input type="radio" name="options" id="option2" autocomplete="off">20 <i class="fa fa-ils" style="font-size: 11px;"></i> </label>
                            <label class="btn btn-success">
                                <input type="radio" name="options" id="option2" autocomplete="off">25 <i class="fa fa-ils" style="font-size: 11px;"></i> </label>
                            <label class="btn btn-success">
                                <input type="radio" name="options" id="option2" autocomplete="off">30 <i class="fa fa-ils" style="font-size: 11px;"></i> </label>
                            <label class="btn btn-success">
                                <input type="radio" name="options" id="option2" autocomplete="off">35 <i class="fa fa-ils" style="font-size: 11px;"></i> </label>
                            <label class="btn btn-success">
                                <input type="radio" name="options" id="option2" autocomplete="off">40 <i class="fa fa-ils" style="font-size: 11px;"></i> </label>
                            <label class="btn btn-success">
                                <input type="radio" name="options" id="option2" autocomplete="off">45 <i class="fa fa-ils" style="font-size: 11px;"></i> </label>
                            <label class="btn btn-success">
                                <input type="radio" name="options" id="option2" autocomplete="off">50 <i class="fa fa-ils" style="font-size: 11px;"></i> </label>
                            <label class="btn btn-success">
                                <input type="radio" name="options" id="option2" autocomplete="off">Food</label>

                        </div>
                        <div class="divider"></div>
                        <h5 class="green">Terms</h5>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-success">
                                <input type="checkbox" autocomplete="off" checked>Pet Friendly</label>
                            <label class="btn btn-success ">
                                <input type="checkbox" autocomplete="off">No A/C</label>
                            <label class="btn btn-success">
                                <input type="checkbox" autocomplete="off">Careful Driver</label>
                            <label class="btn btn-success">
                                <input type="checkbox" autocomplete="off">Food</label>
                        </div>
                </div>
            </div>
         <div class="row">
                <div id="stops" class="col-xs-8">
                    </i> <label for="stops">Stops</label>
                    <div angucomplete-alt id="ex1" input-name="stops" placeholder="Stops" maxlength="50" pause="100" selected-object="selectedCountry" local-data="locations" search-fields="settlement" title-field="settlement" minlength="1" input-class="form-control input-sm form-control-green" match-class="highlight"></div>
                    
                </div>
                <div class="col-xs-offset-8">

                        <i id="addstop" class="fa fa-plus-circle btn` btn-sm flipPage"></i>
                </div>

            </div>
            <div class="row">

                <div class="col-xs-8">
                    <label for="destination">Destination</label>

                    <div angucomplete-alt id="ex1" input-name="destination"  placeholder="Destination" maxlength="50" pause="100" selected-object="selectedCountry" local-data="locations" search-fields="settlement" title-field="settlement" minlength="1" input-class="form-control input-sm form-control-green" match-class="highlight"></div>
                </div>
                <div class="col-xs-3">
                    <label>Time</label>

                    <div class="switch">

                        <input id="switchtime" name="pay" class="cmn-toggle cmn-toggle-round " type="checkbox">
                        <label for="switchtime" class=""></label>
                    </div>

                </div>

            </div>
                <div id="withtime" class="row bg-success" style="display: none">


<!--                    <i class="pull-right fa fa-get-pocket green" id="arrow" style="top: 269px;right: 50%;position: fixed; font-size: large;"></i>-->

                    <div class="col-xs-12 ">
                        <h5 class="green">Money</h5>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-success active">
                                <input type="radio" name="date" id="Today" autocomplete="off" checked >Today</label>
                            <label class="btn btn-success">
                                <input type="radio" name="date" id="Tomorrow" autocomplete="off">Tomorrow </label>
                            <label class="btn btn-success">
                                <input type="radio" name="date" id="2days" autocomplete="off">In 2 day's </label>
                            <label class="btn btn-success">
                                <input type="radio" name="date" id="Periodic" autocomplete="off">Periodic</label>

                        </div>
                        <div class="divider"></div>
                        <h5 class="green">Time off day</h5>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-success active">
                                <input type="checkbox" autocomplete="off" checked>Morning</label>
                            <label class="btn btn-success active">
                                <input type="checkbox" autocomplete="off">Afternoon</label>
                            <label class="btn btn-success active">
                                <input type="checkbox" autocomplete="off">Evening</label>

                        </div>
                    </div>



            </div>
            <div class="row">
                <div class="col-xs-9">
                    <div class="col-xs-6">
                        <i class="fa fa-user"></i> <label for="name">  Name</label>
                    <input type="text" class="form-control-green" name="name" placeholder="Name">
                    </div>
                    <div class="col-xs-6">
                    <i class="fa fa-android"></i> / <i class="fa fa-trash-o"></i> <label for="phone"> Phone</label>
                    <input type="number" name="phone" placeholder="Phone" required="mast enter phone">
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-xs-11">
                     <label for="remarks">Remarks</label>
                    <textarea class="form-control form-control-green" placeholder="Enter any edition information..."  data-toggle="tooltip"
                              title="Please enter any information regarding the trip" data-placement="bottom"  name="remarks" ></textarea>
                </div>
            </div>

            <button type="submit" name="submit" class="text-center btn btn-default logo">Go!</button>
        </form>

    </div>

        <!-- Modal 1 -->

        <div class="back">

            <h3 class="center-block text-center">
                <span class="flipHeader pull-left">Get</span>
                <span class="logo" data-toggle="modal" data-target="#myModal">Grasshoppers</span>
                <span class="fa fa-bars flipme pull-right"></span>
            </h3>
            <div class="row">
                <div class="col-xs-8">
                    <label for="origin">Origin</label>
                    <div angucomplete-alt id="ex1" input-name="origin" placeholder="Origin" maxlength="50" pause="100" selected-object="selectedCountry" local-data="locations" search-fields="settlement" title-field="settlement" minlength="1" input-class="form-control input-sm form-control-green" match-class="highlight"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <label for="destination">destination</label>
                    <div angucomplete-alt id="ex1" input-name="destination" placeholder="Destination" maxlength="50" pause="100" selected-object="selectedCountry" local-data="locations" search-fields="settlement" title-field="settlement" minlength="1" input-class="form-control input-sm form-control-green" match-class="highlight"></div>
                </div>
                <div class="col-xs-3    ">
                        <label>Time</label>
                    <div class="switch">
                        <input id="switchTime2" name="pay" class="cmn-toggle cmn-toggle-round" type="checkbox">
                        <label for="switchTime2"></label>
                    </div>
                </div>
            </div>
            <div id="withTime2" class="row bg-success" style="display:none">
                <div class="col-xs-12 ">
                    <h5 class="green">Money</h5>
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-success active">
                            <input type="radio" name="date" id="Today" autocomplete="off" checked >Today</label>
                        <label class="btn btn-success">
                            <input type="radio" name="date" id="Tomorrow" autocomplete="off">Tomorrow</label>
                        <label class="btn btn-success">
                            <input type="radio" name="date" id="2days" autocomplete="off">In 2 day's </label>
                        <label class="btn btn-success">
                            <input type="radio" name="date" id="Periodic" autocomplete="off">Periodic </label>

                    </div>
                    <div class="divider"></div>
                    <h5 class="green">Time off day</h5>
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-success active">
                            <input type="checkbox" autocomplete="off" checked>Morning</label>
                        <label class="btn btn-success active">
                            <input type="checkbox" autocomplete="off">Afternoon</label>
                        <label class="btn btn-success active">
                            <input type="checkbox" autocomplete="off">Evening</label>

                    </div>
                </div>
            </div>
        </div>

    </div>


<!--complaint modal -->

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" style="color: #000000;" id="myModalLabel">Welcome young <i class="green">grasshoppers!</i></h4>
                </div>
                <div style="color: #000000" class="modal-body">
                    <p>Got any remarks? Think we just have to change something?
                       Write up anything on your mind.</p> <small>if you have a request it would nice be if you can add a name so we know you're a real person.</small>
                    <label for="complaints">
                    <textarea rows="7" cols="50" name="complaints" class="form-control"></textarea></label>
                    <small>nude pictures are welcome (from female users ;)</small>
                </div>
                <div  style="color: #000000; height: 75px" class="modal-footer">
                    <img src="images/turbine.png" class="pull-left" style="width: 20px;margin-top: 15px" />
                    <small style="margin-top: 20px;margin-left: 3px;" class="pull-left">Powered by turbine</small>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>



<?php include 'footer.php'; ?>
