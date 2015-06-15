<?php

/*
  $url="http://api.openweathermap.org/data/2.5/weather?q=LONDON&units=metric";
  $json=file_get_contents($url);
  $data=json_decode($json,true);
  //Get current Temperature in Celsius
  echo $data['main']['temp']."<br>";
  //Get weather condition
  echo $data['weather'][0]['main']."<br>";
  //Get cloud percentage
  echo $data['clouds']['all']."<br>";
  //Get wind speed
  echo $data['wind']['speed']."<br>";
 */
//$kitty = "What is today’s temperature in Dhaka?";

if (isset($_GET['q'])) {
    $kitty = $_GET['q'];
    $tokens = explode(" ", $kitty);
    $tokens = explode("?", $tokens[count($tokens) - 1]);
    $city = $tokens[0];
    $request = 'http://api.openweathermap.org/data/2.5/weather?q=' . $city . '&cnt=7&units=metric';
    $response = file_get_contents($request);
    $ret = json_decode($response, true);
    //temperature
    if (strpos($kitty, 'temperature')) {
        echo $ret['main']['temp'];
    }
    //humidity
    if (strpos($kitty, 'humidity')) {
        echo $ret['main']['humidity'].'%';
    }
    //others
    if (strpos($kitty, 'Rain')) {
        //echo $ret['rain']['3h'];
    } else if (strpos($kitty, 'Clouds')) {
        if($ret['clouds']['all']>0){
            echo 'Yes';
        }else echo 'No';
    } else if (strpos($kitty, 'Clear')) {
        if($ret['weather'][0]['main'] == 'Clear' ){
            echo 'Yes';
        }else echo 'No';
    }
}
?>
