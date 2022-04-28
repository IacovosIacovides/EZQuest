<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EZQuest</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

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
                margin-top: -300px;
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
                margin-bottom: 10px;
            }
            .m-b-md:hover{
                color:#228B22;
            }
            .button {
                position: absolute;
                overflow: hidden;
                border: 1px solid #18181a;
                color: #18181a;
                display: inline-block;
                font-size: 15px;
                line-height: 30px;
                padding: 10px 40px 17px;
                text-decoration: none;
                cursor: pointer;
                background: #fff;
                user-select: none;
                -webkit-user-select: none;
                touch-action: manipulation;
                }

            .button span:first-child {
                position: relative;
                transition: color 600ms cubic-bezier(0.48, 0, 0.12, 1);
                z-index: 10;
                }

            .button span:last-child {
                color: white;
                display: block;
                position: absolute;
                bottom: 0;
                transition: all 500ms cubic-bezier(0.48, 0, 0.12, 1);
                z-index: 100;
                opacity: 0;
                top: 50%;
                left: 50%;
                transform: translateY(225%) translateX(-50%);
                height: 14px;
                line-height: 13px;
                }

            .button:after {
                content: "";
                position: absolute;
                bottom: -50%;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: black;
                transform-origin: bottom center;
                transition: transform 600ms cubic-bezier(0.48, 0, 0.12, 1);
                transform: skewY(9.3deg) scaleY(0);
                z-index: 50;
                }

            .button:hover:after {
                transform-origin: bottom center;
                transform: skewY(9.3deg) scaleY(2);
                }

            .button:hover span:last-child {
                transform: translateX(-50%) translateY(-100%);
                opacity: 1;
                transition: all 900ms cubic-bezier(0.48, 0, 0.12, 1);
            }
            
            .link{
                position: absolute;
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
                    EZQuest
                </div>
            <div>
                <h1>Your favourite survey application</h1>
            </div>
            </div>
            
            <a href="home.blade.php" class="link">
            <button class="button" role="button"><span class="text">Start</span><span>Your survey</span></button>
            </a>
            
        </div>
    </body>
</html>
