<?php

namespace campusannecy;

use DateTime;

class Schedule {

  public function __construct() {
  }

  public function get_events() {
    $eventsApi = new CouchDbEventsApi();
    return $eventsApi->get_events();
  }

  // A implementer en TDD
  public function get_first_event() {
  }

  // A implementer en TDD
  public function get_last_event() {
  }

  // A implementer en TDD
  public function get_longest_event() {
  }

  // A implementer en TDD
  public function get_shortest_event() {
  }

  // A implementer en TDD
  public function has_event_on($time) {
    $evts = $this->get_events();
    $day_evts = array();
    foreach ($evts as $evt) {
      $start = $evt->getStartTime();
      $end = $evt->getEndTime();
      if($time >= $start && $time <= $end) {
        $day_evts[] = $evt;
      }
    }
    return $day_evts;
  }

  // A implementer en TDD
  public function get_event_by_title($title) {
  }

  // A implementer en TDD
  public function is_location_available($time) {
  }

  public function get_todays_events() {
    $now = new DateTime();
    return $this->has_event_on($now);
  }
}