<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Parental Control</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: rgba(150, 200, 247, 0.1);
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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

            .card-img{
                height: 5%;
                width: 100%;
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            footer{

                position: relative;
                text-align: center;
                padding: 5px 0;
                color: #fff;
                color: rgba(0, 0,0);
                display: block;
                z-index: 10;
                background: rgba(0, 0, 0, 0.1);
                text-decoration: none;

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
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
              
                
                <div class="title m-b-md">
                    Parental Control
                </div>
                
                <div class="card bg-dark text-white">
                    <img class="card-img" src="{{ asset('img/PC_BLACK1.jpeg') }}" alt="Parental Control">
                    <div class="card-img-overlay">
                      <h5 class="card-title"></h5>
                      <p class="card-text"></p>
                      <p class="card-text"></p>
                    </div>
                  </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://github.com/DavidSoft21/parental_control">Ir a GitHub Project</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
        <footer class="main-footer">
            <center>
                @include('plantilla/footer')
            </center>
        </footer>
    </body>

</html>
