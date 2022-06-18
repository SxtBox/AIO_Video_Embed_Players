<?php
/*
THIS IS A EXAMPLE PLAYER
IF U WANT ADVANCED API WE HAVE VERY SECURED API FOR SALE
WE HAVE CREATED TWO TYPES OF APIS
THE FIRST API IS TO PLAY VIDEO FROM YOUR SERVER WITH ENCRYPTION MODE EX: video.mp4 OUTPUT TO HASH
SEE: Playlist_Structure/HASH_Structure/Eurodance.json

FIRST API SUPPORT THESE PLAYERS
VLC Simple
VLC Advanced
Smart TV Playlist
Smart Portal
Kodi
JSON Simple
JSON Advanced
JW Playlist Player
LIVE API: https://paidcodes.albdroid.al/Players/Stream_Secure/Playlist/EDM_Remixes/

SECOND API IS TO PLAY VIDEO FROM jwplayer.com SERVERS BY PLAYLIST ID FROM ANY JWPLAYER JSON/XML STRUCTURE
LIVE API: https://paidcodes.albdroid.al/JW_Player_APIS/
JWPLAYER JSON/XML API SUPPORT THESE PLAYERS
 	Clappr Player Playlisted ?id=WNT0MFjC
	JW Player Playlisted ?id=WNT0MFjC
	Smart TV Playlisted ?id=WNT0MFjC
	VLC Playlisted/Single ?id=WNT0MFjC
Change ID With Your Playlist ID
OUTPUT IS .m3u8

for more info contact at trc4@usa.com
*/
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Player</title>
<link rel="shortcut icon" href="https://kodi.al/panel.ico"/>
<link rel="icon" href="https://kodi.al/panel.ico"/>
<script src="https://content.jwplatform.com/libraries/B69fnEPr.js"></script>
<style media="screen"type="text/css">
html {
    height: 100%;
    overflow: hidden;
}

#player {
    height: 100%;
}

body {
    height: 100%;
    margin: 0;
    padding: 0;
    background-color: #000;
}

</style>
<style>
#player{position:absolute;width:100%!important;height:100%!important;}
</style>
</head>
<body>
<div id="player"></div>
<script type = "text/javascript">
var playerInstance = jwplayer('player');
playerInstance.setup({
    'playlist': "Playlist_Structure/External_Playlist.xml",  // OR RSS_Playlist_CDN.xml
    'height': '100%',
    'width': '100%',
    'wmode': 'opaque',
    'listbar': {
        'size': '180',
        'layout': 'extended'
    },
    'logo': {
        'margin': '8'
    },
    'advertising': {
        'client': 'vast',
        'enablepreloading': 'false'
    }
});
</script>
</body>
</html>
