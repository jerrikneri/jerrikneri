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
                    <h4>R1D19 #100daysofcode</h4>
                </div>

                <div class="links">
                    When dark cold nights are no longer silent, and growing whispers pierce through the fragile veil of peace, the townsfolk hide away. Soft cold snow fell indecisively only to be broken and pressed under the freshly forged adamantite boots founding the knight’s armor set. Hanging scantily clad from his waist were two bastard swords nearly long enough to make trails in the fresh snow and craft their own impression. Their adorning sheaths were worn, matching the wear on the exposed hilts. He wore no banner on his heavily scratched breastplate. Behind him flowed a long nightmarish cloak, dragging along the floor as he walked, engulfing darkness with the depth and glare of an infinite abyss. His presence was commanding as each step resonated creating a surrounding aura of immobilizing fear around him. Each step, each metal clink shattered the glass thin grasp that solace was still upon them. His movements echoed like imploding spheres of force waves. When finally he arrived. A hopeful fire crackled before him. The fire burning in his eyes dashed around at the circle of men before him. He clasped his hands together as a sharp clang from the gauntlets echoed through the darkness. He spoke: “Let no man bear burden so undesired. Let no unjustified tyrant bear reign upon you. And let not any such king, man, or God cast down ill will without consequence. Heed forth gentlemen, tread lightly. A new dawn of chaos is upon us. Embrace yourselves and one another for the night will rain crimson, and the morning rot in decay. But in the light of mornings to come, each rising day, each new victor championing a red stained sword of justice, will be born a new guild of well-bred weathered men from whom will rise a new nation. History may be unforgiving, but we will not be forgotten. Cry loud and let your swords ring even louder for into the abyss do we march tonight.”
                </div>
            </div>
        </div>
    </body>
</html>
