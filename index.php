<?php include 'header.php'; ?>

<div class="container" style="padding: 3px;">

    <div class="card" id="card" >
        <form method="post" action="give.php">
        <div class="front">
            <h3 class="center-block text-center">
                <span class="flipHeader pull-left">Give</span>
                <span class="logo" data-toggle="modal" data-target="#myModal">Grasshoppers</span>
                <span class="fa fa-bars flipMe pull-right"></span>
            </h3>

            <div class="row">
                <div class="col-xs-8">
                    <label for="origin">Origin</label>
                    <div angucomplete-alt id="ex1" input-name="origin" placeholder="Origin" maxlength="50" pause="100"  local-data="locations" search-fields="settlement,council,town" title-field="settlement" minlength="1" input-class="form-control input-sm form-control-green" match-class="highlight" ></div>
                </div>

                <div class="col-xs-3">
                    <label>Terms</label>
                    <div class="switch">
                        <input id="switchMoney" name="withTerms" class="cmn-toggle cmn-toggle-round" type="checkbox">
                        <label for="switchMoney"></label>
                    </div>
                </div>

            </div>
            <div id="withMoney" class="row bg-success" style="display: none">


                <div class="col-xs-12 ">
                    <h5 class="green">Money</h5>
                        <div class="btn-group" data-toggle="buttons">
<!--                            <label for="0" class="btn btn-success">-->
<!--                                <input type="radio" name="price[1]" value="0" autocomplete="off">0</label>-->
                            <label for="5" class="btn btn-success">
                                <input type="radio" name="price[2]" value="5" autocomplete="off">5 <i class="fa fa-ils" style="font-size: 11px;"></i> </label>
                            <label for="10" class="btn btn-success">
                                <input type="radio" name="price[3]" value="10" autocomplete="off">10 <i class="fa fa-ils" style="font-size: 11px;"></i> </label>
                            <label for="15" class="btn btn-success">
                                <input type="radio" name="price[4]" value="15" autocomplete="off">15 <i class="fa fa-ils" style="font-size: 11px;"></i> </label>
                            <label for="20" class="btn btn-success">
                                <input type="radio" name="price[5]" value="20" autocomplete="off">20 <i class="fa fa-ils" style="font-size: 11px;"></i> </label>
                            <label for="25" class="btn btn-success">
                                <input type="radio" name="price[6]" value="25" autocomplete="off">25 <i class="fa fa-ils" style="font-size: 11px;"></i> </label>
                            <label for="30" class="btn btn-success">
                                <input type="radio" name="price[7]" value="30" autocomplete="off">30 <i class="fa fa-ils" style="font-size: 11px;"></i> </label>
                            <label for="30" class="btn btn-success">
                                <input type="radio" name="price[8]" value="35" autocomplete="off">35 <i class="fa fa-ils" style="font-size: 11px;"></i> </label>
                            <label for="35" class="btn btn-success">
                                <input type="radio" name="price[9]" value="40" autocomplete="off">40 <i class="fa fa-ils" style="font-size: 11px;"></i> </label>
                            <label for="40" class="btn btn-success">
                                <input type="radio" name="price[10]" value="45" autocomplete="off">45 <i class="fa fa-ils" style="font-size: 11px;"></i> </label>
                            <label for="45" class="btn btn-success">
                                <input type="radio" name="price[11]" value="50" autocomplete="off">50 <i class="fa fa-ils" style="font-size: 11px;"></i> </label>
                            <label for="50" class="btn btn-success">
                                <input type="radio" name="price[12]" value="food" autocomplete="off">Food</label>
                        </div>
                        <div class="divider"></div>
                        <h5 class="green">Terms</h5>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-success">
                                <input type="checkbox" name="petFriendly" autocomplete="off">Pet Friendly</label>
                            <label class="btn btn-success ">
                                <input type="checkbox" name="noAC" autocomplete="off">No A/C</label>
                            <label class="btn btn-success">
                                <input type="checkbox" name="carefulDriver" autocomplete="off">Careful Driver</label>
                            <label class="btn btn-success">
                                <input type="checkbox" name="food" autocomplete="off">Food</label>
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

                        <input id="switchTime" name="giveTime" class="cmn-toggle cmn-toggle-round " type="checkbox">
                        <label for="switchTime" class=""></label>
                    </div>

                </div>

            </div>
                <div id="withTime" class="row bg-success" style="display: none">

                    <div class="col-xs-12 ">
                        <h5 class="green">Time</h5>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-success active">
                                <input type="radio"  name="date[0]" value="<?php echo date("d/m/Y") ?>" id="Today" autocomplete="off">Today</label>
                            <label class="btn btn-success">
                                <input type="radio"  name="date[2]" value="<?php  echo date("d/m/Y", strtotime("+1 days")) ?>" id="Tomorrow" autocomplete="off">Tomorrow </label>
                            <label class="btn btn-success">
                                <input type="radio" name="date[3]" value="<?php  echo date("d/m/Y", strtotime("+2 days")) ?>" id="2days" autocomplete="off">In 2 day's </label>
                            <label class="btn btn-success">
                                <input type="radio" name="date[4]" value="" id="Periodic" autocomplete="off">Periodic</label>

                        </div>
                        <div class="divider"></div>
                        <h5 class="green">Time off day</h5>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-success active">
                                <input type="checkbox" name="time[0]" value="morning"  autocomplete="off" >Morning</label>
                            <label class="btn btn-success active">
                                <input type="checkbox" name="time[1]" value="afternoon" autocomplete="off">Afternoon</label>
                            <label class="btn btn-success active">
                                <input type="checkbox" name="time[2]" value="evening" autocomplete="off">Evening</label>

                        </div>
                    </div>



            </div>
            <div class="row">
                <div class="col-xs-11">
                    <div class="col-xs-6">
                        <i class="fa fa-user"></i> <label for="name">  Name</label>
                    <input type="text" class="form-control-green" name="name" placeholder="Name">
                    </div>
                    <div class="col-xs-6">
                    <i class="fa fa-android"></i> / <i class="fa fa-trash-o"></i> <label for="phone"> Phone</label>
                    <input type="number" name="phone" placeholder="Phone">
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
                <span class="fa fa-bars flipMe pull-right"></span>
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
                        <input id="switchTime2" name="getTime" class="cmn-toggle cmn-toggle-round" type="checkbox">
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
