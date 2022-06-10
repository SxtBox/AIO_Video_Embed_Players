<?php
$url = "http://balkantelevizija.net/iptv-panel/repository/70-ALB-UK-HD.php"; 
$data = file_get_contents($url) or die('Could not read url!');
preg_match("/atob.'(.+)'/",$data,$matches);
$stream = base64_decode($matches[1]);
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
echo("#EXTM3U Albdroid TV Streaming"."\n");
echo "\r#EXTINF:-1,Krone HIT\n";
//header("Location: $stream");
echo $stream."";
exit();
?> 