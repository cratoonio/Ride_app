<?php
include "include/class-query.php";
$post = $_POST;
$result = $query->get_trips($post['origin'], $post['destination'],$post['date'],$post['time']);
$counter = 0;
foreach ($result as $i) {
    if($counter%2==0){echo '<div class="row">';}
    echo '<div class="col-xs-12 col-md-6 col-lg-6 col-sm-6" ><div class="report"><div class="rowInfo row"><div class="col-xs-4"><i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;'. $i->name .
         '</div><div class="col-xs-4">'.$i->date .'</div><div class="col-xs-4"><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;'
         . $i->phone . '</div></div><div class="rowInfo row">';
    if($i->originS==$post['origin']){echo '<div class="col-xs-12"><div class="wellInfo" style="border-radius: 30px 30px 0px 0px;margin-bottom: 0px;background-color: #C8F7A8">' . $i->originS . '</div></div>';}else{echo '<div class="col-xs-12"><div class="wellInfo" style="border-radius: 30px 30px 0px 0px;margin-bottom: 0px">' . $i->originS . '</div></div>';}
    echo '</div><div class="rowInfo row">';
    if(!empty($i->stopsS)){if($i->stopsS==$post['origin'])
    {echo '<div class="col-xs-8 col-xs-offset-2"><div class="wellInfo" style="background-color: #C8F7A8">' . $i->stopsS . '</div></div>';
    }else{echo '<div class="col-xs-8 col-xs-offset-2"><div class="wellInfo">' . $i->stopsS . '</div></div>';}}
    if(!empty($i->stop2S)){if($i->stop2S==$post['origin'])
    {echo '<div class="col-xs-6 col-xs-offset-3" ><div class="wellInfo" style="background-color: #C8F7A8">' . $i->stop2S . '</div></div>';
    }else{echo '<div class="col-xs-6 col-xs-offset-3"><div class="wellInfo">' . $i->stop2S . '</div></div>';}}
    if(!empty($i->stop3S)){if($i->stop3S==$post['origin'])
    {echo '<div class="col-xs-8 col-xs-offset-2"><div class="wellInfo" style="background-color: #C8F7A8">' . $i->stop3S . '</div></div>';
    }else{echo '<div class="col-xs-8 col-xs-offset-2"><div class="wellInfo">' . $i->stop3S . '</div></div>';}}
    if($i->destinationS==$post['destination'])
    {echo '<div class="col-xs-12"><div class="wellInfo" style="border-radius: 0px 0px 30px 30px;background-color: #f7cea4">' . $i->destinationS . '</div></div>';}else{echo '<div class="col-xs-12"><div class="wellInfo" style="border-radius: 0px 0px 30px 30px;">' . $i->destinationS . '</div></div>';}
    echo '</div></div><div class="reportInfo"><div class="col-xs-12"><div class="col-xs-6" style="font-size: 15px">';
    if($i->petfriendly==1){echo '<i class="" style="color: #16A085">חיות</i>  |  ';
    }else{echo '<i class="" style="color: #d7d7d7">חיות</i>  |  ';}
    if($i->smoker==1){echo '<i class="" style="color: #16A085">מעשן</i>   ';
    }else{echo '<i class="" style="color: #d7d7d7">מעשן</i>   ';}
    // if($i->noAc==1){echo '<i class="" style="color: #d7d7d7">מזגן</i></div>';
    // }else{echo '<i class="" style="color: #16A085">מזגן</i></div>';}
    echo '</div>';
    echo '<div class="col-xs-6"><span class="" style="color: #16A085;font-size: 15px">';
    if($i->sun==1){echo 'א ';}else{echo '<i style="color:#d7d7d7 ">א </i>';}
    if($i->mon==1){echo 'ב ';}else{echo '<i style="color:#d7d7d7 ">ב </i>';}
    if($i->tue==1){echo 'ג ';}else{echo '<i style="color:#d7d7d7 ">ג </i>';}
    if($i->wed==1){echo 'ד ';}else{echo '<i style="color:#d7d7d7 ">ד </i>';}
    if($i->thu==1){echo 'ה ';}else{echo '<i style="color:#d7d7d7 ">ה </i>';}
    if($i->fri==1){echo 'ו ';}else{echo '<i style="color:#d7d7d7 ">ו </i>';}
    if($i->sat==1){echo ' ש';}else{echo '<i style="color:#d7d7d7 ">ש</i>';}
    echo '</span></div></div>'.$i->remarks;
    echo '</div><div class="reportFooter"><div class="col-xs-12"><div class="col-xs-6" style="color:#ffffff ">'.$i->price.
        '<i class="fa fa-ils" style="font-size: 11px;"></i></div><div class="col-xs-6" style="color:#ffffff">'.$i->time.
        ':00</div></div></div></div>';
    if($counter%2!=0){echo '</div>';}
    $counter++;
}