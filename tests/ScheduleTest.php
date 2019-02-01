<?php

namespace campusannecy;

use PHPUnit\Framework\TestCase;

class ScheduleTest extends TestCase {

  protected $schedule;

  public function setUp() {
    $this->schedule = new Schedule();
  }

  public function testGetEvents() {
    $evts = $this->schedule->get_events();
    $this->assertEquals(array(), $evts);
  }
}
