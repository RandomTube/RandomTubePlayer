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
$video_array = array //Insert VideoIDs below
('HMQkV5cTuoY', 
'YSAqTdc-Y2g', 
'ck5f9LzQmjY'); 


shuffle($video_array);
$video = $video_array[0]; 
?>

<title>Random Shit!</title> <!-- Page Title here, below meta keywords -->
    <meta name="keywords" content="video, random, whatever" />
    <head>
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

<iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $video; ?>?rel=0&amp&controls=0&showinfo=0&autoplay=1&modestbranding=0&iv_load_policy=3&cc_load_policy=1" frameborder="0" allowfullscreen="0"></iframe>
