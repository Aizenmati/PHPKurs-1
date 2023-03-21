<?php

function convertDate($date, $days, $hours, $minutes, $seconds) {
    $dateTime = DateTime::createFromFormat('d.m.Y H:i:s', $date);
    $interval = new DateInterval("P" . abs($days) . "DT" . abs($hours) . "H" . abs($minutes) . "M" . abs($seconds) . "S");
    if ($days >= 0 && $hours >= 0 && $minutes >= 0 && $seconds >= 0) {
        $dateTime->add($interval);
    } else {
        $dateTime->sub($interval);
    }
    return $dateTime->format('d.m.Y H:i:s');
}
$date = '19.10.2016 15:14:24';
echo convertDate($date, 3, 1, 0, 15); // wyświetli 22.10.2016 16:14:39

$date = '19.10.2016 15:14:24';
echo convertDate($date, -4, -2, 9, 15); // wyświetli 15.10.2016 13:23:39