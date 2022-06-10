<?php

/*
 ┌─────────────────────────────────────────────────────────────┐
 |  For More Modules Or Updates Stay Connected to Kodi dot AL  |
 └─────────────────────────────────────────────────────────────┘
 ┌───────────┬─────────────────────────────────────────────────┐
 │ Product   │ Embed Responsive Maker                          │
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

// Video Resize [Responsive Maker Function]
class embed_helper
{
    public static function responsive($embed)
    {
        $embed = preg_replace('/width="(\d+)"/', 'width="100%"', $embed);
        $embed = preg_replace('/width=(\d+)/',   'width="100%"', $embed);
        $embed = preg_replace("/width='(\d+)'/", 'width="100%"', $embed);

        /*
	PX REPLACER FLUSSONIC EMBED STRUCTURE https://rubular.com/r/ess6eKkDigyUbj
        based on flussonic embed player
        */
        $embed = preg_replace("/width.(.\d+.*?px)/", 'width:100%', $embed); // PX
        $embed = preg_replace("/height.(.\d+.*?px)/", 'height:100%', $embed); // PX
        // END PX REPLACER
        $embed = preg_replace('/height="(\d+)"/', 'height="100%"', $embed);
        $embed = preg_replace('/height=(\d+)/',   'height="100%"', $embed);
        $embed = preg_replace("/height='(\d+)'/", 'height="100%"', $embed);

        $embed = preg_replace('/WIDTH="(\d+)"/', 'width="100%"', $embed);
        $embed = preg_replace('/WIDTH=(\d+)/',   'width="100%"', $embed);
        $embed = preg_replace("/WIDTH='(\d+)'/", 'width="100%"', $embed);

        $embed = preg_replace('/HEIGHT="(\d+)"/', 'height="100%"', $embed);
        $embed = preg_replace('/HEIGHT=(\d+)/',   'height="100%"', $embed);
        $embed = preg_replace("/HEIGHT='(\d+)'/", 'height="100%"', $embed);
        return $embed;
    }
}
