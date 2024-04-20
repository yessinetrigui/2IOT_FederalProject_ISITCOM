@extends('layouts.home')
@section('css-import')
<link rel="stylesheet" href="css/homepage.css">
@endsection

@section('js-import')
<script src="js/scripts.js"></script>
@endsection

@section('title')
    SkyLine
@endsection

@section('content')


<div id="HomePage">
    <div id="hide">
        <h1>NOT SUPPORTED FOR SCREEN UNDER 250PX SIZE</h1>
    </div>
    <header class="header">
        <div class="BLC1">
            <div class="title">
                <div class="main-text">
                    <div class="text"><h1>Dasgas auto systems</h1></div>
                    <div class="line"></div>
                </div>
                <div class="sub-text">
                    <h1>Where the only thing faster than our Services is our humor</h1>
                </div>
            </div>
        </div>
      
    </header>
    <section id="SEC-1">
    <div class="2xl:w-[600px] w-[500px] h-fit min-h-fit  max-sm:col-span-2  border-4 border-b-0 border-C3 ">
    <div class="h-fit p-2">
        <img class="w-full h-60 object-cover border-b-8 border-C3" src="https://www.penguinize.com/public/assets/SiteImages/Events/1700009368.jpg" alt="">
    </div>
    <div class="h-fit flex  p-4 py-1 justify-between items-center  ">
        <h1 class="text-xl font-int font-bold text-B">DasAuto</h1>
        <div class="flex justify-between items-center">
            <h2 class=" flex flex-row justify-center items-center ">
                <span class="mr-2">

                </span>
                <span class="font-int font-light">Place</span>
            </h2>

        </div>
    </div>
        <a class="font-bold flex items-center justify-center p-1 w-full mt-4 bg-C3 border-b-8 uppercase duration-700 hover:border-darkB border-C3 text-white  text-xl" href="https://www.penguinize.com/events/14">Check More</a>
</div>
    </section>
    <section id="SEC-2">
        <section id="sub-sec-1">
            <div class="content">
                <div class="text"><h1>Do you want to join our community ?</h1></div>
                <div onclick="goPaypal()" class="btn">click here</div>
            </div>
        </section>
        <section id="sub-sec-2">
            <div class="title">
                <div class="text">
                    <h1>About DasGas Auto</h1>
                    <div class="line"></div>
                </div>

            </div>
            <div class="content">
                <div class="desc">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="logo">
                    <img src="{{ URL::to('/assets/home/logo.png') }}" alt="">
                </div>
            </div>
        </section>
    </section>
    <section id="SEC-3">
        <div class="content">
            <div class="text">
                <div class="title">
                    <h1>Galerie</h1>
                    <div class="line"></div>
                </div>
            </div>
            <div class="carousel">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{ URL::to('/assets/home/G.jpeg') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ URL::to('/assets/home/v2.jpeg') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ URL::to('/assets/home/v3.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="SEC-4">
        <div class="content">
            <div class="text"><h1>do you want to join our server staff ? </h1></div>
            <div onclick="openDs()" class="btn">click here</div>
        </div>
    </section>
    <section id="SEC-5">
            <div class="BLC" id="BLC1">
                <div class="SUB-BLC">
                    <div class="text">
                        <h1>WHAT IS THIS SERVER?</h1>
                    </div>
                    <div class="line"></div>
                    <div class="desc">
                        <p>This is nextgaming GTA San Andreas Roleplay's modified server, which can be connected to with the MTA San Andreas client.
                        </p>
                    </div>
                </div>
                <div class="SUB-BLC">
                    <div class="text">
                        <h1>FROM THE SERVER?</h1>
                    </div>
                    <div class="line"></div>
                    <div class="desc">
                        <p>The server is constantly being upgraded and updated. This will always create new opportunities for players thanks to the expanding gameplay. The server is constantly backed up and mature management awaits the players for the best gaming experience.
                        </p>
                    </div>
                </div>
            </div>
            <div class="BLC" id="BLC2">
                <div class="SUB-BLC">
                    <div class="text">
                        <h1>WHAT IS THIS SERVER?</h1>
                    </div>
                    <div class="line"></div>
                    <div class="desc">
                        <p>You have to act like you're in real life. The beauty of being able to play any role is that you can be a cop, a doctor, a criminal.
                        </p>
                    </div>
                </div>
                <div class="SUB-BLC">
                    <div class="text">
                        <h1>HOW DO I PLAY?</h1>
                    </div>
                    <div class="line"></div>
                    <div class="desc">
                        <p>You must have GTA:San Andreas and the free DOWNLOADABLE MTA:San Andreas client to connect to the server. You can find video help by <a href="#" id="hightlight">clicking here</a>.                    </p>
                    </div>
                </div>
            </div>
    </section>
  
</div>



@endsection
