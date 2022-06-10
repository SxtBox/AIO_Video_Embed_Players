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

$width  = '1000%';
$height = '1000%';
$show_text = "false";

$video_url = "https://www.facebook.com/webmoderators/videos/2430180000460475"; // JUST URL CHANGE

$FB_Emb_String = "https://www.facebook.com/plugins/video.php?href=". $video_url ."&show_text=$show_text";

$embed_code ='
<iframe width=' . $width . ' height=' . $height . ' src="'.$FB_Emb_String.'"
frameborder="0" allow="autoplay; autoplay; encrypted-media; gyroscope;
style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true">
</iframe>'."\n";
?>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Facebook Responsive Player</title>
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="icon" href="favicon.ico"/>
    <meta name="description" content="Facebook Responsive Player">
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
<?php echo embed_helper::responsive(str_replace('&amp;amp;', '&amp;', $embed_code)); ?>
</div>
</div>
</html>
