<?php

function sortEventsByFromDate($a, $b) {
  return $a['from']->toDate() > $b['from']->toDate();
}

class EventsPage extends Page
{

  public function getIds() {
    $eventIds = NULL;
    foreach ($this->upcoming() as $event) {
      $eventIds[] = $event['id'];
    }

    return $eventIds;
  }
  public function findById($id) {
    return $this->upcoming()[array_search($id, $this->getIds())];
  }

    public function upcoming() {
      $events = NULL;
      
      // Get the upcoming events of each event page and append them to one list
      foreach ($this->children()->index()->template('event')->filter(function($e) {
        // filter for pages which have an upcoming date
        return $e->dates()->toStructure()->filter(function($p) {
          $now = new DateTime('yesterday');
          return $p->from()->toDate() > $now->getTimestamp();
        })->isEmpty() == false;
      }) as $eventpage) {

        // Get and filter dates which aren't valid anymore
        $dates = $eventpage->dates()->toStructure()->filter(function($e) {
          $now = new DateTime('yesterday');
          return $e->from()->toDate() > $now->getTimestamp();
        });

        // Check if object is empty
        if ($dates->isEmpty()) continue;

        foreach ($dates as $date){

          $key = $date->from();
          $events[] = array(
            'from' => $date->from(),
            'to' => $date->to(),
            'location' => $date->location(),
            'event' => $eventpage,
            'id' => $date->autoId()
          );
        }
      }

      // Sort events
      if ($events != NULL) usort($events, "sortEventsByFromDate");

      return $events;
    }
}

