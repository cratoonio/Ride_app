
<?php
include "header.php";
include "include/class-query.php";
$post = $_POST;
?>
<div class="container">
<div class="row">

    <!--        place for trips table table -->
    <table class=" table table-bordered table-responsive" style="color: #080808" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>Origin</th>
            <th>stop</th>
            <th>stop2</th>
            <th>stop3</th>
            <th>destination</th>
            <th>date</th>
            <th>periodic</th>
            <th>sunday</th>
            <th>monday</th>
            <th>tuesday</th>
            <th>wednesday</th>
            <th>thursday</th>
            <th>friday</th>
            <th>saturday</th>
            <th>time</th>
            <th>price</th>
            <th>remarks</th>
            <th>petfriendly</th>
            <th>no ac</th>
            <th>smoker</th>
            <th>name</th>
            <th>phone</th>
        </tr>
        </thead>
        <?php $result = $query->get_trips($post['origin'],$post['destination']); ?>
        <tbody>
        <?php
        foreach($result as $i ){
            echo '<tr>';
            echo '<td>'.$i->id.'</td>';
            echo '<td>'.$i->originS.'</td>';
            echo '<td>'.$i->stopsS.'</td>';
            echo '<td>'.$i->stop2S .'</td>';
            echo '<td>'.$i->stop3S .'</td>';
            echo '<td>'.$i->destinationS .'</td>';
            echo '<td>'.$i->date .'</td>';
            echo '<td>'.$i->periodic .'</td>';
            echo '<td>'.$i->sun .'</td>';
            echo '<td>'.$i->mon .'</td>';
            echo '<td>'.$i->tue .'</td>';
            echo '<td>'.$i->wed .'</td>';
            echo '<td>'.$i->thu .'</td>';
            echo '<td>'.$i->fri .'</td>';
            echo '<td>'.$i->sat .'</td>';
            echo '<td>'.$i->time .'</td>';
            echo '<td>'.$i->price .'</td>';
            echo '<td>'.$i->remarks .'</td>';
            echo '<td>'.$i->petfriendly .'</td>';
            echo '<td>'.$i->noAc .'</td>';
            echo '<td>'.$i->carfulDriver .'</td>';
            echo '<td>'.$i->name .'</td>';
            echo '<td>'.$i->phone .'</td>';
            echo '</tr>';}
        ?>
        </tbody>
    </table>

</div>
</div>
<?php
include "footer.php";
?>