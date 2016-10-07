<?php 
//How this looks like: http://mysl.it/randomtube/indev/000.php

//Page title
$title = "Random shit";

//Volume 100 = 100%, 10 = 10% etc
$volume = "10";

//Stop editing. Now it should work :)

$videos = file("videos.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

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
		#contentbkp { z-index:2; position:relative; font-size: 1.17em; color: hotpink; }
		#content { z-index:2; position:fixed; bottom:8px; text-align:center; font-size: 1.17em; color: hotpink; }
		a:visited,a:link,a:hover { color: hotpink; }
	</style>
    </head>
	
    <body>

        <div id="content" style="float:center">
			<strong>
			<a href=# onClick="window.location.reload()" >Next Random Video</a>
            <a href="https://youtube.com/watch?v=<?= $videos[rand(0, count($videos) -1)] ?>" target="_blank">Watch on YouTube</a>
			<strong>
        </div>

				
    <div style="float: both;"></div>
    
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
          videoId: '<?= $videos[rand(0, count($videos) -1)] ?>',
          playerVars: { 'rel':0,'controls':1, 'showinfo':0, 'autoplay':1, 'modestbranding':0, 'iv_load_policy':3, 'cc_load_policy':1, 'disablekb':1,  'enablejsapi':0,  'loop':1 },
          events: {'onReady': onPlayerReady}
        });
      }
		
      function onPlayerReady(event) {
        event.target.setVolume(<?= $volume ?>);
        event.target.playVideo();
      }
    </script>

</html>
