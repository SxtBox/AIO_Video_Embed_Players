<?php

/*
 Regex Generator
 Code For PHP 5/7
*/

/*
KETU KAM BERE REPLACE
KAM HEQUR LOGON E KETIJ KARIT EDHE KAM VENDOS LOGON TIME
KAM BER LINK PLAYER QE TE LUAJI DIRECT NGA FAQJA QE BEN STREAMING QE TE SHPETOJME TRAFIKUN
KAM HEQUR ADS E KETIJ KARAGJOZIT
*/

$GET_URL = file_get_contents('http://www.parsatv.com/embed.php?name=ALB-Music'.$_SERVER['QUERY_STRING']);
$GET_URL = str_replace("https://lh6.googleusercontent.com/-rrsv57VMjds/WBpK_iIBqUI/AAAAAAADjjQ/IEFgtVQu-lsSD1h1lK0PohdjdhvC_xsLACLcB/s120/parsatvlogo.png","https://png.kodi.al/tv/albdroid/smart_x1.png",$GET_URL); // MY LOGO
$GET_URL = str_replace("ⓧ Close Ad","",$GET_URL); // REMOVE ADS BUTTON QE TE CAN KARIN NE PLAYER
$GET_URL = str_replace("http://www.parsatv.com/embedads/img/tv6.jpg","",$GET_URL); // REMOVE LOGO
$GET_URL = str_replace("https://www.googletagmanager.com/gtag/js?id=UA-91385852-1","",$GET_URL); // REMOVE ADS LINK
$GET_URL = str_replace("http://www.parsatv.com/name=Shabakeh-3#irib","",$GET_URL); // REMOVE ADS
$GET_URL = str_replace("/player/jw7/jwplayer7.12.13.js","http://www.parsatv.com/player/jw7/jwplayer7.12.13.js",$GET_URL); // LINK PLAYER
$GET_URL = str_replace("/player/jw7/swfobject.js","http://www.parsatv.com/player/jw7/swfobject.js",$GET_URL); // LINK PLAYER
$GET_URL = str_replace("/player/jw7/jwplayer.flash.swf","http://www.parsatv.com/player/jw7/jwplayer.flash.swf",$GET_URL); // LINK PLAYER
$GET_URL = str_replace("/player/jw7/jquery-2.1.4.min.js","http://www.parsatv.com/player/jw7/jquery-2.1.4.min.js",$GET_URL); // LINK PLAYER
$GET_URL = str_replace("http://www.parsatv.com/embedads/","",$GET_URL);
$GET_URL = str_replace("UA-91385852-1","",$GET_URL); // REMOVE ADSENSE ID
$GET_URL = str_replace("Loading the player...","",$GET_URL); // REMOVE Loading the player
$GET_URL = str_replace('style="color: white; font-family: arial; cursor: pointer; background-color: black',"",$GET_URL);
$GET_URL = str_replace("ads1","",$GET_URL);  // REMOVE ADS
$GET_URL = str_replace("sharing","//sharing",$GET_URL);  // REMOVE SHARING LINK
$GET_URL = str_replace("<a OnClick=hid('ads1' id='ads style=color: white; font-family: arial; cursor: pointer; background-color: black","",$GET_URL);  // REMOVE ADS
$GET_URL = str_replace("ads1","",$GET_URL);  // REMOVE ADS
$GET_URL = str_replace('" target="_blank"><img border="0" src=""',"",$GET_URL);  // REMOVE IMG BORDER
$GET_URL = str_replace("width: 100%; max-width: 600px;","width: 0px; max-width: 0px;",$GET_URL);
echo $GET_URL; // CLEARED CODE
?>