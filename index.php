<?php 

$destinationTime = new DateTime('2015-10-21 16:29:00');
echo $destinationTime->format('M d Y A h i');
echo "<br>";
$presentTime = new DateTime('2015-10-21 16:06:00');
echo $presentTime->format('M d Y A h i');
echo "<br>";

$timeDifference = $presentTime->diff($destinationTime);
echo $timeDifference->format('%y years %m months %d days %h hours %i minutes');
