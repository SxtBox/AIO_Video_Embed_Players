<?php

/*
Player Generated From: https://demo.kodi.al/My_Tools/Players_Tools/Player_Builder/Clappr_Player/

SET API KEY IN $youtube_api_key
AND GET ?url=https://drive.google.com/file/d/XXXXXXXXXXXXXXXX/view?usp=sharing
*/

$url = isset($_GET['url']) && !empty($_GET['url']) ? $_GET['url'] : "";
$get_url = explode("/",parse_url($url)['path'])[3];
$youtube_api_key = ""; // ENTER YOUTUBE API KEY HERE
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Google Drive Clappr Player</title>
<link rel="shortcut icon" href="https://kodi.al/panel.ico"/>
<link rel="icon" href="https://kodi.al/panel.ico"/>
<style type="text/css">
body,td,th {
	color: #0F0;
}
body {
	background-color: #000;
}
a:link {
	color: #0FC;
}
a:visited {
	color: #3F6;
}
a:hover {
	color: #09F;
}
a:active {
	color: #009;
}
</style>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@clappr/player@latest/dist/clappr.min.js"></script>
</head>
<body>
<?php
// AUTOMATIC PLAYER SWITCHING FOR ANDROID DEVICES
$ipod = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iphone = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipad = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$android = stripos(strtolower($_SERVER['HTTP_USER_AGENT']),"android");
if(($ipod != true) &&( $iphone != true)&&( $ipad != true)&&( $android != true)){
?>
<!-- DESKTOP PLAYER -->
<div id="player"></div>
<script>
var player = new Clappr.Player({
source: "https://www.googleapis.com/drive/v3/files/<?php echo $get_url; ?>?alt=media&key=<?php echo $youtube_api_key; ?>",
poster: "https://png.kodi.al/tv/albdroid/logo_bar.png",
watermark: "https://png.kodi.al/tv/albdroid/logo_bar.png",
position: "top-right",
watermarkLink: "http://albdroid.al",
scale: "exactfit",
parentId: "#player",
playInline: true,
autoPlay: false,
// autoPlay: true,
mimeType: 'video/mp4',
mediacontrol: {
	seekbar: "#0F0",
	buttons: "#0F0"
},
width: '100%',
height: '100%'
});
</script>
<?php }else{ ?>
<!-- ANDROID PLAYER -->
<div id="player"></div>
<script>
var player = new Clappr.Player({
source: "https://www.googleapis.com/drive/v3/files/<?php echo $get_url; ?>?alt=media&key=<?php echo $youtube_api_key; ?>",
poster: "https://png.kodi.al/tv/albdroid/logo_bar.png",
watermark: "https://png.kodi.al/tv/albdroid/logo_bar.png",
position: "top-right",
watermarkLink: "http://albdroid.al",
scale: "exactfit",
parentId: "#player",
playInline: true,
autoPlay: false,
// autoPlay: true,
mimeType: 'video/mp4',
mediacontrol: {
	seekbar: "#0F0",
	buttons: "#0F0"
},
width: '100%',
height: '100%'
});
</script>
<?php } ?>
</body>
</html>
