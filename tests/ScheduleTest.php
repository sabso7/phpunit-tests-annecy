<?php

namespace campusannecy;

use DateTime;
use PHPUnit\Framework\TestCase;

class ScheduleTest extends TestCase {

  protected $schedule;

  public function setUp() {
    $this->schedule = new Schedule();
  }

  public function testGetEvents() {
    $evts = $this->schedule->get_events();
    $this->assertEquals([], $evts);
  }

  public function testGetTodaysEvents() {
    $todayEvent = new Event(new DateTime("-1 hour"), new DateTime("+1 hour"), 'title',
      'location', 'description');
    $yesterdayEvent = new Event(new DateTime("-1 day"), new DateTime("-1 day"), 'title',
      'location', 'description');
    $allEvents = [$yesterdayEvent, $todayEvent];
    $todaysEvents = [$todayEvent];
    $schedule = $this->getMockBuilder(Schedule::class)
      ->setMethods(['get_events'])
      ->getMock();
    $schedule->method('get_events')->willReturn($allEvents);

    $this->assertSame($todaysEvents, $schedule->get_todays_events());
  }
}
