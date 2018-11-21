<?php

    date_default_timezone_set('Asia/Dhaka');

    error_reporting(0);
    $get = json_decode(file_get_contents('http://ip-api.com/json', true));

    //date_default_timezone_set($get['timezone']);

    $city = $_GET['city'];
    $country = $_GET['country'];

    $string = "http://api.openweathermap.org/data/2.5/weather?q=".$city.",".$country."&units=metric&appid=5660f4accf49f9e35e7e8179636efef2";
    
    

    $data = json_decode(file_get_contents($string), true);
    
    $temp = $data['main']['temp']. "°C";
    $icon = $data['weather'][0]['icon'];
    $desc = $data['weather'][0]['description'];
    $clouds = $data['clouds']['all'] . " %";
    $humidity = $data['main']['humidity']." %";
    $windspeed = $data['wind']['speed']." m/s";
    $pressure = $data['main']['pressure']." hpa";
    $sunrise = date('h:i A', $data['sys']['sunrise']);
    $sunset = date('h:i A', $data['sys']['sunset']);
?>