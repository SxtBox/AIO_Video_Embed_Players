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
 │ Modified  │ 0000:00:00:ss                                   │
 └─────────────────────────────────────────────────────────────┘
*/

include_once "embed_helper.php";

$controller_bar_color = "0F0"; // HEX COLOR WITHOUT "#"
// CREATE Player https://demo.kodi.al/Streaming/AIO_Vendors/Embed_Codes/Vimeo_Embed_Code_Generator
$vimeo_colored = '?playsinline&byline=0&portrait=0&&color='.$controller_bar_color;

// 512345103 = Era - Ameno (Hardstyle Bootleg)

$vimeo_id = "512344249"; // CHANGE ONLY VIDEO ID
$vimeo_url = "https://player.vimeo.com/video/".$vimeo_id . $vimeo_colored;

$embed_code ='
<iframe src="'.$vimeo_url.'" width="100%" height="100%" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen title="The Prodigy - No Good (Re-Style Bootleg)">
</iframe>'."\n";
/* CODE 2
$embed_code ='
<iframe width="560" height="315" src="'.$vimeo_url.'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
</iframe>'."\n";
*/
?>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Vimeo Responsive Player</title>
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="icon" href="favicon.ico"/>
    <meta name="description" content="Vimeo Responsive Player">
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
<style type="text/css">
body,td,th {
	color: #0F0;
}
body {
	background-color: #000;
}
</style>
<div id="player-container">
<div id="player">
<?php echo embed_helper::responsive(str_replace('&amp;amp;', '&amp;', $embed_code)); ?>
</div>
</div>
</html>
