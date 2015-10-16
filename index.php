<?php include 'header.php'; ?>
<?php date_default_timezone_set('Asia/Tel_Aviv') ?>
    <div class="container" style="padding:3px" xmlns="http://www.w3.org/1999/html">
        <div class="card" id="card">
            <form  id="give" accept-charset="UTF-8">
                <div class="back">
                    <div class="row">
                        <div class="col-xs-4 pull-right">
                            <span class="fa fa-hand-o-up fa-2x flipMe pull-right"></span>
                        </div>
                        <div class="col-xs-4 pull-left">
                               <span class="flipHeader pull-left">Give</span>
                        </div>
                    </div>
                    <div class="row row-app">
                        <div class="col-xs-3" style="padding-left: 0px">
                            <label>השתתפות</label>

                            <div class="switch">
                                <input id="switchMoney" class="cmn-toggle cmn-toggle-round"
                                       type="checkbox">
                                <label for="switchMoney"></label>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <label for="origin">מוצא</label>
                            <div angucomplete-alt id="ex1" input-name="origin"
                                 placeholder="מוצא" maxlength="50"
                                 pause="100" local-data="locations"
                                 search-fields="settelment" title-field="settelment"
                                 minlength="2" input-class="form-control input-sm form-control-green"
                                 match-class="highlight"></div>
                        </div>
                    </div>
                    <div id="withMoney" class="row row-app bg-success"
                         style="display:none">
                        <div class="col-xs-11">
                            <h5 class="green">השתתפות בדלק</h5>

                            <div class="btn-group" data-toggle="buttons">
                                <label for="food" class="btn btn-success">
                                    <input type="radio" name="price" value="נשנושים"
                                           autocomplete="off">נשנושים</label>
                                <label for="50" class="btn btn-success">
                                    <input type="radio" name="price" value="50"
                                           autocomplete="off">50 <i class="fa fa-ils" style="font-size:11px"></i>
                                </label>
                                <label for="45" class="btn btn-success">
                                    <input type="radio" name="price" value="45"
                                           autocomplete="off">45 <i class="fa fa-ils" style="font-size:11px"></i>
                                </label>
                                <label for="40" class="btn btn-success">
                                    <input type="radio" name="price" value="40"
                                           autocomplete="off">40 <i class="fa fa-ils" style="font-size:11px"></i>
                                </label>
                                <label for="35" class="btn btn-success">
                                    <input type="radio" name="price" value="35"
                                           autocomplete="off">35 <i class="fa fa-ils" style="font-size:11px"></i>
                                </label>
                                <label for="30" class="btn btn-success">
                                    <input type="radio" name="price" value="30"
                                           autocomplete="off">30 <i class="fa fa-ils" style="font-size:11px"></i>
                                </label>
                                <label for="25" class="btn btn-success">
                                    <input type="radio" name="price" value="25"
                                           autocomplete="off">25 <i class="fa fa-ils" style="font-size:11px"></i>
                                </label>
                                <label for="20" class="btn btn-success">
                                    <input type="radio" name="price" value="20"
                                           autocomplete="off">20 <i class="fa fa-ils" style="font-size:11px"></i>
                                </label>
                                <label for="15" class="btn btn-success">
                                    <input type="radio" name="price" value="15"
                                           autocomplete="off">15 <i class="fa fa-ils" style="font-size:11px"></i>
                                </label>
                                <label for="10" class="btn btn-success">
                                    <input type="radio" name="price" value="10"
                                           autocomplete="off">10 <i class="fa fa-ils" style="font-size:11px"></i>
                                </label>
                                <label for="5" class="btn btn-success">
                                    <input type="radio" name="price" value="5"
                                           autocomplete="off">5 <i class="fa fa-ils" style="font-size:11px"></i>
                                </label>
                                <label for="5" class="btn btn-success active">
                                    <input type="radio" name="price" value="0"
                                           autocomplete="off" checked>0 <i class="fa fa-ils" style="font-size:11px"></i>
                                </label>
                            </div>
                            <div class="divider"></div>
                            <h5 class="green">תנאים</h5>

                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-success">
                                    <input type="checkbox" name="petFriendly"
                                           value="1" autocomplete="off">ידידותי לבע״ח</label>
<!--                                 <label class="btn btn-success">
                                    <input type="checkbox" name="noAC" value="1"
                                           autocomplete="off">אין מזגן :(</label> -->
                                <label class="btn btn-success">
                                    <input type="checkbox" name="smoker"
                                           value="1" autocomplete="off">מעשן
                                </label>

                            </div>
                        </div>
                    </div>
                    <div class="row row-app">
                        <div class="col-xs-3" style="padding-left: 0px">
                            <i id="addstop" class="fa fa-plus-circle btn btn-sm flipPage"></i>
                        </div>
                        <div id="stops" class="col-xs-8">
                            </i>
                            <label for="stops">עצירה 1</label>

                            <div angucomplete-alt id="ex1" input-name="stops"
                                 placeholder="עצירה 1" maxlength="50"
                                 pause="100" selected-object="selectedCountry"
                                 local-data="locations" search-fields="settelment"
                                 title-field="settelment" minlength="2"
                                 input-class="form-control input-sm form-control-green"
                                 match-class="highlight"></div>
                        </div>

                        <div id="stop2" class="col-xs-8" style="display: none;margin-top: 10px">
                            </i>
                            <label for="stops">עצירה 2</label>

                            <div angucomplete-alt id="ex1" input-name="stop2"
                                 placeholder="עצירה 2" maxlength="50"
                                 pause="100" selected-object="selectedCountry"
                                 local-data="locations" search-fields="settelment"
                                 title-field="settelment" minlength="2"
                                 input-class="form-control input-sm form-control-green"
                                 match-class="highlight"></div>
                        </div>
                        <div class="col-xs-3"></div>

                        <div id="stop3" class="col-xs-8" style="display: none;margin-top: 10px">
                            </i>
                            <label for="stops">עצירה 3</label>

                            <div angucomplete-alt id="ex1" input-name="stop3"
                                 placeholder="עצירה 3" maxlength="50"
                                 pause="100" selected-object="selectedCountry"
                                 local-data="locations" search-fields="settelment"
                                 title-field="settelment" minlength="2"
                                 input-class="form-control input-sm form-control-green"
                                 match-class="highlight"></div>
                        </div>

                    </div>
                    <div class="row row-app">
                        <div class="col-xs-3" style="padding-left: 0px">
                            <label>זמן יציאה</label>
                            <div class="switch">
                                <input id="switchTime" class="cmn-toggle cmn-toggle-round"
                                       type="checkbox">
                                <label for="switchTime" class=""></label>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <label for="destination">יעד</label>
                            <div angucomplete-alt id="ex1" input-name="destination"
                                 placeholder="יעד" maxlength="50"
                                 pause="100" selected-object="selectedCountry"
                                 local-data="locations" search-fields="settelment"
                                 title-field="settelment" minlength="2"
                                 input-class="form-control input-sm form-control-green"
                                 match-class="highlight"></div>
                        </div>ֹֹ
                    </div>
                    <div id="withTime" class=" row row-app bg-success"
                         style="display:none">
                        <div class="col-xs-11">
                            <h5 class="green">יום</h5>

                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn hideday btn-success">
                                    <input type="radio" name="date" value="<?php echo date("
								Y-m-d ", strtotime("+2 days
								")) ?>" id="2days" autocomplete="off">מחרתיים</label>
                                <label class="btn hideday btn-success">
                                    <input type="radio" name="date" value="<?php echo date("
								Y-m-d ", strtotime("+1 days
								")) ?>" id="Tomorrow" autocomplete="off">מחר </label>
                                <label id="today" class="btn btn-success hideday active">
                                    <input type="radio" name="date" value="<?php echo date("
								Y-m-d ") ?>" id="Today" autocomplete="off"
                                           checked>היום</label>

                            </div>
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-success" id="days" data-toggle="tooltip" title="נסיעה שמתרחשת באופן קבוע פחות או יותר, כגון נסיעה לעבודה/לימודים וכדומה. הנסיעה תישמר באתר חודש" >
                                    <input type="radio" name="Periodic" value="1"
                                           id="Periodic" autocomplete="off" >נסיעה מחזורית</label>
                            </div>
                            <div class="btn-group" id="withDay" data-toggle="buttons"
                                 style="display:none">
                                <label class="btn btn-success day">
                                    <input type="checkbox" name="sat" value="1"
                                           id="7" autocomplete="off">ש׳</label>
                                <label class="btn btn-success day">
                                    <input type="checkbox" name="fri" value="1"
                                           id="6" autocomplete="off">ו׳</label>
                                <label class="btn btn-success day">
                                    <input type="checkbox" name="thu" value="1"
                                           id="5" autocomplete="off">ה׳</label>
                                <label class="btn btn-success day">
                                    <input type="checkbox" name="wed" value="1"
                                           id="4" autocomplete="off">ד׳</label>
                                <label class="btn btn-success day">
                                    <input type="checkbox" name="tue" value="1"
                                           id="3" autocomplete="off">ג׳</label>
                                <label class="btn btn-success day">
                                    <input type="checkbox" name="mon" value="1"
                                           id="2" autocomplete="off">ב׳</label>
                                <label class="btn btn-success day">
                                    <input type="checkbox" name="sun" value="1"
                                           id="1" autocomplete="off">א׳</label>
                            </div>
                            <div class="divider"></div>
                            <h5 class="green" id="ex6CurrentSliderValLabel">שעה <b><span
                                        id="ex6SliderVal"><?php echo date("H:i"); ?></span></b></h5>

                            <input style="direction: rtl" id="ex6" type="text" name="time" data-slider-min="0"
                                   data-slider-max="23" data-slider-step="1"
                                   data-slider-value="<?php echo ltrim(date('H'), 0); ?>"/>
                        </div>
                    </div>
                    <div class="row row-app">

                            <div class="col-xs-1 pull-right"></div>
                            <div class="col-xs-3 pull-right">
                                <i class="fa fa-user "></i>
                                <label for="name">שם</label>
                                <input type="text" class="form-control-green form-control input-sm"
                                       name="name" placeholder="שם"  required="">
                            </div>
                            <div class="col-xs-4 pull-right">
                                <i class="fa fa-android"></i>
                                <label for="phone">טלפון
                                    </label>
                                <input type="number" class="form-control input-sm form-control-green"
                                       name="phone" placeholder="טלפון" required>
                            </div>
                             <div class="col-xs-3 pull-right">
                                <label for="pass">סיסמא</label>
                                <input type="number" class="form-control input-sm form-control-green"
                                       name="pass" data-toggle="tooltip" title="הכנס סיסמא פשוטה על מנת למחוק את הנסיעה" placeholder="סיסמא למחיקה"  required>
                            </div>


                    </div>

                    <div class="row row-app">
                          <div class="col-xs-1 pull-right"></div>
                        <div class="col-xs-10 pull-right    ">
                            <label for="remarks">הערות/תוספות</label>
						<textarea class="form-control form-control-green input-sm"
                                  placeholder="הכנס מידע נוסף אודות הנסיעה"
                                  data-toggle="tooltip" title="אנא הכנס מידע רלוונטי נוסף אודות הנסיעה"
                                  name="remarks"></textarea>
                        </div>

                    </div>
                     <div class="row row-app">
                        <div class="col-xs-3"></div>
                        <div class="col-xs-11">
                        <button type="submit" style="margin-top: 17px" name="submit" class="text-center btn btn-default form-control-green">הכנס נסיעה
                        </button>
                    <div id='response'></div>
                        </div>
                        </div>
                </div>
            </form>
            <form id="get" accept-charset="UTF-8">
                <div class="front">
                    <div class="row">
                        <div class="col-xs-4 pull-left">
                            <span class="flipHeader pull-left">Get</span>
                        </div>


                        <div class="col-xs-4 pull-right">
                            <span class="fa fa-hand-o-up fa-2x flipMe pull-right"></span>
                        </div>
                    </div>
                    <div class="row row-app">
                    <div class="col-xs-3"></div>
                        <div class="col-xs-8">
                            <label for="origin">מוצא</label>

                            <div angucomplete-alt id="ex1" input-name="origin"
                                 placeholder="מוצא" maxlength="50"
                                 pause="100" selected-object="selectedCountry"
                                 local-data="locations" search-fields="settelment"
                                 title-field="settelment" minlength="2"
                                 input-class="form-control input-sm form-control-green"
                                 match-class="highlight"></div>
                        </div>
                    </div>
                    <div class="row row-app">
                        <div class="col-xs-3" style="padding-left: 0px">
                            <!-- <label>&nbsp&nbsp&nbsp&nbspמתי</label> -->

                  <!--           <div class="switch">
                                <input id="switchTime2" name="getTime" class="cmn-toggle cmn-toggle-round"
                                       type="checkbox">
                                <label for="switchTime2"></label>
                            </div> -->
                        </div>
                        <div class="col-xs-8">
                            <label for="destination">יעד</label>

                            <div angucomplete-alt id="ex1" input-name="destination"
                                 placeholder="יעד" maxlength="50"
                                 pause="100" selected-object="selectedCountry"
                                 local-data="locations" search-fields="settelment"
                                 title-field="settelment" minlength="2"
                                 input-class="form-control input-sm form-control-green"
                                 match-class="highlight"></div>
                        </div>
                    </div>

                    <div id="withTime2" class="row row-app bg-success"
                         style="">
                        <div class="col-xs-11">
                            <h5 class="">יום</h5>

                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn hideday btn-success">
                                    <input type="radio" name="date" value="<?php echo date("
								Y-m-d ", strtotime("+2 days
								")) ?>" id="2days" autocomplete="off">מחרתיים</label>
                                <label class="btn hideday btn-success">
                                    <input type="radio" name="date" value="<?php echo date("
								Y-m-d ", strtotime("+1 days
								")) ?>" id="Tomorrow" autocomplete="off">מחר</label>
                                <label id="today" class="btn btn-success hideday active">
                                    <input type="radio" name="date" value="<?php echo date("
								Y-m-d ") ?>" id="Today" autocomplete="off"
                                           checked>היום</label>

                            </div>

                            
                            <h5 class="green" id="ex5CurrentSliderValLabel"> משעה <b><span
                                        id="ex5SliderVal">0:00</span> עד חצות </b></h5>
<!--                            --><?php //echo date("H:i"); ?>
                            <input id="ex5" type="text" name="time" data-slider-min="0"
                                   data-slider-max="23" data-slider-step="1"
                                   data-slider-value="0"/>
<!--                            --><?php //echo ltrim(date('H'), 0); ?>

                        </div>

                         <div class="col-xs-1"></div>

                    </div>
                    <div class="row row-app">
                        <div class="col-xs-3"></div>
                        <div class="col-xs-11">
                        <button type="submit" style="margin-top: 17px" name="submit" class="text-center btn btn-default form-control-green">מצא נסיעה</button>
                    <div id='response1'></div>
                        </div>
                        </div>

                </div>
        </div>
        </form>

    <div id="result" class="container">

    </div>
    </div>

    <!--modal contact us-->
    <div class="modal" id="myModal" tabindex="-1"
         role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close pull-left" data-dismiss="modal"
                            aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" style="color:#000"
                        id="myModalLabel">ברוכים הבאים <i class="green">טרמפיסטים</i>
                    </h4>
                </div>
                <form  id="comment" accept-charset="UTF-8">
                <div style="color:#000000" class="modal-body">
                    <p>יש לך הערות על האתר? חושב/ת שאנחנו פשוט חייבים לשנות משהו? הכנס את הערותיך כדי שנוכל להשתפר</p>

                    <label style="margin-top: 10px" for="complaints">
					<textarea rows="7" cols="650" name="complaints"
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
                    <button type="submit" name="submit" class="text-center btn btn-default form-control-green">שלח
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
                    <button type="button" class="close pull-left" data-dismiss="modal"
                            aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" style="color:#000"
                        id="myModalLabel">אז את/ה רוצה להוסיף ישוב/מיקום?
                    </h4>
                </div>
                <form  id="addsett" accept-charset="UTF-8">
                <div style="color:#000000" class="modal-body">
                    <p>כדי להוסיף מיקום לרשימה שלנו עליך לעקוב אחרי מספר כללים: ראשית כתוב את שם הישוב/מיקום החדש - במידה ומדובר במיקום ספציפי יש להוסיף תיאור כגון מרכז מסחרי/אצטדיון/רחוב וכדומה, שנית אנא ציין את הישוב הקרוב,או הישוב בו נמצא המיקום החדש.
                    </p>
                    <div class="row" style="margin-top: 10px">
                        <div class="col-xs-6 pull-right">
                    <label for="origin">ישוב קרוב </label>
                    <div angucomplete-alt id="ex1" input-name="town"
                         placeholder="ישוב קרוב" maxlength="50"
                         pause="100" local-data="locations"
                         search-fields="settelment" title-field="settelment"
                         minlength="2" input-class="form-control form-control-green"
                         match-class="highlight"></div>
                                 </div>
                        <div class="col-xs-6 pull-right">
                    <label for="newSett" name="newSett">ישוב/מיקום חדש</label>
                        <input type="text" class="form-control form-control-green" name="newSett" placeholder="ישוב/מיקום חדש" required="">

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
                    <button type="submit" name="submit" class="text-center btn btn-default form-control-green">שלח
                    </button>
                </div>
                </form>

            </div>
        </div>
    </div>
     <div class="modal" id="myModal2" tabindex="-1"
         role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close pull-left" data-dismiss="modal"
                            aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" style="color:#000"
                        id="myModalLabel">כאן ניתן למחוק נסיעה שבוטלה/התמלאה
                    </h4>
                </div>
                <form  id="delete" accept-charset="UTF-8">
                <div style="color:#000000" class="modal-body">
                    <p>על מנת למחוק את הנסיעה אנא הכנס/י שם, טלפון וסיסמאת מחיקה כפי שהוכנס בעת יצירת הנסיעה</p>
                    <div class="row">
                        <div class="col-xs-12">
                    <label for="newSett" style="margin-top: 10px" name="name">שם</label>
                        <input type="text" class="form-control form-control-green" name="name" placeholder="שם" required="">
                    <label for="newSett" style="margin-top: 10px" name="phone">טלפון</label>
                        <input type="text" class="form-control form-control-green" name="phone" placeholder="טלפון" required="">
                    <label for="newSett" style="margin-top: 10px" name="password">סיסמא</label>
                        <input type="text" class="form-control form-control-green" name="password" placeholder="סיסמא" required="">
                        </div>
                        </div>
                </div>
                <div style="color:#000;height:75px" class="modal-footer">
                    <img src="images/turbine.png" class="pull-left"
                         style="width:20px;margin-top:15px"/>
                    <small style="margin-top:20px;margin-left:3px"
                           class="pull-left">Powered by turbine
                    </small>
                        <div id="respondelete"></div>
                    <button type="submit" name="submit" class="text-center btn btn-default form-control-green">שלח
                    </button>
                </div>
                </form>

            </div>
        </div>
    </div>


         <div class="modal" id="myModal3" tabindex="-1"
         role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close pull-left" data-dismiss="modal"
                            aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" style="color:#000"
                        id="myModalLabel">הדרכת שימוש באתר
                    </h4>
                </div>

                <div style="color:#000000" class="modal-body">
                    <p>
האתר אמנם פשוט מאוד, אבל יש כמה דברים שכדאי לדעת על מנת לנצל את השימוש בו עד תום:
</p>
                </div>


                <div style="color:#000000" class="modal-body">
                <h5><b>חיפוש נסיעה: </b></h5>
                    <p>
הכנסו מוצא ויעד מהרשימה האוטומטית בלבד.  החיפוש יתבצע גם על ישובים קרובים למיקום הנבחר על מנת לתת את כל האפשרויות הרלוונטיות. 
</br>
החיפוש יתבצע מהשעה הנבחרת עד חצות.
</br>
לידיעתכם - קיימות באתר נסיעות מחזוריות (נסיעות שמתרחשות באופן קבוע) - בנסיעות אלו מסומנים הימים שבהם הן מתרחשות, והן יכולות לתת מענה כטרמפ קבוע לעבודה, ללימודים ובכלל.
</br>
לחצו לחיפוש. 
</br>
שימו לב! התוצאות נמצאות בתחתית העמוד. 
</p>
                </div>



                <div style="color:#000000" class="modal-body">
                <h5><b>הכנס נסיעה:</b></h5>
<p>
הכנסו מוצא מהרשימה האוטומטית בלבד.
</br>
במידה והינכם מעווניינים לגבות תשלום סמלי להשתתפות בדלק אנא הרחיבו את שדה ׳השתתפות׳ ובחרו סכום.
אם אתם עונים לתנאים המופיעים בשדה זה אנא סמנו את הרלוונטים מבניהם.
</br>
יש עצירות בדרך? עוברים במיקום ספציפי? ניתן לבחור עד 3 עצירות לכל נסיעה. גם כאן בחרו המרשימה האוטומטית, ובאמצעות מקש ה׳+׳ הוסיפו עצירות במידת הצורך. 
</br>
הכנסו יעד  מהרשימה האוטומטית בלבד.
</br>
שימו לב! לא ניתן להכניס נסיעה ללא מוצא ויעד. 
</br>
הרחיבו את שדה ׳זמן יציאה׳ לבחירת זמן היציאה.
</br>
בחרו את היום ושעת היציאה.
</br>
במידה והנסיעה מתרחשבת באופן עקבי וקבוע, סמנו את שדה 'נסיעה מחזורית' ובחרו את הימים בהם היא מתרחשת.
</br>
שימו לב! במידה ולא יבחר זמן הנסיעה תיקבע לשעה הנוכחית!
</br>
חובה להכניס שם - אם אתם מעוניינים לבצע את התקשורת עם הנוסעים בפייסבוק הכניסו שם באנגלית וציינו זאת בהערות.
</br>
חובה להכניס מספר טלפון.
</br>
יש לבחור סיסמא פשוטה למחיקה. ניתן למחוק נסיעה על ידי לחיצה על הכפתור (בראש העמוד) ׳מחק נסיעה׳.
</br>
כל נסיעה תימחק מתוצאות החיפוש יום לאחר התרחשותה באופן אוטומטי, חוץ מנסיעות מחזוריות שנשמרות באתר למשך כחודש.
</br>
יש לכם הערות? תנו בראש. 
</br>
לחצו להכנסת נסיעה למאגר.
</p>
                </div>



                <div style="color:#000000" class="modal-body">
                <h5><b>הוספת מיקום:</b></h5>
<p>
יש ישוב ששכחנו ולא מופיע? רוצים להוסיף מיקום שיהיה רלוונטי לשאר הטרמפיסטים כמו אצטדיון, מרכז מסחרי, פארק תעשייה וכדומה? 
</br>
ניתן להוסיף כל מיקום חדש.  במידה ומדובר במיקום ספציפי ולא ישוב, ציינו את תיאורו בתחילה (אצטדיון, מרכז מסחרי).
</br>
בנוסף אתם נדרשים לציין את הישוב שבו נמצא המיקום החדש או הישבו הקרוב אליו ביותר.
</p>
                </div>

                <div style="color:#000000" class="modal-body">
                <h5><b>מחיקת נסיעה:</b></h5>
<p>
ניתן למחוק נסיעות שלכם שהתבטלו או התמלאו בשדה 'מחק נסיעה' בראש העמוד. 
</br>
על מנת לבצע מחיקה נדרש להכניס שם, טלפון וסיסמאת מחיקה שנבחרה בעת הכנסת הנסיעה.
</br>
כל נסיעה תימחק מתוצאות החיפוש יום לאחר התרחשותה באופן אוטומטי, חוץ מנסיעות מחזוריות שנשמרות באתר למשך כחודש.
</p>
                </div>


<!--                 <div style="color:#000000" class="modal-body">
                <h5><b>צור קשר:</b></h5>
<p>
נשמח לשמוע על כל בעיה שנתקלתם בה או רעיון לשינוי שיוכל לשפר או לשדרג את האתר.
</br>
הכניסו את הערתוכם ושלחו.  נשמח אם תוסיפו כתובת אי-מייל ושם.
</p>
                </div> -->
                <div style="color:#000;height:75px" class="modal-footer">
                    <img src="images/turbine.png" class="pull-left"
                         style="width:20px;margin-top:15px"/>
                    <small style="margin-top:20px;margin-left:3px"
                           class="pull-left">Powered by turbine
                    </small>
                        <div id="respondelete"></div>
                            <button type="button" class="btn pull-right" data-dismiss="modal"
                            aria-label="Close">סגירה
                    </button>
                </div>


            </div>
        </div>
    </div>


             <div class="modal" id="myModal4" tabindex="-1"
         role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close pull-left" data-dismiss="modal"
                            aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" style="color:#000"
                        id="myModalLabel">קצת עלינו
                    </h4>
                </div>

                <div style="color:#000000" class="modal-body">
                    <p style="direction: rtl">
אנחנו<span class="green">#carHop2er</span>
</br>
הקמנו את האתר כפלטפורמה לשיתוף ומציאת טרמפים, שיאפשר חלופה נוחה לקבוצות הטרמפים ברשתות החברתיות, עם הכנסת נסיעה וחיפוש טרמפ פשוטים ומהירים, שאפילו עובד חלק מהנייד :).  בנוסף, בכל חיפוש נסיעה, מתבצעת סריקה לא רק על המוצא והיעד שהוכנסו לשדות החיפוש, אלא על כל הישובים והאתרים הקרובים, שיוכלו להוות מענה רלוונטי למשתמש.
</br>
אנו מאמינים שניתן לשפר משמעותית את מצב התחבורה בארץ בלי יותר מדי מאמץ.  לצורך כך, באתר קיימת אפשרות להכנסת 'נסיעה מחזורית'.  כל נסיעה שמתרחשת באופן עקבי וקבוע, כגון נסיעה לעבודה, ללימודים וכדומה, היא נסיעה מחזורית.
</br>
באמצעות כלי זה ניתן יהיה למצוא שותפים המבצעים נסיעות קבועות דומות לשלכם במוצא, יעד וזמן.  לעזור הן לנהג להפחית בעלויות הרכב על ידי השתתפות בתשלום על דלק, והן לטרמפיסט בשיפור עלות, זמן ותנאי הניוד שלו. 
</br>
כל מי שיבחר להשתמש באתר ובנסיעה המחזורית, לא רק שכנראה ישפר את תנאי התחבורה שלו, גם כל שאר המשתמשים בכביש יוכלו להרוויח מכך, משום שהדבר יוביל להורדת כמות הרכבים על הכביש, מה שיכול לצמצם משמעותית את מצב הפקקים הקשה בארץ, את כמות התאונות, זיהום האויר והעצבים...
</br>
שתהיה נסיעה בטוחה ומהירה לכולנו!




                    </p>
                </div>


                <div style="color:#000;height:75px" class="modal-footer">
                    <img src="images/turbine.png" class="pull-left"
                         style="width:20px;margin-top:15px"/>
                    <small style="margin-top:20px;margin-left:3px"
                           class="pull-left">Powered by turbine
                    </small>
                        <div id="respondelete"></div>
                                                    <button type="button" class="btn pull-right" data-dismiss="modal"
                            aria-label="Close">סגירה
                    </button>

                </div>


            </div>
        </div>
    </div>


    <div class="modal" id="myModal5" tabindex="-1"
         role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close pull-left" data-dismiss="modal"
                            aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" style="color:#000"
                        id="myModalLabel">תקנון
                    </h4>
                </div>

                <div style="color:#000000" class="modal-body">
                    <p style="direction: rtl">
    הגלישה באתר תחשב להסכמה מצדך לתנאים אלה.
</br>
הנהלת האתר רשאית להשעות, לחסום או להפסיק לאלתר את גישת הגולש לשירות אם יפר את תנאי התקנון.
</br>
הנהלת האתר רשאית לעדכן את תנאי התקנון מעת לעת.
</br>
אין לעשות באתר או באמצעותו כל שימוש למטרות בלתי חוקיות.
</br>
השימוש באתר מיועד לגילאי 18 ומעלה, והינו על אחריות המשתמש בלבד.
</br>
אין לרשום אדם אחר שלא בהסכמתו ו/או ללא נוכחותו מול המסך בשעת הרישום ולאחר שהוסברו לו כל תנאי תקנון זה.
</br>
אין לפרסם או להעביר באמצעות האתר כל מידע שהוא שקרי, מעליב, משמיץ, מאיים, פוגע בפרטיות הזולת, פורנוגרפי, בעל אופי מיני, גזעני, או בלתי חוקי.
</br>
הנך אחראי באופן בלעדי לנכונות המידע אותו תפרסם או תעביר באמצעות האתר. הנהלת האתר אינה מקבלת על עצמה כל
 אחריות לתכנים המפורסמים או מועברים בין המשתמשים.
</br>
אין לעשות באתר כל שימוש מסחרי בדרך של משלוח פרסומות או בכל דרך אחרת.
</br>
כל זכויות הקניין הרוחני וזכויות היוצרים בקשר לאתר הם של הנהלת האתר.
</br>
הנהלת האתר אינה אחראית לתוכן מודעות, "באנרים" או לכל חומר פרסומי באתר. האחריות לכך על המפרסמים בלבד.
</br>
בכוונת הנהלת האתר כי האתר ושירותיו יהיו זמינים בכל עת. יחד עם זאת אין ביכולת הנהלת האתר להתחייב לזמינות רצופה ללא תקלות וללא "נפילות". כמו כן רשאית הנהלת האתר להפסיק את פעילות האתר מעת לעת לצורכי תחזוקתו וארגונו. לא יינתן כל פיצוי כספי/זיכוי בשל תקלות או הפסקות בשירות.
</br>
הצמדה של קישורים לאתרים אחרים אסורה.
</br>
הנהלת האתר ממליצה לקבל את כל הפרטים הרלוונטים אודות האדם והנסיעה מראש בעת תקשורת בין מחפש נסיעה ומספק נסיעה.
</br>
פרטי הנסיעה, ובניהם שם ומספר טלפון כפי שהוכנסו, יופיעו לכל משתמש המחפש נסיעה דומה במוצא, יעד וזמן.
</br>
כל נסיעה שהוכנסה תימחק מתוצאות החיפוש  יום לאחר מועד התרחשותה, מלבד נסיעות מחזוריות שימחקו חודש לאחר הכנסתן.
</br>
במידת הצורך ניתן להוריד את נסיעתך מתוצאות החיפוש מוקדם יותר, באמצעות כפתור מחיקת נסיעה בראש בעמוד.
</br>
אנו ממליצים לקורא את הדרכת השימוש באתר על מנת להבין את מגוון האפשרויות בו.


‎

                    </p>
                </div>


                <div style="color:#000;height:75px" class="modal-footer">
                    <img src="images/turbine.png" class="pull-left"
                         style="width:20px;margin-top:15px"/>
                    <small style="margin-top:20px;margin-left:3px"
                           class="pull-left">Powered by turbine
                    </small>
                        <div id="respondelete"></div>
                                                    <button type="button" class="btn pull-right" data-dismiss="modal"
                            aria-label="Close">סגירה
                    </button>

                </div>


            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>