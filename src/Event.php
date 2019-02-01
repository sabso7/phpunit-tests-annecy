<?php

namespace campusannecy;

class Event {

  private $startTime;
  private $endTime;
  private $title;
  private $location;
  private $description;

  public function __construct($startTime, $endTime, $title, $location, $description) {
    $this->startTime = $startTime;
    $this->endTime = $endTime;
    $this->title = $title;
    $this->location = $location;
    $this->description = $description;
  }

  public function getStartTime() {
    return $this->startTime;
  }

  public function setStartTime($startTime) {
    $this->startTime = $startTime;
  }

  public function getEndTime() {
    return $this->endTime;
  }

  public function setEndTime($endTime) {
    $this->endTime = $endTime;
  }

  public function getTitle() {
    return $this->title;
  }

  public function setTitle($title) {
    $this->title = $title;
  }

  public function getLocation() {
    return $this->location;
  }

  public function setLocation($location) {
    $this->location = $location;
  }

  public function getDescription() {
    return $this->description;
  }

  public function setDescription($description) {
    $this->description = $description;
  }
}