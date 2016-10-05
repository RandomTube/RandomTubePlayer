<?php 
$video_array = array 
(
'YSAqTdc-Y2g', 
'IxPbgnO81sQ',
'HMQkV5cTuoY', 
'oBYEc0dWTGk',
'bFEoMO0pc7k',
'DI5_sQ8O-7Y',
'2xWfEoFSlFU',
't-wFKNy0MZQ'
); 

//Page title
$page_title = array
('Your title');

//Page size. If you don't know what you're doing leave it like that. Normal settings are for a full, responsive page.
$video_width = array
('100%');
$video_height = array
('100%');

//Player settings. Only change if you know what you're doing!
$player_settings = array
('?rel=0;amp;controls=0;showinfo=0;autoplay=1;modestbranding=0;iv_load_policy=3;cc_load_policy=1;disablekb=1&amp;enablejsapi=1&amp;loop=1&amp');

//Stop editing. Now it should work :)
shuffle($video_array);
$video = $video_array[0]; 
$width = $video_width[0];
$height = $video_height[0];
$title = $page_title[0];
$player = $player_settings[0];
?>

<title><?php echo $title; ?></title>
    <meta name="keywords" content="video, random, whatever" />
    <meta charset="utf-8">
    <head>
    <link href="style.css" 
          rel="stylesheet">
		
	<script type="text/javascript">
    window.smartlook||(function(d) {
    var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
    c.charset='utf-8';c.src='//rec.getsmartlook.com/recorder.js';h.appendChild(c);
    })(document);
    smartlook('init', '7505c06d5aa73db41c75aa345e8a82b1a08a6efe');
	</script>
    </head>


<div id="bg_container">
<iframe id="bg" width="<?php echo $width; ?>" height="<?php echo $height; ?>" src="https://www.youtube.com/embed/<?php echo $video; ?><?php echo $player; ?>" frameborder="0" allowfullscreen="0"></iframe>
</div>

<!--
<div id="content" style="display:inline"><h3 style="text-align: left" style="display:inline"><a href="https://youtube.com/watch?v=<?php echo $video; ?>">View on YouTube</a></h3></div> <div id="content" style="display:inline"><h3 style="text-align: right" style="display:inline"><a href="">Next Random Video</a></h3></div>
-->

<div id="content" style="display:inline"><h3 style="text-align: left" style="display:inline"><a href="https://youtube.com/watch?v=<?php echo $video; ?>">View on YouTube</a></h3></div> <div style="display:inline" id="content"><h3 style="text-align: right" style="display:inline"><a href="">Next Random Video</a></h3></div>
