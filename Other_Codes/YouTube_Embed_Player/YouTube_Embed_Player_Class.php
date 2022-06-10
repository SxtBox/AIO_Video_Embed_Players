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

/*
ADVANCED MP4 PLAYER
https://paidcodes.albdroid.al/Youtube_APIS/MP4_Video_Player/ PLAYER TESTER
https://paidcodes.albdroid.al/Youtube_APIS/MP4_Video_Player/embed.php?url=[URL OR ID]
https://paidcodes.albdroid.al/Youtube_APIS/MP4_Video_Player/player_pro.php?url=gSlyUKPzJOg [URL OR ID]
*/

namespace Sxt\Box;
error_reporting(0);
date_default_timezone_set("Europe/Tirane");
class YouTube_Player
{

    protected $version = "1.2";
    public $author_name = "Albdroid.AL";
    public $author_website = "https://kodi.al";
    public $hide_footer = "1"; // 1 or zero
    public $youtube_domain = "https://www.youtube.com";
    public $youtube_embed_prefix = "embed";
    public $youtube_player_width = "100%";
    public $youtube_player_height = "100%";
    public $youtube_player_title = "YouTube Video Player";
    //public $youtube_id = null;
    public $youtube_id = "gSlyUKPzJOg"; // https://www.youtube.com/watch?v=gSlyUKPzJOg
    public $youtube_player_css = "
<style type=\"text/css\">
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
html {
overflow: scroll;
overflow-x: hidden;
}
::-webkit-scrollbar {
width: auto;
background: transparent;
}
::-webkit-scrollbar-thumb {
background: #000;
}
</style>"."\n";

////////////////////// CUT /////////////////////////
/*
public function get_yt_mp4_video($url) {
$active = TRUE;
// CODE
//echo $stream_url;
}
*/
////////////////////// CUT /////////////////////////

    public function Embed_Player() {
	$embed_config = [];
	$embed_config[] = "<html>\n<head>\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>"."\n";
	$embed_config[] = "<title>{$this->youtube_player_title} {$this->version}</title>"."\n";
	$embed_config[] = "<link rel=\"shortcut icon\" href=\"https://kodi.al/panel.ico\"/>"."\n";
	$embed_config[] = "<link rel=\"icon\" href=\"https://kodi.al/panel.ico\"/>"."";
	$embed_config[] = "{$this->youtube_player_css}";
	$embed_config[] = "</head>"."\n";
	$embed_config[] = "<iframe src=\"{$this->youtube_domain}/{$this->youtube_embed_prefix}/{$this->youtube_id}\" title=\"{$this->youtube_player_title}\" width=\"{$this->youtube_player_width}\" height=\"{$this->youtube_player_height}\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen>
</iframe>
</html>"."\n";

	if (!$this->hide_footer)
	$embed_config[] = "<center>YouTube <strong>Embed Player</strong> {$this->version} &copy; ".date('Y')." by <a href='{$this->author_website}' target='_blank' class='ipsBadge ipsBadge_style4'>{$this->author_name}</a></center>"."\n";
	return implode('', $embed_config);
	}
}

$player = new \Sxt\Box\YouTube_Player();
echo $player->Embed_Player();
//echo $player->get_yt_mp4_video("TRUE");
?>
