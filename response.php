
<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

$curl = curl_init('http://api.geonames.org/findNearbyPlaceNameJSON?lat=49.65957&lng=22.23461&username=rafal566');

  curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: text/plain; charset=UTF-8'));
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

  $result = curl_exec($curl);

  header('Content-Type: application/json; charset=UTF-8');
  echo(json_encode($result, true));
  // echo($result);

?>
