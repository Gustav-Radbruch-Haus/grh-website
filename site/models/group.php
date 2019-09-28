<?php

class GroupPage extends Page {

  public function typeName() {
    $type = $this->type()->value();
    switch ($type) {
        case 'ag':
          return 'Activity Group';
        case 'shc':
          return 'Student House Council';
        case 'official':
          return 'Studierendenwerk';
    }
  }
}