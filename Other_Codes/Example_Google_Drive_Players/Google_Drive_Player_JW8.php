<?php

/*
Player Generated From: https://demo.kodi.al/My_Tools/Players_Tools/Player_Builder/JW_Player/v2_Beta/

SET API KEY IN $youtube_api_key
AND GET ?url=https://drive.google.com/file/d/XXXXXXXXXXXXXXXX/view?usp=sharing
*/

$url = isset($_GET['url']) && !empty($_GET['url']) ? $_GET['url'] : "";
$get_url = explode("/",parse_url($url)['path'])[3];
$youtube_api_key = ""; // ENTER YOUTUBE API KEY HERE
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Google Drive JW8</title>
<link rel="shortcut icon" href="https://kodi.al/panel.ico"/>
<link rel="icon" href="https://kodi.al/panel.ico"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
body,td,th {
	color: #0F0;
}
body {
	background-color: #000;
}
html {
	overflow: hidden;
}
* {
    margin: 0;
    padding: 0
}
#player {
    position: absolute;
    width: 100% !important;
    height: 100% !important
}
.jw-rightclick {
    display: none !important;
}
</style>
</head>
<body>
<script type="text/javascript" src="https://content.jwplatform.com/libraries/iGrCEbaN.js"></script>
<div id="player"></div>
<script type="text/javascript">
jwplayer("player").setup({
sources: [
{
	file: 'https://www.googleapis.com/drive/v3/files/<?php echo $get_url; ?>?alt=media&key=<?php echo $youtube_api_key; ?>',
	type: 'video/mp4',
	label: '720p'
}
],
	rtmp: {
	bufferlength: 120,
},

	'autostart': 'false', // true/false
	'image': 'https://png.kodi.al/tv/albdroid/logo_bar.png', // Poster
	'playbackRateControls': 'true',
	'aspectratio': '16:9',
	// Responsive Player
	'width': '100%',
	'height': '100%',
	/* LOGO POSITIONS
	top-right
	bottom-left
	bottom-right
	bottom-left
	*/
	'logo': {
	'file': 'https://png.kodi.al/tv/albdroid/logo_bar.png', // logo url
	'position': 'top-right', // logo position
	'margin': 20
	},
	'fallback': false,
	// Skins
	'skin': {
	'name': "netflix",
	'active': "#0F0",
	'inactive': "#0F0",
	'background': "transparent"
	}, // End Skins
	'androidhls': true,
	'primary': 'html5',
	'preload': 'metadata',
	'mute': 'false', // false/true
	/* STRETCHING OPTIONS
	stretching = object-fit
	none = none
	exactfit = fill
	fill = cover
	uniform	= contain
	*/
	'stretching': 'uniform',
	'playbackRateControls': 'true',
	'liveSyncDuration': ''
});
</script>
</body>
</html>
