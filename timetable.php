<?php

$endhour = 1100;
$starthour = 1400;

$endhour = strval($endhour);
$starthour = strval($starthour);


$endhour = strtotime($endhour);
$starthour = strtotime($starthour);

$diff = $starthour - $endhour;

echo gmdate('H:i:s',$diff);

//echo 'endhour: '+ $endhour;
//echo 'starthour: '+$starthour;

$timeBetClass = date('H:i:s',($starthour - $endhour));

//echo $timeBetClass;

//echo $timeBetClass;

//$timestamp = strtotime('1230');

//echo date('l dS \o\f F Y h:i:s A', $timestamp);

//echo date('h:i:s', $timestamp);

