<?php

/*
MIT License

Copyright (c) 2021 Albdroid.AL

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/

// use ?id=YT ID

error_reporting(0);
date_default_timezone_set("Europe/Tirane");
if(! defined("YOUTUBE_CONFIG")) {
	//die("No direct script access allowed!");
}

if(!is_file("config.php")){
	copy("config.php", "config.php");
}

require_once __DIR__ . "/config.php";
//include "config.php"; // OR THIS
$id = (isset($_GET["id"])) ? $_GET["id"] : "gSlyUKPzJOg";
//$id = "TLKqOERBpzY";
$youtube_id = ($id);
// $youtube_id = intval($id); // x3 TEST

if (!$config["switch_off"]) echo <<<youtube_config
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>{$config['youtube_player_title']}</title>
<link rel="shortcut icon" href="https://kodi.al/panel.ico"/>
<link rel="icon" href="https://kodi.al/panel.ico"/>
<!-- CSS -->
<style type="text/css">

body,td,th {
	color: #0F0;
	overflow: hidden;
}

body {
	background-color: #000000;
}
a:link {
	color: #00FF00;
}
a:visited {
	color: #00FF00;
}
a:hover {
	color: #00FF00;
}
a:active {
	color: #00FF00;
}

html {
  height: auto;
}
body {
  min-height: auto;
}

/* remove scrollbar space */
html {
overflow: scroll;
overflow-x: hidden;
}
::-webkit-scrollbar {
width: auto; /* remove scrollbar space */
background: transparent; /* optional: just make scrollbar invisible */
}
/*  optional: show position indicator in red */
::-webkit-scrollbar-thumb {
background: #000;
}
</style>
<!-- CSS -->
</head>
<iframe src="{$config['youtube_domain']}/{$config['youtube_embed_prefix']}/{$youtube_id}" title="{$config['youtube_player_title']}" width="{$config['youtube_player_width']}" height="{$config['youtube_player_height']}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
</iframe>
</html>
youtube_config;
?>
