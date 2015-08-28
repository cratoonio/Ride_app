<?php
include "include/class-query.php";
$post = $_POST;
$result = $query->get_trips($post['origin'], $post['destination']);
$counter = 0;
foreach ($result as $i) {
    if($counter%2==0){echo '<div class="row">';}
    echo '<div class="col-xs-12 col-md-6 col-lg-6 col-sm-6">';
    echo '<div class="report">';
    echo '<div class="rowInfo row">';
    echo '<div class="col-xs-4"><i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;'. $i->name . '</div>';
    echo '<div class="col-xs-4">'.$i->date .'</div>';
    echo '<div class="col-xs-4"><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;'. $i->phone . '</div>';
    echo '</div>';
    echo '<div class="rowInfo row">';
    if($i->originS==$post['origin']){echo '<div class="col-xs-12"><div class="wellInfo" style="border-radius: 30px 30px 0px 0px;margin-bottom: 0px;background-color: #C8F7A8">' . $i->originS . '</div></div>';}else{echo '<div class="col-xs-12"><div class="wellInfo" style="border-radius: 30px 30px 0px 0px;margin-bottom: 0px">' . $i->originS . '</div></div>';}
    echo '</div>';
    echo '<div class="rowInfo row">';
    if(!empty($i->stopsS)){if($i->stopsS==$post['origin']){echo '<div class="col-xs-8 col-xs-offset-2"><div class="wellInfo" style="background-color: #C8F7A8">' . $i->stopsS . '</div></div>';}else{echo '<div class="col-xs-8 col-xs-offset-2"><div class="wellInfo">' . $i->stopsS . '</div></div>';}}
    if(!empty($i->stop2S)){if($i->stop2S==$post['origin']){echo '<div class="col-xs-6 col-xs-offset-3" ><div class="wellInfo" style="background-color: #C8F7A8">' . $i->stop2S . '</div></div>';}else{echo '<div class="col-xs-6 col-xs-offset-3"><div class="wellInfo">' . $i->stop2S . '</div></div>';}}
    if(!empty($i->stop3S)){if($i->stop3S==$post['origin']){echo '<div class="col-xs-8 col-xs-offset-2"><div class="wellInfo" style="background-color: #C8F7A8">' . $i->stop3S . '</div></div>';}else{echo '<div class="col-xs-8 col-xs-offset-2"><div class="wellInfo">' . $i->stop3S . '</div></div>';}}
    if($i->destinationS==$post['destination']){echo '<div class="col-xs-12"><div class="wellInfo" style="border-radius: 0px 0px 30px 30px;background-color: #C8F7A8">' . $i->destinationS . '</div></div>';}else{echo '<div class="col-xs-12"><div class="wellInfo" style="border-radius: 0px 0px 30px 30px;">' . $i->destinationS . '</div></div>';}
    echo '</div>';
    echo '</div>';
    echo '<div class="reportInfo">';
    echo '<div class="col-xs-12"><div class="col-xs-6" style="font-size: 15px">';
    if($i->petfriendly==1){echo '<i class="fa fa-paw" style="color: #16A085"></i>  |  ';}else{echo '<i class="fa fa-paw" style="color: #d7d7d7"></i>  |  ';}
    if($i->smoker==1){echo '<i class="fa fa-fire" style="color: #16A085"></i>   | ';}else{echo '<i class="fa fa-fire" style="color: #d7d7d7"></i>   | ';}
    if($i->noAc==1){echo '<i class="fa fa-leaf" style="color: #16A085"></i></div>';}else{echo '<i class="fa fa-leaf" style="color: #d7d7d7"></i></div>';}
    echo '<div class="col-xs-6">';
    echo '<span class="" style="color: #16A085;font-size: 15px">';
    if($i->sun==1){echo 'א ';}else{echo '<i style="color:#d7d7d7 ">א </i>';}
    if($i->mon==1){echo 'ב ';}else{echo '<i style="color:#d7d7d7 ">ב </i>';}
    if($i->tue==1){echo 'ג ';}else{echo '<i style="color:#d7d7d7 ">ג </i>';}
    if($i->wed==1){echo 'ד ';}else{echo '<i style="color:#d7d7d7 ">ד </i>';}
    if($i->thu==1){echo 'ה ';}else{echo '<i style="color:#d7d7d7 ">ה </i>';}
    if($i->fri==1){echo 'ו ';}else{echo '<i style="color:#d7d7d7 ">ו </i>';}
    if($i->sat==1){echo ' ש';}else{echo '<i style="color:#d7d7d7 ">ש</i>';}
    echo '</span>';
    echo '</div>';
    echo '</div>';
    echo  $i->remarks;
    echo '</div>';
    echo '<div class="reportFooter">';
    echo '<div class="col-xs-12">';
    echo '<div class="col-xs-6" style="color:#ffffff ">';
    echo  $i->price;
    echo '<i class="fa fa-ils" style="font-size: 11px;"></i>';
    echo '</div>';
    echo '<div class="col-xs-6" style="color:#ffffff">';
    echo  $i->price;
    echo ':00';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    if($counter%2!=0){echo '</div>';}
    $counter++;
}
?>