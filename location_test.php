<?php 
$from = "Siebel building, Champaign IL";
$to = "1320 Digital Computer Laboratory";
$from = urlencode($from);
$to = urlencode($to);
$data = file_get_contents("http://maps.googleapis.com/maps/api/distancematrix/json?origins=$from&destinations=$to&language=en-EN&sensor=false");
$data = json_decode($data);
$time = 0;
$distance = 0;
foreach($data->rows[0]->elements as $road) {
    $time += $road->duration->value;
    $distance += $road->distance->value;
}

$distance = number_format(($distance * 0.000621371),2,'.',' ');
$time = number_format(($time/60),2,'.',' ');


echo "To: ".$data->destination_addresses[0];
echo "<br/>";
echo "From: ".$data->origin_addresses[0];
echo "<br/>";
echo "Time: ".$time." minutes";
echo "<br/>";
echo "Distance: ".$distance." miles";

?>