//Based on the old version. Will fix that later

<?php 


//Page title
$page_title = array
('Random Shit!');

//Page size. If you don't know what you're doing leave it like that. Normal settings are for a full, responsive page.
$video_width = array
('100%');
$video_height = array
('100%');

//Player settings. Only change if you know what you're doing!
$player_settings = array
('?rel=0;amp;controls=0;showinfo=0;autoplay=1;modestbranding=0;iv_load_policy=3;cc_load_policy=1;disablekb=1&amp;enablejsapi=1&amp;loop=1&amp');

//Stop editing. Now it should work :)
$video = $_GET['v']; 
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
    </head>


<div id="bg_container">
<iframe id="bg" width="<?php echo $width; ?>" height="<?php echo $height; ?>" src="https://www.youtube.com/embed/<?php echo $video; ?><?php echo $player; ?>" frameborder="0" allowfullscreen="0"></iframe>
</div>


<div id="content" style="display:inline"><h3 style="text-align: left" style="display:inline"><a href="https://youtube.com/watch?v=<?php echo $video; ?>">View on YouTube</a></h3></div> <div style="display:inline" id="content"><h3 style="text-align: right" style="display:inline"><a href="000.php">Next Random Video</a></h3></div>
