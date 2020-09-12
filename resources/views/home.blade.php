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
            a {
                color: #101010;
                text-decoration: none !important;
            }
            .card h2 {
                padding-bottom: 4%;
                padding-left: 2%;
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
			.col-md-4 {
    height: 500px;
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
                @foreach($video as $data)
            <div class="col-md-4">
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
                @endif
        </div>
    </div>
    </body>
</html>
