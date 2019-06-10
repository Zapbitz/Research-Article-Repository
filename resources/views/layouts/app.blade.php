<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} {{ app()->version() }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="~bulma-calendar/dist/css/bulma-calendar.min.css" rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    </head>
    <body>
        <div >

            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="container">
                    <div class="navbar-brand">
                        <a href="/">
                            <img src="{{asset('assets/images/kjc-logo-dark.png')}}">
                        </a>
                    </div>

                    <div id="navbarBasicExample" class="navbar-menu">
                        <div class="navbar-end">
                            <div class="navbar-item">
                                <div class="buttons">
                                @if (Auth::guest())       
                                    <a class="button orange" href="{{ route('register') }}">
                                        <strong>Sign up</strong>
                                    </a>
                                    <a class="button is-light" href="{{ route('login') }}">
                                        Log in
                                    </a>
                                @else
                                    <a class="navbar-link" href="#">{{ Auth::user()->name }}
                                            <figure class="image is-32x32" style="margin-left:.8rem;">
                                                    <img class="is-rounded" src="https://ui-avatars.com/api/{{ Auth::user()->name }}">
                                            </figure>
                                    </a>
                                    <div class="navbar-dropdown">
                                        <a class="navbar-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            @yield('content')
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('scripts');
    </body>
</html>
