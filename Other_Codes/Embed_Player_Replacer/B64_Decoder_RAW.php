<?php
$url = "http://balkantelevizija.net/iptv-panel/repository/70-ALB-UK-HD.php"; 
$data = file_get_contents($url) or die('Could not read url!');
preg_match("/atob.'(.+)'/",$data,$matches);
echo base64_decode($matches[1]);
?> 