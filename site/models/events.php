<?php

function sortEventsByFromDate($a, $b)
{
 return $a['from']->toDate() > $b['from']->toDate();
}

class EventsPage extends Page
{

 public function getIds()
 {
  $eventIds = null;
  foreach ($this->upcoming() as $event) {
   $eventIds[] = $event['id'];
  }

  return $eventIds;
 }
 public function findById($id)
 {
  return $this->upcoming()[array_search($id, $this->getIds())];
 }

 public function upcoming($limitedBy = false, $filterByUid = null)
 {
  $events = null;

  // Get the upcoming events of each event page and append them to one list

  if (is_string($filterByUid) && $filterByUid != "") {
   $eventpages = site()->pages()->index()->template('group')->filterBy('uid', $filterByUid);
  } else {
   $eventpages = site()->pages()->index()->template('group');
  }
  foreach ($eventpages->filter(function ($e) {
   // filter for pages which have an upcoming date
   return $e->events()->toStructure()->filter(function ($p) {
    $now = new DateTime('yesterday');
    return $p->from()->toDate() > $now->getTimestamp();
   })->isEmpty() == false;
  }) as $eventpage) {

   // Get and filter dates which aren't valid anymore
   $dates = $eventpage->events()->toStructure()->filter(function ($e) {
    $now = new DateTime('yesterday');
    return $e->from()->toDate() > $now->getTimestamp();
   });

   // Check if object is empty
   if ($dates->isEmpty()) {
    continue;
   }

   foreach ($dates as $date) {

    $key = $date->from();
    $events[] = array(
     'title' => ($date->title()->isEmpty() ? $eventpage->title() : $date->title()),
     'from' => $date->from(),
     'to' => $date->to(),
     'location' => $date->location(),
     'event' => $eventpage,
     'id' => $date->autoId(),
     'url' => $eventpage->url(),
     'description' => $date->text(),
     'cover' => $eventpage->cover(),
    );
   }
  }

  // Sort events
  if ($events != null) {
   usort($events, "sortEventsByFromDate");
   if ($limitedBy != false && is_numeric($limitedBy) && $limitedBy != 0) {
    $events = array_slice($events, 0, $limitedBy);
   }
  }

  return $events;
 }
}