<?php

/*
 ┌─────────────────────────────────────────────────────────────┐
 |  For More Modules Or Updates Stay Connected to Kodi dot AL  |
 └─────────────────────────────────────────────────────────────┘
 ┌───────────┬─────────────────────────────────────────────────┐
 │ Product   │ Embed Responsive Player                         │
 │ Version   │ v1.0-FREE                                       │
 │ Provider  │ Mixed                                           │
 │ Support   │ iframe Codes                                    │
 │ Licence   │ MIT                                             │
 │ Author    │ Olsion Bakiaj                                   │
 │ Email     │ TRC4@USA.COM                                    │
 │ Author    │ Endrit Pano                                     │
 │ Email     │ INFO@ALBDROID.AL                                │
 │ Website   │ https://kodi.al                                 │
 │ Facebook  │ /albdroid.official/                             │
 │ Github    │ github.com/SxtBox/                              │
 │ Created   │ 25 February 2021                                │
 │ Modified  │ 08 October 2021                                 │
 └─────────────────────────────────────────────────────────────┘
*/

include_once "embed_helper.php";
// NOTE: DIRECT URL IS WITHOUT LOCAL EMBED STRUCTURE, GET AUTOMATIC STRUCTURE VALUES FROM EMBED STREAMER

// DIRECT EMBED URL
$GET_URL = ""; // ENTER EMBED URL HERE

    if (empty($GET_URL)) {
		echo "Set Embed URL";
		return;
    }

$flussonic_direct_url = file_get_contents($GET_URL);

// LOCAL EMBED STRUCTURE
$flussonic_embed_url = "https://iptvpanels.kodi.al/flussonic/xikitv-1/embed.html"; // JUST URL CHANGE
$embed_code ='
<iframe frameborder="0" style="width:615px; height:350px;" src="'.$flussonic_embed_url.'" frameborder="0" allowfullscreen=yes>
</iframe>'."\n";

/* EXAMPLE FLUSSONIC EMBED CODE
<iframe frameborder="0" style="width:615px; height:350px;" src="https://iptvpanels.kodi.al/flussonic/xikitv-1/embed.html?dvr=false&token=8d0e282c7111c81870c149e981b807ee1e00d97d-1bacd74774fe9d733a5f57aecc582999-1633711520-1633704320
&version=2" frameborder="0" allowfullscreen=yes>
</iframe>
*/
// EXAMPLE FLUSSONIC EMBED CODE
?>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Flussonic Responsive Player</title>
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="icon" href="favicon.ico"/>
    <meta name="description" content="Flussonic Responsive Player">
    <meta http-equiv="cache-control" content="no-store">
    <meta name="author" content="Olsion Bakiaj - Endrit Pano" />
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Albdroid TV">
    <meta name="keywords" content="Albdroid TV" />
    <meta name="application-name" content="Albdroid TV">
    <meta name="msapplication-tooltip" content="Albdroid TV">
    <meta name="msapplication-starturl" content="http://cdn.kodi.al">
    <meta property="og:type" content="Television" />
    <meta name="msapplication-TileColor" content="#0F0">
    <meta name="msapplication-navbutton-color" content="#0F0">
    <meta name="theme-color" content="#0F0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#0F0">
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
    <meta name="referrer" content="never" />
    <meta name="referrer" content="no-referrer" />
</head>
<style>
* {
    margin: 0px;
}

html {
    overflow: hidden;
}
</style>
<div id="player-container">
<div id="player">
<?php

// I RECOMMEND YOU TO USE $flussonic_direct_url
$play_direct_url = embed_helper::responsive(str_replace('&amp;amp;', '&amp;', $flussonic_direct_url)); // DIRECT URL
echo $play_direct_url;

$play_embed_code = embed_helper::responsive(str_replace('&amp;amp;', '&amp;', $embed_code)); // LOCAL EMBED
// echo $play_embed_code;
?>
</div>
</div>
</html>
