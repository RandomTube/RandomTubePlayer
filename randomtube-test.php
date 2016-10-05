<?php 
// Help: https://developers.google.com/youtube/iframe_api_reference?hl=de


//Page title
$title = 'Random shit!';
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <meta name="keywords" content="video, random, whatever" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="rtstyle.css" rel="stylesheet">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </head>
	
	
  <body>
    <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->

<div style="display:inline" id="content"><h3 style="text-align: right" style="display:inline"><a href="">Next Random Video</a> | <a id="pause-button" href="#"><strong>Pause The Video</strong></a>| <a id="play-button" href="#"><strong>Play The Video</strong></a></h3></div>

	  
    <div id="player"></div>

    <script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '100%',
          width: '100%',
          videoId: 'M7lc1UVf-VE',
          events: {
            'onReady': onPlayerReady,
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
      }

		
function onPlayerReady(event) {
  
  // bind events
  var playButton = document.getElementById("play-button");
  playButton.addEventListener("click", function() {
    player.playVideo();
  });
  
  var pauseButton = document.getElementById("pause-button");
  pauseButton.addEventListener("click", function() {
    player.pauseVideo();
  });
  
}
	  </script>
	  
	  


	  
	  


  </body>
