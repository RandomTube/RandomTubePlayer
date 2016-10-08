<?php 
//How this looks like: https://mysl.it/randomtube/indev/000.php

//Page title
$title = "Random shit";

//Volume 100 = 100%, 10 = 10% etc
$volume = "25";

//Name of your videos file, default: videos.txt
$file = "videos.txt";

//Color of links. Example: hotpink or #F0F8FF. You can find more html colors here: http://www.w3schools.com/colors/colors_names.asp
$color = "tomato";


//Stop editing. Now it should work :)

if (isset($_SERVER['HTTPS']) &&
    ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
    isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
    $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
  $ssl = 'https://';
}
else {
  $ssl = 'http://';
}


	if (isset($_GET["v"])) {
	//Play video requested (http://example.com/randomtube.php?v=VIDEOID)
	$video = $_GET["v"];
}
	else {
	//Play a random video
	$videos = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	$video = $videos[rand(0, count($videos) -1)];
}


?>


<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <meta name="keywords" content="video, random, whatever" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	    body, html { margin: 0; padding: 0; height: 100%; overflow: hidden; background:#000; }
		#videocontainer { position: relative; width: 100%; height: 0; padding-bottom: 56.25%; z-index:1; }
		#player { position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index:1; }
		#content { z-index:2; position:relative; font-size: 1.17em; color: <?= $color ?>; text-align: center;}
		a:visited,a:link,a:hover { color: <?= $color ?>; }
	</style>
	
	<script>
	function share() {
  	  var sharecode = prompt("You can share this video with the link below.", "<?= ($ssl . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'] . "?v=" . $video); ?>");
	}
	</script>
	
    </head>

    <body>

        <div id="content">
			<strong>
			<a href="<?= ($ssl . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'])?>" style="float:center">Next Random Video</a>
            <a href="https://youtube.com/watch?v=<?= $video ?>" target="_blank" style="float:left">Watch on YouTube</a>
			<a href="#" style="float:right" onclick="share()"> Share this video </a>
			</strong>
        </div>

    
    <div class="videocontainer">
        <div id="player"></div>
    </div>    
    
    <script>
      var tag = document.createElement('script');
      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          videoId: '<?= $video ?>',
          playerVars: { 'rel':0,'controls':1, 'showinfo':0, 'autoplay':1, 'modestbranding':0, 'iv_load_policy':3, 'disablekb':1,  'enablejsapi':0,  'loop':1 },
          events: {'onReady': onPlayerReady}
        });
      }
		
      function onPlayerReady(event) {
        event.target.setVolume(<?= $volume ?>);
        event.target.playVideo();
      }
    </script>

</html>
