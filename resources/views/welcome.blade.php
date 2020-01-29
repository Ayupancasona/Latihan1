<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: linear-gradient(blue , lightblue);
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                /*font-weight: 200;*/
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 80vh;
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
                /*text-align: center;*/
                margin: 20px;
            }

            .title {
                font-size: 80px;
            }

            /*.links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }*/

            .m-b-md {
                font-family: cooper black;
                margin-bottom: 50px;
                color: darkorange;
                text-align: center; 
                margin-top: 30px;

                /*font-family: arial black;*/
            }
            .subtitle{
               
                color: black;
                font-size: 28px;
                font-family: cooper black;
                
               
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
                   WELCOME TO MY PROFIL!
                </div>
                <div class="subtitle">
                   
        <table  style="width:700px; padding-bottom: 5px; margin-left: 250px">
          <tbody>
            <tr>
              <td >Nama</td>
                <td>:</td>
                <td>Ayu Pancasona</td>
            </tr>
            <br>
          <tr>
              <td>NIM</td>
                <td>:</td>
                <td>183140714111076</td>
            </tr>
          <tr>
              <td>Jurusan</td>
                <td>:</td>
                <td>Teknologi Informasi</td>
            </tr>
          <tr>
              <td>Kelas</td>
                <td>:</td>
                <td>T4B/Software B</td>
            </tr>
    </tbody></table>

                   <!--  <p>Nama : Ayu Pancasona</p>
                    <p>NIM : 183140714111076</p>
                    <p>Jurusan : Teknologi Informasi</p>
                    <p>Kelas : T4B</p> -->

                </div>

                <!-- <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> -->
            </div>
        </div>
    </body>
</html>
