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

<?php
try {
    require_once('MTA/Autoloader.php');
    $GameQ = new \GameQ\GameQ();

} catch (\Throwable $th) {
    $playersNumber = "ERROR SERVER";
}
try {
    $GameQ->addServer([
    'type' => 'mta',
    'host' => '185.71.66.80:22003',
    ]);
    $results = $GameQ->process();
    $playersNumber = $results['185.71.66.80:22003']['num_players'];
} catch (\Throwable $th) {
    $playersNumber = "ERROR SERVER";
}?>

<div id="HomePage">
    <div id="hide">
        <h1>NOT SUPPORTED FOR SCREEN UNDER 250PX SIZE</h1>
    </div>
    <header class="header">
        <div class="BLC1">
            <div class="title">
                <div class="main-text">
                    <div class="text"><h1>SkyLine</h1></div>
                    <div class="line"></div>
                </div>
                <div class="sub-text">
                    <h1>An Original MTA Server</h1>
                </div>
            </div>
        </div>
        <div class="BLC2">
            <div class="bloc-info">
                <div class="sub-blc1 sub-blc">
                    <div class="title">
                        <h1>Players Number</h1>
                    </div>
                    <div class="desc">

                        <h1><?php echo $playersNumber;?> PLAYER</h1>
                    </div>
                </div>
                <div class="sub-blc2 sub-blc">
                    <div class="title">
                        <h1>Last Donator</h1>
                    </div>
                    <div class="desc">
                        <h1>Sidk ICHBINYESSINE
                            </h1>
                    </div>
                </div>
                <div class="sub-blc3 sub-blc">
                    <div class="title">
                        <h1>Top Players Join</h1>
                    </div>
                    <div class="desc">
                        <h1>
                        ICHBINYESSINE
                        </h1>
                    </div>
                </div>
                <div class="sub-blc4 sub-blc">
                    <div class="title">
                        <h1>Server State</h1>
                    </div>
                    <div class="desc">
                        <div class="shape"></div>
                        <h1>
                        ONLINE
                        </h1>
                    </div>
                </div>
            </div>
            <div class="follow-us">
                <div class="main-cont">
                    <div class="sub-cont1">
                    </div>
                    <div class="sub-cont2">
                        <div class="text">
                            <h1>Folllow Us</h1>
                        </div>
                        <div class="icons">
                            <div onclick="openFb()" class="mini-ico">
                                <img onclick="openFb()" src="{{ URL::to('/assets/icons/facebook-f-brands.svg') }}" alt="">
                            </div>
                            <div onclick="openIg()" class="mini-ico">
                                <img onclick="openIg()" src="{{ URL::to('/assets/icons/instagram-brands.svg') }}" alt="">

                            </div>
                            <div onclick="openYt()" class="mini-ico">
                                <img onclick="openYt()" src="{{ URL::to('/assets/icons/youtube-brands.svg') }}" alt="">

                            </div>
                            <div onclick="openDs()" class="mini-ico">
                                <img onclick="openDs()" src="{{ URL::to('/assets/icons/discord-brands.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="sub-cont3">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="SEC-1">
        <div id="BLC-1">
            <div class="sub-blc">
                <div class="icon">
                    <img src="{{ URL::to('/assets/icons/laptop-circled.png') }}" alt="">
                </div>
                <div class="text"><h1>More FPS++</h1></div>
            </div>
            <div class="sub-blc">
                <div class="icon">
                    <img src="{{ URL::to('/assets/icons/support-circled.png') }}" alt="">
                </div>
                <div class="text"><h1>24/7 Support</h1></div>
            </div>
            <div class="sub-blc">
                <div class="icon">
                    <img src="{{ URL::to('/assets/icons/joy-circled.png') }}" alt="">
                </div>
                <div class="text"><h1>Strict Roleplay</h1></div>
            </div>
        </div>
        <div id="BLC-2">
            <div class="sub-blc">
                <div class="mini-line">
                    <img src="{{ URL::to('/assets/img/home-page/space-home.png') }}" alt="">
                </div>
                <div class="sub-content">
                    <h1>
                        +150 Registered user
                    </h1>
                </div>
                <div class="mini-line">
                    <img style="transform: rotateX(180deg)" src="{{ URL::to('/assets/img/home-page/space-home.png') }}" alt="">
                </div>
            </div>
            <div class="sub-blc">
                <div class="mini-line">
                    <img src="{{ URL::to('/assets/img/home-page/space-home.png') }}" alt="">
                </div>
                <div class="sub-content">
                    <h1>
                        +70 Purchased car
                    </h1>
                </div>
                <div class="mini-line">
                    <img style="transform: rotateX(180deg)" src="{{ URL::to('/assets/img/home-page/space-home.png') }}" alt="">
                </div>
            </div>
            <div class="sub-blc">
                <div class="mini-line">
                    <img src="{{ URL::to('/assets/img/home-page/space-home.png') }}" alt="">
                </div>
                <div class="sub-content">
                    <h1>
                        +50 Property purchased
                    </h1>
                </div>
                <div class="mini-line">
                    <img style="transform: rotateX(180deg)" src="{{ URL::to('/assets/img/home-page/space-home.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="SEC-2">
        <section id="sub-sec-1">
            <div class="content">
                <div class="text"><h1>Do you want to donate our server ?</h1></div>
                <div onclick="goPaypal()" class="btn">click here</div>
            </div>
        </section>
        <section id="sub-sec-2">
            <div class="title">
                <div class="text">
                    <h1>About SkyLine Rp</h1>
                    <div class="line"></div>
                </div>

            </div>
            <div class="content">
                <div class="desc">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="logo">
                    <img src="{{ URL::to('/assets/img/home-page/logo.png') }}" alt="">
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
                        <img src="{{ URL::to('/assets/img/Banners/BNR-1.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ URL::to('/assets/img/Banners/BNR-2.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ URL::to('/assets/img/Banners/BNR-3.png') }}" alt="">
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
   <!-- <div id="PUB">
        <div class="line"></div>
        <div class="content">
            <h1>©All rights reserved - SkyLine RolePlay - <?php echo date("Y"); ?></h1>
            <h2>Designed and developed by <span id="hightlight" onclick="goYT()">YessineTrigui</span>.</h2>
        </div>
        <div class="line"></div>
    </div>-->
</div>
<script>
    function openFb(){
        window.open('https://facebook.com')
    };
    function openIg(){
        window.open('https://instagram.com')
    };
    function openYt(){
        window.open('https://youtube.com')
    };
    function openDs(){
        window.open('https://discord.com')
    };
    function goPaypal(){
        window.open('https://paypal.com')
    };
    function goYT(){
        window.open('https://yessinetrigui.tn')
    };
    </script>


@endsection
