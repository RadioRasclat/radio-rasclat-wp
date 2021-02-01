<?php

// construct the query with our api url
$endpoint = 'https://api.radio-rasclat.com/meta/schedule';

// setup curl to make a call to the endpoint
$session = curl_init($endpoint);

// indicates that we want the response back
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

// exec curl and get the data back
$data = curl_exec($session);

// close the curl session once we are finished retrieveing the data
curl_close($session);

// decode the json data to make it easier to parse the php
$schedule = json_decode($data, true);
if ($schedule === NULL) die('Error parsing Radio Rasclat schedule.');

?>


