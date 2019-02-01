<?php

namespace campusannecy;

class CouchDbEventsApi implements EventsApi {

  public function get_events() {
    $client = \Doctrine\CouchDB\CouchDBClient::create(array('url' => Config::DB_URL));
    $docs = $client->allDocs();
    $evts = array();
    if ($docs->body && $docs->body['rows']) {
      foreach ($docs->body['rows'] as $row) {
        if (strpos($row['id'], '_design') !== 0) {
          $evts[] = $row['doc'];
        }
      }
    }
    return $evts;
  }
}