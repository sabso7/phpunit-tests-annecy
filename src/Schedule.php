<?php

namespace campusannecy;

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
  }

  // A implementer en TDD
  public function get_event_by_title($title) {
  }

  // A implementer en TDD
  public function is_location_available($time) {
  }
}