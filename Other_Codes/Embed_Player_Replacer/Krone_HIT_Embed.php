<?php

/*
 Regex Generator @ Kodi dot AL Dev Tools
 Code For PHP 5/7
 https://demo.kodi.al/Regex_Tools/Regex_Replacer/
*/

// CLEAR ADBLOCK OR WHAT YOU WANT FROM FUCKING ADS WEBSITES
// THIS IS EXAMPLE CODE

$GET_URL = file_get_contents('http://balkantelevizija.net/iptv-panel/repository/70-ALB-UK-HD.php?'.$_SERVER['QUERY_STRING']);
$GET_URL = str_replace("http://sitexw.fr/fuckadblock/fuckadblock.js","",$GET_URL);
$GET_URL = str_replace("function adBlockNotDetected","//function adBlockNotDetected",$GET_URL);
$GET_URL = str_replace("adBlockDetected","//adBlockDetected",$GET_URL);

$GET_URL = str_replace('<div id="popup-text">',"",$GET_URL);

$GET_URL = str_replace('<div id="popup">',"",$GET_URL);
$GET_URL = str_replace('33b5b0',"000",$GET_URL);
$GET_URL = str_replace('00BFFF',"000",$GET_URL);
$GET_URL = str_replace('555555',"0F0",$GET_URL);

$GET_URL = str_replace('Stream - Balkan TV',"Albdroid PHP Streaming",$GET_URL);

//$GET_URL = str_replace('//logo:',"logo:",$GET_URL);
//$GET_URL = str_replace('//position:',"position:",$GET_URL);

//$GET_URL = str_replace('//margin:',"margin:",$GET_URL);
$GET_URL = str_replace('Balkan Televizija',"Albdroid PHP Streaming",$GET_URL);
$GET_URL = str_replace('http://balkantelevizija.net',"http://albdroid.al",$GET_URL);

$GET_URL = str_replace("//file: 'logo/logo.png'","file: 'https://png.kodi.al/tv/albdroid/smart_x1.png'",$GET_URL);
$GET_URL = str_replace('<title>Adblock Detector</title>',"<title>TE KAM QIR ROPT</title>",$GET_URL);
$GET_URL = str_replace('<h1>Molimo iskljucite vas Adblock!</h1>',"",$GET_URL);
$GET_URL = str_replace('<h2>Otkrili smo da koristite Adblock . Morate ga deaktivirati kako bi koristili ovu web stranicu .</h2>',"",$GET_URL);
$GET_URL = str_replace('<button class="button button3" onclick="myFunction()">Osvježi</button>',"",$GET_URL);

echo $GET_URL;
?>