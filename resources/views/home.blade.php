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
                    <p>"Welcome to DasGas Auto, your trusted destination for quality vehicles since 1992. With over three decades of experience in the automotive industry, we pride ourselves on offering exceptional service and a wide selection of vehicles to meet your needs.

Established in 1992, DasGas Auto has grown to become a prominent name in the car dealership business, with five branches strategically located to serve our valued customers effectively. Our commitment to integrity, reliability, and customer satisfaction sets us apart in the competitive automotive market.

At DasGas Auto, we believe in making your car-buying experience smooth, transparent, and enjoyable. Whether you're in the market for a new or pre-owned vehicle, our knowledgeable staff is dedicated to helping you find the perfect match. From compact cars to luxury SUVs, we have a diverse inventory to cater to various preferences and budgets.

Beyond sales, our services extend to financing options, trade-ins, and comprehensive vehicle maintenance to ensure your investment continues to deliver optimal performance for years to come.

Thank you for considering DasGas Auto for your automotive needs. We look forward to serving you at any of our five convenient locations and making your car-buying journey a memorable one.".</p>
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
                        <h1>The Difference with Agence Borni</h1>
                    </div>
                    <div class="line"></div>
                    <div class="desc">
                        <p>We're not just any car rental agency. We work every day to make booking your car rental as simple as possible, with a customer service team available to assist you when you need it.</p>

                    </div>
                </div>
                <div class="SUB-BLC">
                    <div class="text">
                        <h1>With Agence Borni, you'll enjoy:</h1>
                    </div>
                    <div class="line"></div>
                    <div class="desc">
                        <p>Multiple rental locations across the country
Wide range of high-quality vehicles
World-class customer service from our team
Competitive rates and superior service
                        </p>
                    </div>
                </div>
            </div>
            <div class="BLC" id="BLC2">
                <div class="SUB-BLC">
                    <div class="text">
                        <h1>Recognized for several years</h1>
                    </div>
                    <div class="line"></div>
                    <div class="desc">
                        <p>  Agence Borni is your one-stop agency for rental cars, comparing prices from the best rental agencies in the country, ensuring you find the vehicle best suited to your needs. </p>

                    </div>
                </div>
                <div class="SUB-BLC">
                    <div class="text">
                        <h1>Flexibility in cancellation or reservation modification</h1>
                    </div>
                    <div class="line"></div>
                    <div class="desc">
                        <p>You can modify or cancel your car rental reservation through our website messaging or by phone. We have extended our cancellation policy (before 48 hours from the pick-up date) free of charge. To extend your car rental, you can call  agence Borni at +216 55 000 111 to extend your reservation.</p>
                    </div>
                </div>
            </div>
    </section>
  
</div>



@endsection
