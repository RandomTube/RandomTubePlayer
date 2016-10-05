<!-- 
Created by: FailPlay.DE // Krenz Media
The latest version of this code you can find on GitHub: https://github.com/FailPlayDE/RandomTube

HowTo:
Simply enter the VideoID from YouTube in the list below.
The VideoID is the part of the Youtube URL "watch?v=".
For example:
The VideoID of "https://www.youtube.com/watch?v=YSAqTdc-Y2g" is "YSAqTdc-Y2g".


This program is free software; you can redistribute it and/or modify it under the terms of 
the GNU General Public License as published by the Free Software Foundation; either 
version 3 of the License, or any later version.
You can find this license at http://www.gnu.org/licenses/
-->

<?php 

//Settings
$video_array = array //Insert VideoIDs below
('HMQkV5cTuoY', 
'YSAqTdc-Y2g', 
'ck5f9LzQmjY'); 

//Page title
$page_title = array
('Random Shit!');

//Page size. If you don't know what you're doing leave it like that. Normal settings are for a full, responsive page.
$video_width = array
('100%');
$video_height = array
('100%');

//Player settings. Only change if you know what you're doing!
//Autoplay not working on Android-Chrome!
$player_settings = array
('?rel=0;amp;controls=0;showinfo=0;autoplay=1;modestbranding=0;iv_load_policy=3;cc_load_policy=1');

//Stop editing. Now it should work :)

shuffle($video_array);
$video = $video_array[0]; 
$width = $video_width[0];
$height = $video_height[0];
$title = $page_title[0];
$player = $player_settings[0];
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <meta name="keywords" content="video, random, whatever" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <style type="text/css">
                body, html
                {
                    margin: 0; padding: 0; height: 100%; overflow: hidden;
                }

                #content
                {
                    position:absolute; left: 0; right: 0; bottom: 0; top: 0px; 
                }
            </style>
    </head>
    <body>
        <iframe width="<?php echo $width; ?>" height="<?php echo $height; ?>" src="https://www.youtube.com/embed/<?php echo $video; ?><?php echo $player; ?>" frameborder="0" allowfullscreen="0"></iframe>
    </body>
</html>