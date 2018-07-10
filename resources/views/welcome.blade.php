<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #999;
                color: black;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 100px 50px;
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
            .writing {
                padding: 0 50px;
                color: black;
                font-size: 20px;
                font-weight: bold;
            }
            .flex {
                display: flex;
                justify-content: space-around;
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
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    A Blog Code Diary with Laravel
                </div>
                <div>
                    <h3><i>Read, code, and write with me.</i></h3>
                </div>
                <div class="flex">
                    <h1>July 9, 2018 21:00</h1>
                    <h1>R1D1 #100daysofcode</h1>
                </div>
                    
                <div class="writing">
                    <p>Distractions play their role well. I suppose that goes without saying. But on further examination, what manifests deeper inside, begs curiosity. 

                    A lot of the ‘swirling chaos’ has faded, or subsided, at least to some degree. While on another, it seems to have only lessened in magnitude, interwoven between distractions that dance in the air. Oblivious to sensation, but obvious to the curious mind. The frequency, the resonation are all very much the same, but the storm itself somehow feels hidden. The intensity holds steadfast, but there is no trace in its passing. 

                    Far fewer pieces fly about destructively, less thoughts turmoil and cloud reality. And yet a very distinct haze still remains. Uncertainty still rings loudly, layered atop the fragile silence. 

                    The piercing void echoes into the past. </p>


                    <p> I stand knee deep in this swampy morass, covered in a dense, disillusioning fog. And yet in the distance, I can see, or perhaps imagine, mountaintops, and ravines. 

                    The air is cold but there is no breeze. However warmth is more than fathomable. It is beyond a construct of imagination, yet its existence is still questionable. 

                    I close my eyes and try to ‘feel’ outward. To document with my mind and senses the reality that I’m currently experiencing and facing. But all I hear is silence. All I feel is nothing. 

                    I close my eyes harder, focus more intently, open my soul more honestly. </p>


                    <p>I might’ve imagined that a breeze washed across my face. Some cold gentle hand that for a moment felt soothing.</p>

                    <p>My eyes snapped open and the sorrowful swamp was but a knee high meadow. The fog but a light dusky haze, the sun barely breaking the horizon. And yet... the same empty feeling remained. This hidden void lingered. </p> 


                    <p>I sighed and trekked forward through the swampy meadow of shackles towards the mountains. </p>
                </div>
            </div>
        </div>
    </body>
</html>
