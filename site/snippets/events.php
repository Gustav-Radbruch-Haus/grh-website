<?php

$limitBy = (isset($limitBy) ? $limitBy : false);
$forGroup = (isset($forGroup) ? $forGroup : null);

if (page('events')->upcoming($limitBy, $forGroup) == null) {
 // Show empty page for no given events
 echo '
  <article class="empty">
    <h3>' . page('events')->emptytitle() . '</h3>
    <p>' . page('events')->emptytext() . '</p>
  </article>';
} else {
 foreach (page('events')->upcoming($limitBy, $forGroup) as $event) {
  // Show evets
  echo snippet('event/card', ['event' => $event]);
 }
}