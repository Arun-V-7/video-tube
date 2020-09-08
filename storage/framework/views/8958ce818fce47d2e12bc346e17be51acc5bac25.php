<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
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
            <?php if(isset($video)): ?>

                <div class="col-md-8">
                    <div class="card">
                        <video id="my-video" class="video-js" controls preload="auto" width="" height="264" autoplay
                               poster="<?php echo e($video['tumbnail']); ?>"
                               data-setup="{}">
                            <source src="<?php echo e($video['video_path']); ?>" type="video/mp4"/>
                            
                            <p class="vjs-no-js">
                                To view this video please enable JavaScript, and consider upgrading to a
                                web browser that
                                <a href="https://videojs.com/html5-video-support/" target="_blank"
                                >supports HTML5 video</a
                                >
                            </p>
                        </video>
                        <div class="video-text">
                            <h2><?php echo e($video['title']); ?></h2>
                            <p><?php echo e($video['description']); ?></p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <?php $__currentLoopData = $suggessions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-12">
                            <div class="card">
                                <a href="/video/<?php echo e($data['video_id']); ?>">
                                    <div class="title m-b-md">
                                        <img src="<?php echo e($data['tumbnail']); ?>">
                                        <h2><?php echo e($data['title']); ?></h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://vjs.zencdn.net/7.8.4/video.js"></script>
    </body>
</html>
<?php /**PATH E:\interview\video player\app\Modules/User/resources/views/video.blade.php ENDPATH**/ ?>