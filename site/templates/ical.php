<?php

// Get ID param
$id = param('id', false);

// Kill the process if no id is given
if (!$id) exit;

$event = page('events')->findById($id);

$startDate = $event['from']->toDate('Ymd');
$startTime = $event['from']->toDate('Hi');
$endDate = $event['to']->toDate('Ymd');
$endTime = $event['to']->toDate('Hi');
$subject = $event['event']->title();
$desc = $event['event']->text();
$url = $event['event']->url();
$location = $event['location'];
$ical = 'BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//hacksw/handcal//NONSGML v1.0//EN
BEGIN:VEVENT
LOCATION:'.$location.'
UID:'.md5(uniqid(mt_rand(), true)).'grh-hamburg.de
DTSTAMP:'.gmdate('Ymd').'T'.gmdate('His').'Z
DTSTART:'.$startDate.'T'.$startTime.'00
DTEND:'.$startDate.'T'.$endTime.'00
SUMMARY:'.$subject.'
DESCRIPTION:'.$desc.'
URL;VALUE=URI:'.$url.'
END:VEVENT
END:VCALENDAR';

//set correct content-type-header
header('Content-type: text/calendar; charset=utf-8');
header('Content-Disposition: inline; filename=calendar-'.$event['event']->id().'.ics');
echo $ical;
exit;
