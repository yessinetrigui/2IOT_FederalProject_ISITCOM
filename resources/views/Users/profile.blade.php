@extends('layouts.home')
@section('css-import')
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/profile.css">
<link rel="stylesheet" href="css/user.css">
@endsection

@section('js-import')
<script src="js/scripts.js"></script>
@endsection

@section('pagetitle')
    SkyLine ~ Profile
@endsection

@section('content')
<div class="triangle"></div>
<img src="bimg.jpg" alt="" class="image">
<div id="PROF">
<div class="PIC_CONT position-relative">
    <img src="{{ URL::to('/assets/home/pg1.png') }}" alt="">
   
    <div class="text-overlay bottom">
    <h6 class="dancing-script" style="color: white; font-size: 60px; font-weight: lighter;"><strong <strong style="color: white;">Agence Borni</strong></h6>
</div>

    <div class="eclp">
        <img src="{{ URL::to('/assets/home/pg1.png') }}" alt="">
    </div>
</div>

    <div class="cont" id="P1">
        <div class="title">
            <div class="txt"><h1>Career</h1></div>
            <div class="line"></div>
        </div>
        <div class="content">
            <div class="sub-cnt">
                <div class="sub-title"><h1>since</h1></div>
                <div class="sub-content">
                    <div class="txt">1998</div>
                    <div class="icon"><img src="{{ URL::to('/assets/icons/skull-solid.svg') }}" alt=""></div>
                </div>

            </div>
            <div class="sub-cnt">
                <div class="sub-title"><h1>Total clients</h1></div>
                <div class="sub-content">
                    <div class="txt">+1445 clients</div>
                    <div class="icon"><img src="{{ URL::to('/assets/icons/skull-crossbones-solid.svg') }}" alt=""></div>
                </div>

            </div>
            <div class="sub-cnt">
                <div class="sub-title"><h1>Branches</h1></div>
                <div class="sub-content">
                    <div class="txt">5</div>
                    <div class="icon"><img src="{{ URL::to('/assets/icons/clock-regular.svg') }}" alt=""></div>
                </div>

            </div>
        </div>
    </div>
    <div class="cont" id="slide">
        <div class="title">
            <div class="txt"><h1>Info</h1></div>
            <div class="line"></div>
        </div>
        <div class="content">
            <div class="sub">
                <div class="key">
                    <div class="icon"><img src="{{ URL::to('/assets/icons/skull-crossbones-solid.svg') }}" alt=""></div>
                    <div class="txt">location</div>
                </div>
                <div class="value">Tunis,Sousse,Sfax,Zaghouan,Mahdia </div>
            </div>
            <div class="sub">
                <div class="key">
                    <div class="icon"><img src="{{ URL::to('/assets/icons/skull-crossbones-solid.svg') }}" alt=""></div>
                    <div class="txt">whatsApp</div>
                </div>
                <div class="value">+216 55 000 111</div>
            </div>
            <div class="sub">
                <div class="key">
                    <div class="icon"><img src="{{ URL::to('/assets/icons/skull-crossbones-solid.svg') }}" alt=""></div>
                    <div class="txt">phone </div>
                </div>
                <div class="value">+216 55 000 112</div>
            </div>
            <div class="sub">
                <div class="key">
                    <div class="icon"><img src="{{ URL::to('/assets/icons/skull-crossbones-solid.svg') }}" alt=""></div>
                    <div class="txt">email</div>
                </div>
                <div class="value">Bourniagence@gmail.com</div>
            </div>
        </div>
    </div>
   <div class="cont CARS" id="slide">
    <div class="title">
        <div class="txt"><h1>OFFERS</h1></div>
        <div class="line"></div>
    </div>

    <div class="block">
    <h2>Mercedes-Maybach S 680</h2>
    <img src="{{ asset('assets/home/car1.jpeg') }}" alt="">
</div>

<div class="block">
    <h2>BMW I7</h2>
    <img src="{{ asset('assets/home/car2.jpeg') }}" alt="">
</div>

<div class="block">
    <h2>Block 3</h2>
    <img src="{{ asset('assets/home/car3.jpeg') }}" alt="">
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
  
</div>
@endsection
