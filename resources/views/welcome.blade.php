<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Home | {{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> --}}
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .versioninfo {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
            }

            .framwork_title {
                font-weight: 600;
                padding-top: 20px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    {{-- <figure class="image is-128x128">
                        <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                    </figure> --}}
                    <p class="title is-2">Research Article Repository</p>
                    <p class="versioninfo">Search 10,000+ Papers, Books and Reports</p>
                </div>

                <nav class="level">
                        <div class="level-item has-text-centered">
                          <div>
                            <p class="heading">Tweets</p>
                            <p class="title is-2">3,456</p>
                          </div>
                        </div>
                        <div class="level-item has-text-centered">
                          <div>
                            <p class="heading">Following</p>
                            <p class="title is-2">123</p>
                          </div>
                        </div>
                        <div class="level-item has-text-centered">
                          <div>
                            <p class="heading">Followers</p>
                            <p class="title is-2">456K</p>
                          </div>
                        </div>
                        <div class="level-item has-text-centered">
                          <div>
                            <p class="heading">Likes</p>
                            <p class="title is-2">789</p>
                          </div>
                        </div>
                      </nav>
                {{-- <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> --}}

                {{-- <div class="foundation_button_test">
                    <p class="framwork_title">Bulma v0.7.4</p>
                    <p class="framwork_title">Bulma Extension v4.0.2</p>

                    <div class="block">
                        <a class="button is-primary">Primary</a>
                        <a class="button is-info">Info</a>
                        <a class="button is-success">Success</a>
                        <a class="button is-warning">Warning</a>
                        <a class="button is-danger">Danger</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </body>
</html>
