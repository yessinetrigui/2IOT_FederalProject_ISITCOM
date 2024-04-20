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
<div id="PROF">
    <div class="PIC_CONT">
        <img src="{{ URL::to('/assets/home/pg1.png') }}" alt="">
        <div class="eclp">
            <img src="{{ URL::to('/assets/home/pg1.png') }}" alt="">
        </div>
        <h1> </h1>
    </div>
    <div class="cont" id="P1">
        <div class="title">
            <div class="txt"><h1>Career</h1></div>
            <div class="line"></div>
        </div>
        <div class="content">
            <div class="sub-cnt">
                <div class="sub-title"><h1>Total Kills</h1></div>
                <div class="sub-content">
                    <div class="txt">DT[0]['TotalKill']}}</div>
                    <div class="icon"><img src="{{ URL::to('/assets/icons/skull-solid.svg') }}" alt=""></div>
                </div>

            </div>
            <div class="sub-cnt">
                <div class="sub-title"><h1>Total Death</h1></div>
                <div class="sub-content">
                    <div class="txt">DT[0]['TotalDeath']}}</div>
                    <div class="icon"><img src="{{ URL::to('/assets/icons/skull-crossbones-solid.svg') }}" alt=""></div>
                </div>

            </div>
            <div class="sub-cnt">
                <div class="sub-title"><h1>Total PlayTime</h1></div>
                <div class="sub-content">
                    <div class="txt">DT[0]['TotalPlayTime']}}</div>
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
                    <div class="txt">Rank</div>
                </div>
                <div class="value">DT[0]['UserRank']}}</div>
            </div>
            <div class="sub">
                <div class="key">
                    <div class="icon"><img src="{{ URL::to('/assets/icons/skull-crossbones-solid.svg') }}" alt=""></div>
                    <div class="txt">Cash</div>
                </div>
                <div class="value">$DT[0]['Cash']}}</div>
            </div>
            <div class="sub">
                <div class="key">
                    <div class="icon"><img src="{{ URL::to('/assets/icons/skull-crossbones-solid.svg') }}" alt=""></div>
                    <div class="txt">Durty Cash</div>
                </div>
                <div class="value">$DT[0]['DurtyCash']}}</div>
            </div>
            <div class="sub">
                <div class="key">
                    <div class="icon"><img src="{{ URL::to('/assets/icons/skull-crossbones-solid.svg') }}" alt=""></div>
                    <div class="txt">Bank</div>
                </div>
                <div class="value">$DT[0]['BankCash']}}</div>
            </div>
        </div>
    </div>
    <div class="cont CARS" id="slide">
        <div class="title">
            <div class="txt"><h1>Cars</h1></div>
            <div class="line"></div>
        </div>
        <div class="content">
            <div class="sub">
                <div class="key">
                    <div class="icon"><img src="{{ URL::to('/assets/icons/skull-crossbones-solid.svg') }}" alt=""></div>
                    <div class="txt">Owned Cars</div>
                </div>
                <div class="value">DT[0]['OwnedCars']}}</div>
            </div>
            <div class="sub">
                <div class="key">
                    <div class="icon"><img src="{{ URL::to('/assets/icons/skull-crossbones-solid.svg') }}" alt=""></div>
                    <div class="txt">Owned Garage</div>
                </div>
                <div class="value">DT[0]['OwnedGarage']}}</div>
            </div>
            <div class="sub">
                <div class="key">
                    <div class="icon"><img src="{{ URL::to('/assets/icons/skull-crossbones-solid.svg') }}" alt=""></div>
                    <div class="txt">Last Buyed Car</div>
                </div>
                <div class="value">DT[0]['lastBuyedCar']}}</div>
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
    <div class="cont" id="slide">
        <div class="title">
            <div class="txt"><h1>Property</h1></div>
            <div class="line"></div>
        </div>
        <div class="content">
            <div class="sub">
                <div class="key">
                    <div class="icon"><img src="{{ URL::to('/assets/icons/skull-crossbones-solid.svg') }}" alt=""></div>
                    <div class="txt">Owned Property</div>
                </div>
                <div class="value">DT[0]['OwnedProperty']}}</div>
            </div>

            <div class="sub">
                <div class="key">
                    <div class="icon"><img src="{{ URL::to('/assets/icons/skull-crossbones-solid.svg') }}" alt=""></div>
                    <div class="txt">Last Buyed Property</div>
                </div>
                <div class="value">DT[0]['lastBuyedProperty']}}</div>
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
    <div class="cont" id="slide">
        <div class="title">
            <div class="txt"><h1>Faction</h1></div>
            <div class="line"></div>
        </div>
        <div class="content">
            <div class="sub">
                <div class="key">
                    <div class="icon"><img src="{{ URL::to('/assets/icons/skull-crossbones-solid.svg') }}" alt=""></div>
                    <div class="txt">Faction Name</div>
                </div>
                <div class="value">DT[0]['FactionName']}}</div>
            </div>
            <div class="sub">
                <div class="key">
                    <div class="icon"><img src="{{ URL::to('/assets/icons/skull-crossbones-solid.svg') }}" alt=""></div>
                    <div class="txt">Faction Type</div>
                </div>
                <div class="value">DT[0]['FactionType']}}</div>
            </div>
            <div class="sub">
                <div class="key">
                    <div class="icon"><img src="{{ URL::to('/assets/icons/skull-crossbones-solid.svg') }}" alt=""></div>
                    <div class="txt">Number Members</div>
                </div>
                <div class="value">DT[0]['FactionMembersNumber']}}</div>
            </div>
            <div class="sub">
                <div class="key">
                    <div class="icon"><img src="{{ URL::to('/assets/icons/skull-crossbones-solid.svg') }}" alt=""></div>
                    <div class="txt">Faction Number cars</div>
                </div>
                <div class="value">DT[0]['FactionCarsNumber']}}</div>
            </div>
        </div>
    </div>
    <div class="cont" id="slide">
        <div class="title">
            <div class="txt"><h1>Entreprise</h1></div>
            <div class="line"></div>
        </div>
        <div class="content">
            <div class="sub">
                <div class="key">
                    <div class="icon"><img src="{{ URL::to('/assets/icons/skull-crossbones-solid.svg') }}" alt=""></div>
                    <div class="txt">Entreprise Name</div>
                </div>
                <div class="value">DT[0]['EntrepriseName']}}</div>
            </div>
            <div class="sub">
                <div class="key">
                    <div class="icon"><img src="{{ URL::to('/assets/icons/skull-crossbones-solid.svg') }}" alt=""></div>
                    <div class="txt">Entreprise details</div>
                </div>
                <div class="value">DT[0]['EntrepriseDetails']}}</div>
            </div>
            <div class="sub">
                <div class="key">
                    <div class="icon"><img src="{{ URL::to('/assets/icons/skull-crossbones-solid.svg') }}" alt=""></div>
                    <div class="txt">Workers Members</div>
                </div>
                <div class="value">DT[0]['EntrepriseMembersNumber']}}</div>
            </div>
            <div class="sub">
                <div class="key">
                    <div class="icon"><img src="{{ URL::to('/assets/icons/skull-crossbones-solid.svg') }}" alt=""></div>
                    <div class="txt">Cash In Vault</div>
                </div>
                <div class="value">DT[0]['EntrepriseCash']}}</div>
            </div>
        </div>
    </div>
</div>
@endsection
