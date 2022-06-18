<?php

/*
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
<title>Google Drive JW7</title>
<link rel="shortcut icon" href="https://kodi.al/panel.ico"/>
<link rel="icon" href="https://kodi.al/panel.ico"/>
<style type="text/css">
body,
html {
    margin: 0;
    padding: 0
}

#player {
    width: 100% !important;
    height: 100% !important;
    position: absolute;
    border: none;
    overflow: hidden;

    .jw-scrollbar {
        display: none !important;
    }

    .jw-rightclick {
        display: none !important;
    }
}
</style>
</head>
<body topmargin="0" leftmargin="0" oncontextmenu="return false" style="background:black; margin: 0px" width="100%" height="100%">
<div id="player"></div>
<script type="text/javascript" src="https://ssl.p.jwpcdn.com/player/v/7.7.3/jwplayer.js"></script>
<script type="text/javascript">jwplayer.key = "rqQQ9nLfWs+4Fl37jqVWGp6N8e2Z0WldRIKhFg==";</script>
<script>
var playerInstance = jwplayer('player');
playerInstance.setup({
    width: '100%',
    height: '100%',
    title: 'Vari Karin',
    image: 'https://png.kodi.al/tv/albdroid/logo_bar.png',
    controls: true,
    displaytitle: true,
    aspectratio: '16:9',
    fullscreen: 'true',
    primary: 'html5',
    mute: false,
    provider: 'http',

    // Skins
    'skin': {
        'name': "",
        'active': "#0F0",
        'inactive': "#0F0",
        'background': "transparent"
    },

    /* STRETCHING OPTIONS
    stretching = object-fit
    none = none
    exactfit = fill
    fill = cover
    uniform	= contain
    */
    'stretching': 'fill',
    'playbackRateControls': 'true',

    sources : [{
        file: 'https://www.googleapis.com/drive/v3/files/<?php echo $get_url; ?>?alt=media&key=<?php echo $youtube_api_key; ?>',
        type: 'video/mp4',
        label: '720p'
    }],
    //abouttext: 'Vari Karin',
    //aboutlink: ''
});
</script>
</body>
</html>