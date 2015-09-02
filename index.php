<?php include 'header.php'; ?>
    <div class="container" style="padding:3px"
         xmlns="http://www.w3.org/1999/html">
        <div class="card" id="card">
            <form  id="give" accept-charset="UTF-8">
                <div class="back">
                    <div class="row">
                        <div class="col-xs-4 pull-left">
                            <span class="flipHeader pull-left">Give</span>
                        </div>


                        <div class="col-xs-4 pull-right">
                            <span class="fa fa-bars fa-2x flipMe pull-right"></span>
                        </div>
                    </div>
                    <div class="row row-app">
                        <div class="col-xs-8">
                            <label for="origin">Origin</label>

                            <div angucomplete-alt id="ex1" input-name="origin"
                                 placeholder="Origin" maxlength="50"
                                 pause="100" local-data="locations"
                                 search-fields="settelment" title-field="settelment"
                                 minlength="2" input-class="form-control input-sm form-control-green"
                                 match-class="highlight"></div>
                        </div>
                        <div class="col-xs-3" style="padding-left: 0px">
                            <label>Price</label>

                            <div class="switch">
                                <input id="switchMoney" class="cmn-toggle cmn-toggle-round"
                                       type="checkbox">
                                <label for="switchMoney"></label>
                            </div>
                        </div>
                    </div>
                    <div id="withMoney" class="row row-app bg-success"
                         style="display:none">
                        <div class="col-xs-12">
                            <h5 class="green">Money</h5>

                            <div class="btn-group" data-toggle="buttons">
                                <label for="5" class="btn btn-success active">
                                    <input type="radio" name="price" value="0"
                                           autocomplete="off" checked>0 <i class="fa fa-ils" style="font-size:11px"></i>
                                </label>
                                <label for="5" class="btn btn-success">
                                    <input type="radio" name="price" value="5"
                                           autocomplete="off">5 <i class="fa fa-ils" style="font-size:11px"></i>
                                </label>
                                <label for="10" class="btn btn-success">
                                    <input type="radio" name="price" value="10"
                                           autocomplete="off">10 <i class="fa fa-ils" style="font-size:11px"></i>
                                </label>
                                <label for="15" class="btn btn-success">
                                    <input type="radio" name="price" value="15"
                                           autocomplete="off">15 <i class="fa fa-ils" style="font-size:11px"></i>
                                </label>
                                <label for="20" class="btn btn-success">
                                    <input type="radio" name="price" value="20"
                                           autocomplete="off">20 <i class="fa fa-ils" style="font-size:11px"></i>
                                </label>
                                <label for="25" class="btn btn-success">
                                    <input type="radio" name="price" value="25"
                                           autocomplete="off">25 <i class="fa fa-ils" style="font-size:11px"></i>
                                </label>
                                <label for="30" class="btn btn-success">
                                    <input type="radio" name="price" value="30"
                                           autocomplete="off">30 <i class="fa fa-ils" style="font-size:11px"></i>
                                </label>
                                <label for="30" class="btn btn-success">
                                    <input type="radio" name="price" value="35"
                                           autocomplete="off">35 <i class="fa fa-ils" style="font-size:11px"></i>
                                </label>
                                <label for="35" class="btn btn-success">
                                    <input type="radio" name="price" value="40"
                                           autocomplete="off">40 <i class="fa fa-ils" style="font-size:11px"></i>
                                </label>
                                <label for="40" class="btn btn-success">
                                    <input type="radio" name="price" value="45"
                                           autocomplete="off">45 <i class="fa fa-ils" style="font-size:11px"></i>
                                </label>
                                <label for="45" class="btn btn-success">
                                    <input type="radio" name="price" value="50"
                                           autocomplete="off">50 <i class="fa fa-ils" style="font-size:11px"></i>
                                </label>
                                <label for="food" class="btn btn-success">
                                    <input type="radio" name="price" value="food"
                                           autocomplete="off">Food</label>
                            </div>
                            <div class="divider"></div>
                            <h5 class="green">Terms</h5>

                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-success">
                                    <input type="checkbox" name="petFriendly"
                                           value="1" autocomplete="off">Pet Friendly</label>
                                <label class="btn btn-success">
                                    <input type="checkbox" name="noAC" value="1"
                                           autocomplete="off">No A/C</label>
                                <label class="btn btn-success">
                                    <input type="checkbox" name="smoker"
                                           value="1" autocomplete="off">Smoker
                                </label>

                            </div>
                        </div>
                    </div>
                    <div class="row row-app">
                        <div id="stops" class="col-xs-8">
                            </i>
                            <label for="stops">Stops</label>

                            <div angucomplete-alt id="ex1" input-name="stops"
                                 placeholder="Stops" maxlength="50"
                                 pause="100" selected-object="selectedCountry"
                                 local-data="locations" search-fields="settelment"
                                 title-field="settelment" minlength="2"
                                 input-class="form-control input-sm form-control-green"
                                 match-class="highlight"></div>
                        </div>
                        <div class="col-xs-3" style="padding-left: 0px">
                            <i id="addstop" class="fa fa-plus-circle btn btn-sm flipPage"></i>
                        </div>
                        <div id="stop2" class="col-xs-8" style="display: none">
                            </i>
                            <label for="stops">stop-2</label>

                            <div angucomplete-alt id="ex1" input-name="stop2"
                                 placeholder="Stop-2" maxlength="50"
                                 pause="100" selected-object="selectedCountry"
                                 local-data="locations" search-fields="settelment"
                                 title-field="settelment" minlength="2"
                                 input-class="form-control input-sm form-control-green"
                                 match-class="highlight"></div>
                        </div>
                        <div id="stop3" class="col-xs-8" style="display: none">
                            </i>
                            <label for="stops">stop-3</label>

                            <div angucomplete-alt id="ex1" input-name="stop3"
                                 placeholder="Stop-3" maxlength="50"
                                 pause="100" selected-object="selectedCountry"
                                 local-data="locations" search-fields="settelment"
                                 title-field="settelment" minlength="2"
                                 input-class="form-control input-sm form-control-green"
                                 match-class="highlight"></div>
                        </div>

                    </div>
                    <div class="row row-app">
                        <div class="col-xs-8">
                            <label for="destination">Destination</label>

                            <div angucomplete-alt id="ex1" input-name="destination"
                                 placeholder="Destination" maxlength="50"
                                 pause="100" selected-object="selectedCountry"
                                 local-data="locations" search-fields="settelment"
                                 title-field="settelment" minlength="2"
                                 input-class="form-control input-sm form-control-green"
                                 match-class="highlight"></div>
                        </div>
                        <div class="col-xs-3" style="padding-left: 0px">
                            <label>Time</label>

                            <div class="switch">
                                <input id="switchTime" class="cmn-toggle cmn-toggle-round"
                                       type="checkbox">
                                <label for="switchTime" class=""></label>
                            </div>
                        </div>
                    </div>
                    <div id="withTime" class=" row row-app bg-success"
                         style="display:none">
                        <div class="col-xs-12">
                            <h5 class="green">Day</h5>

                            <div class="btn-group" data-toggle="buttons">
                                <label id="today" class="btn btn-success hideday active">
                                    <input type="radio" name="date" value="<?php echo date("
								Y-m-d ") ?>" id="Today" autocomplete="off"
                                           checked>Today</label>
                                <label class="btn hideday btn-success">
                                    <input type="radio" name="date" value="<?php echo date("
								Y-m-d ", strtotime("+1 days
								")) ?>" id="Tomorrow" autocomplete="off">Tomorrow </label>
                                <label class="btn hideday btn-success">
                                    <input type="radio" name="date" value="<?php echo date("
								Y-m-d ", strtotime("+2 days
								")) ?>" id="2days" autocomplete="off">In 2 day's </label>

                            </div>
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-success" id="days">
                                    <input type="radio" name="Periodic" value="1"
                                           id="Periodic" autocomplete="off">Periodic</label>
                            </div>
                            <div class="btn-group" id="withDay" data-toggle="buttons"
                                 style="display:none">
                                <label class="btn btn-success day">
                                    <input type="checkbox" name="sun" value="1"
                                           id="1" autocomplete="off">S</label>
                                <label class="btn btn-success day">
                                    <input type="checkbox" name="mon" value="1"
                                           id="2" autocomplete="off">M</label>
                                <label class="btn btn-success day">
                                    <input type="checkbox" name="tue" value="1"
                                           id="3" autocomplete="off">T</label>
                                <label class="btn btn-success day">
                                    <input type="checkbox" name="wed" value="1"
                                           id="4" autocomplete="off">W</label>
                                <label class="btn btn-success day">
                                    <input type="checkbox" name="thu" value="1"
                                           id="5" autocomplete="off">T</label>
                                <label class="btn btn-success day">
                                    <input type="checkbox" name="fri" value="1"
                                           id="6" autocomplete="off">F</label>
                                <label class="btn btn-success day">
                                    <input type="checkbox" name="sat" value="1"
                                           id="7" autocomplete="off">S</label>
                            </div>
                            <div class="divider"></div>
                            <h5 class="green" id="ex6CurrentSliderValLabel">Time off day <b><span
                                        id="ex6SliderVal"><?php echo date("H:i"); ?></span></b></h5>

                            <input id="ex6" type="text" name="time" data-slider-min="0"
                                   data-slider-max="23" data-slider-step="1"
                                   data-slider-value="<?php echo ltrim(date('H'), 0); ?>"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-9">
                            <div class="col-xs-6">
                                <i class="fa fa-user"></i>
                                <label for="name"> Name</label>
                                <input type="text" class="form-control-green form-control input-sm"
                                       name="name" placeholder="Name" required="">
                            </div>
                            <div class="col-xs-6">
                                <i class="fa fa-android"></i> /
                                <i class="fa fa-trash-o"></i>
                                <label for="phone">
                                    Phone</label>
                                <input type="number" class="form-control input-sm form-control-green"
                                       name="phone" placeholder="Phone"  required>
                            </div>
                        </div>
                    </div>
                    <div class="row row-app">
                        <div class="col-xs-11">
                            <label for="remarks">Remarks</label>
						<textarea class="form-control form-control-green input-sm"
                                  placeholder="Enter any edition information..."
                                  data-toggle="tooltip" title="אנא הכנס מעידה הקשור לנסיעה"
                                  name="remarks"></textarea>
                        </div>

                    </div>
                    <button type="submit" name="submit" class="text-center btn btn-default form-control-green">Lets do
                        it!
                    </button>
                    <div id='response'></div>
                </div>
            </form>
            <form id="get" accept-charset="UTF-8">
                <div class="front">
                    <div class="row">
                        <div class="col-xs-4 pull-left">
                            <span class="flipHeader pull-left">Get</span>
                        </div>


                        <div class="col-xs-4 pull-right">
                            <span class="fa fa-bars fa-2x flipMe pull-right"></span>
                        </div>
                    </div>
                    <div class="row row-app">
                        <div class="col-xs-8">
                            <label for="origin">Origin</label>

                            <div angucomplete-alt id="ex1" input-name="origin"
                                 placeholder="Origin" maxlength="50"
                                 pause="100" selected-object="selectedCountry"
                                 local-data="locations" search-fields="settelment"
                                 title-field="settelment" minlength="2"
                                 input-class="form-control input-sm form-control-green"
                                 match-class="highlight"></div>
                        </div>
                    </div>
                    <div class="row row-app">
                        <div class="col-xs-8">
                            <label for="destination">Destination</label>

                            <div angucomplete-alt id="ex1" input-name="destination"
                                 placeholder="Destination" maxlength="50"
                                 pause="100" selected-object="selectedCountry"
                                 local-data="locations" search-fields="settelment"
                                 title-field="settelment" minlength="2"
                                 input-class="form-control input-sm form-control-green"
                                 match-class="highlight"></div>
                        </div>
                        <div class="col-xs-3" style="padding-left: 0px">
                            <label>Time</label>

                            <div class="switch">
                                <input id="switchTime2" name="getTime" class="cmn-toggle cmn-toggle-round"
                                       type="checkbox">
                                <label for="switchTime2"></label>
                            </div>
                        </div>
                    </div>
                    <div id="withTime2" class="row row-app bg-success"
                         style="display:none">
                        <div class="col-xs-12">
                            <h5 class="green">Day</h5>

                            <div class="btn-group" data-toggle="buttons">
                                <label id="today" class="btn btn-success hideday active">
                                    <input type="radio" name="date" value="<?php echo date("
								Y-m-d ") ?>" id="Today" autocomplete="off"
                                           checked>Today</label>
                                <label class="btn hideday btn-success">
                                    <input type="radio" name="date" value="<?php echo date("
								Y-m-d ", strtotime("+1 days
								")) ?>" id="Tomorrow" autocomplete="off">Tomorrow </label>
                                <label class="btn hideday btn-success">
                                    <input type="radio" name="date" value="<?php echo date("
								Y-m-d ", strtotime("+2 days
								")) ?>" id="2days" autocomplete="off">In 2 day's </label>

                            </div>

                            <div class="divider"></div>
                            <h5 class="green" id="ex5CurrentSliderValLabel">Time off day <b><span
                                        id="ex5SliderVal">0:00</span> - 24:00</b></h5>
<!--                            --><?php //echo date("H:i"); ?>
                            <input id="ex5" type="text" name="time" data-slider-min="0"
                                   data-slider-max="23" data-slider-step="1"
                                   data-slider-value="0"/>
<!--                            --><?php //echo ltrim(date('H'), 0); ?>

                        </div>

                    </div>
                    <button type="submit" name="submit" class="text-center btn btn-default form-control-green  ">Lets do
                        it!
                    </button>
                    <div id='response1'></div>

                </div>
        </div>
        </form>

    <div id="result">

    </div>
    </div>

    <!--modal contact us-->
    <div class="modal" id="myModal" tabindex="-1"
         role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" style="color:#000"
                        id="myModalLabel">Welcome young <i class="green">grasshoppers!</i>
                    </h4>
                </div>
                <form  id="comment" accept-charset="UTF-8">
                <div style="color:#000000" class="modal-body">
                    <p>Got any remarks? Think we just have to
                        change something? Write up anything
                        on your mind.</p>
                    <small>if you have a request it would  be if you can add a name so we know you're a real person.
                    </small>
                    <label for="complaints">
					<textarea rows="7" cols="50" name="complaints"
                              class="form-control"></textarea>
                    </label>

                </div>
                <div style="color:#000;height:75px" class="modal-footer">
                    <img src="images/turbine.png" class="pull-left"
                         style="width:20px;margin-top:15px"/>
                    <small style="margin-top:20px;margin-left:3px"
                           class="pull-left">Powered by turbine
                    </small>
                            <div id="responsecommnet"></div>
                    <button type="submit" name="submit" class="text-center btn btn-default form-control-green  ">Ok.
                    </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--modal add settelment-->
    <div class="modal" id="myModal1" tabindex="-1"
         role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" style="color:#000"
                        id="myModalLabel">So you wanna add a settelment.
                    </h4>
                </div>
                <form  id="addsett" accept-charset="UTF-8">
                <div style="color:#000000" class="modal-body">
                    <p>The thing is if you wanna add a settelment you need to follow a couple of rules first we need the <b>name</b> of the settelment second the <b>town</b> its in
                    or a town close by.</p>
                    <div class="row">
                        <div class="col-xs-6">
                    <label for="newSett" name="newSett">New settelment</label>
                        <input type="text" class="form-control form-control-green" name="newSett" placeholder="New settelment" required="">

                        </div>
                        <div class="col-xs-6">
                    <label for="origin">Origin</label>
                    <div angucomplete-alt id="ex1" input-name="town"
                         placeholder="town" maxlength="50"
                         pause="100" local-data="locations"
                         search-fields="settelment" title-field="settelment"
                         minlength="2" input-class="form-control form-control-green"
                         match-class="highlight"></div>
                                 </div>
                        </div>
                </div>
                <div style="color:#000;height:75px" class="modal-footer">
                    <img src="images/turbine.png" class="pull-left"
                         style="width:20px;margin-top:15px"/>
                    <small style="margin-top:20px;margin-left:3px"
                           class="pull-left">Powered by turbine
                    </small>
                        <div id="responssett"></div>
                    <button type="submit" name="submit" class="text-center btn btn-default form-control-green  ">Ok.
                    </button>
                </div>
                </form>

            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>