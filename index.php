
<?php include 'header.php'; ?>
<body>
<?php //include 'nav.php' ?>
    <div class="container">
                    <div class="card" id="card" >
                        <div class="front">
                            <i  class="glyphicon glyphicon-indent-left pull-right flipme" ></i>

                                <h2>Give A Ride</h2>

                            <div class="row">
                                <div class="col-xs-9">
                                    <label for="origin">Origin</label>
                                    <input type="text" name="origin" placeholder="Origin" class="form-control">
                                </div>
                                <div class="pull-right" style="margin-right: 10px">
                                    <div class="switch" style="margin-top: 27px ">
                                        <input id="switchmoney" name="pay" class="cmn-toggle cmn-toggle-round" type="checkbox">
                                        <label for="switchmoney"></label>
                                    </div>
                                </div>

                            </div>
                            <div id="withmoney" class="row bg-success">
                                <i class="glyphicon glyphicon-chevron-down pull-right" style="margin-right: 9%;color: #16A085;"></i>

                                <div class="col-xs-12 ">
                                    <div class="btn-group" role="group" aria-label="...">
                                        <button type="button" class="btn btn-default">5 </button>
                                        <button type="button" class="btn btn-default">10</button>
                                        <button type="button" class="btn btn-default">15</button>
                                        <button type="button" class="btn btn-default">20</button>
                                        <button type="button" class="btn btn-default">25</button>
                                        <button type="button" class="btn btn-default">30</button>
                                        <button type="button" class="btn btn-default">35</button>
                                        <button type="button" class="btn btn-default">40</button>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-xs-12">
                                    <label for="stops">stops</label>
                                    <input type="text" name="stops" placeholder="Stops" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-9">
                                    <label for="destination">destination</label>
                                    <input type="text" name="destination" placeholder="Destination" class="form-control">
                                </div>
                                <div class="pull-right" style="margin-right: 10px">
                                    <div class="switch" style="margin-top: 27px ">
                                        <input id="switchtime" name="pay" class="cmn-toggle cmn-toggle-round" type="checkbox">
                                        <label for="switchtime"></label>
                                    </div>
                                </div>

                            </div>
                            <div id="withtime" class="row bg-success">
                                <i class="glyphicon glyphicon-chevron-down pull-right" style="margin-right: 9%;color: #16A085;"></i>

                                <div class="col-xs-12">
                                    <label for="dateTime">Time</label>
                                    <div class="datepicker" id="dateTime" data-date="12/03/2012"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal 1 -->
                        <div class="back">
                            <i  class="glyphicon glyphicon-indent-left pull-right flipme" ></i>
                                <h2>Get A Ride</h2>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label for="origin">Origin</label>
                                    <input type="text" name="origin" placeholder="Origin" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label for="destination">destination</label>
                                    <input type="text" name="destination" placeholder="Destination" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label for="datetime">Time</label>
                                    <input type="datetime" id="datetime" name="dateTime" class="form-control">
                                </div>
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
