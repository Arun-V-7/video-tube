<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Video Tube</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" />

        <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
        <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
		
		
		
		<link href="/assets/js/videojs-marquee-overlay-scrolling-text-master/video-js.css" rel="stylesheet">
  <link href="/assets/js/videojs-marquee-overlay-scrolling-text-master/videojs.watermark.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .card {
                background: white;
                box-shadow: 0 0 5px 1px #0000005c;
                border-radius: 5px;
            }

            .title {
                font-size: 84px;
            }
            div#my-video {
                width: auto;
            }
            a {
                color: #101010;
                text-decoration: none !important;
            }
            .video-text, .title h2 {
                padding-left: 2%;
                color:black;
                padding-bottom: 3%;
            }
            .video-text h2{
                font-weight: 600;
            }
            .video-text p{
                color: black;
                font-weight: 600;
                font-size: 18px;

            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            img {
                width: 100%;
            }
			
			  .vjs-emre-marquee {
    width: 100%;
    overflow: hidden;
    border: none;
    z-index:9998;
    position:absolute;
    font-size: 20px;
	top: 100px;
	background-color: transparent !important;
  }
  .vjs-control{
    z-index:9999;
  }
        </style>
    </head>
    <body>

    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Video Tube</a>
                </div>
                <ul class="nav navbar-nav" style="float:right;">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="/admin/login">Admin Login</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="">
        <div class="col-md-12">
            @if(isset($video))

                <div class="col-md-8">
                    <div class="card">
                        <video id="videojs-marquee-overlay-player" class="video-js vjs-default-skin" controls width="848" height="480"  data-setup='{"playbackRates": [1, 1.5, 2] }'>
  <source src="{{$video['video_path']}}" type="video/mp4">
</video>
                        <div class="video-text">
                            <h2>{{$video['title']}}</h2>
                            <p>{{$video['description']}}</p>
                        </div>

                    </div>
                
				
		
				</div>

                <div class="col-md-4">
                    @foreach($suggessions as $data)
                        <div class="col-md-12">
                            <div class="card">
                                <a href="/video/{{$data['video_id']}}">
                                    <div class="title m-b-md">
                                        <img src="{{$data['tumbnail']}}">
                                        <h2>{{$data['title']}}</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    <script src="https://vjs.zencdn.net/7.8.4/video.js"></script>
	
	
	<script src="/assets/js/videojs-marquee-overlay-scrolling-text-master/video.js"></script>
<script src="/assets/js/videojs-marquee-overlay-scrolling-text-master/videojs-marquee-overlay.js"></script>
<script src="/assets/js/videojs-marquee-overlay-scrolling-text-master/videojs-contrib-hls.js"></script>
<script src="/assets/js/videojs-marquee-overlay-scrolling-text-master/jquery.js"></script>
<script src="/assets/js/videojs-marquee-overlay-scrolling-text-master/videojs5-hlsjs-source-handler.js"></script>
<script src="/assets/js/videojs-marquee-overlay-scrolling-text-master/jquery.marquee.js"></script>
<script src="/assets/js/videojs-marquee-overlay-scrolling-text-master/videojs.watermark.js"></script>


<script>
  (function (window, videojs) {
    var player = window.player = videojs('videojs-marquee-overlay-player');
    player.marqueeOverlay({
      contentOfMarquee: "{{$video['watermark']}}",
      position: "bottom",
      direction: "left",
      duration: 0,
      color: "#fefefe",
	  opacity: 0.5
    });
    player.qualityPickerPlugin();
  
  }(window, window.videojs));

</script>
    </body>
</html>
