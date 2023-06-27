<?php

$startTime = strtotime('12:00 AM');
$endTime = strtotime('11:45 PM');
$interval = 15 * 60; // 15 minutes in seconds

$timeSlots = [];

while ($startTime <= $endTime) {
    $timeSlots[] = date('h:i A', $startTime);
    $startTime += $interval;
}


print_r($timeSlots);