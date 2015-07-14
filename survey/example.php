<?php
/**********************************
 * (c) 2015 RamondettiDavide Spa *
 * RamondettiDavide Tracking Sys *
 * ramondettidavide.com/tracking *
 * SURVEY COMPLETE CODE *
**********************************/
//-- Here Start the Code --//
class RamondettiDavideTracking {
  include "https://tracking.ramondettidavide.com/descriptionEnabled?a=true";
  try {
    new TrackingURL;
    include "https://track.ramondettidavide.com/TrackEnabled";
    Reset();
  } catch (Exception $e) {
    $e = "";
  }
  function private Track(){
    try {
      $track_position = json_decode(file_get_contents("http://telize.com/geoip"),true);
    }
  }
}
