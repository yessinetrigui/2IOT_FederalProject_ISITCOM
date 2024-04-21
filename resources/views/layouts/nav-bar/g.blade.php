<div class="main-nav">
 <div class="UserNav">
    <div class="sub-nav-logo">
        <div class="logo-cont">
            <img src="{{ URL::to('/assets/home/logo.png') }}" alt="">
        </div>
    </div>
    <div class="ph-sub-navGuest">
        <img src="{{ URL::to('/assets/icons/menu.svg') }}" alt="">
    </div>
    <div class="sub-nav-links">
        <div class="part1">
            <ul class="items">
                <li class="item" id="it1">
                <a href="#">
        

                        <div class="ico"><img src="{{ URL::to('/assets/icons/home-solid.svg') }}" alt=""></div>
                        <div class="txt">Home</div>
                        @if(url()->current() == route('user.home'))
                        <div class="line" style="width: 100% !important;"></div>
                        @else
                        <div class="line"></div>
                        @endif
                    </a>
                </li>
                <li class="item" id="it2">
                <a href="#">
                        <div class="ico"><img src="{{ URL::to('/assets/icons/university-solid.svg') }}" alt=""></div>
                        <div class="txt">News</div>
                        @if(url()->current() == route('user.news'))
                        <div class="line" style="width: 100%;"></div>
                        @else
                        <div class="line"></div>
                        @endif                    </a>
                </li>
                <li class="item" id="it3">
                <a href="#">
                        <div class="ico"><img src="{{ URL::to('/assets/icons/calendar-alt-regular.svg') }}" alt=""></div>
                        <div class="txt">Events</div>
                        @if(url()->current() == route('user.news'))
                        <div class="line" style="width: 100%;"></div>
                        @else
                        <div class="line"></div>
                        @endif                    </a>
                </li>
                <li class="item" id="it4">
                <a href="#">
                        <div class="ico"><img src="{{ URL::to('/assets/icons/rules.svg') }}" alt=""></div>
                        <div class="txt">Rules</div>
                        @if(url()->current() == route('user.news'))
                        <div class="line" style="width: 100%;"></div>
                        @else
                        <div class="line"></div>
                        @endif
                    </a>
                </li>
                
            </ul>
        </div>
        <div class="part2">
            <a href="#" class="btn">
                    <h1 class="txt">Download</h1>
                    <h1 class="txt">Launcher</h1>
            </a>
        </div>
    </div>
    <div class="sub-nav-notiprof">
        <div class="part1">
            <img src="{{ URL::to('/assets/icons/bell-regular.svg') }}" alt="">
            <div class="num">0</div>
        </div>
        <div class="part2">
            @if(url()->current() == route('user.news'))
            <img class="running" style="box-shadow: #b10dc9 0px 0px 2px 4px;" src="{{ URL::to('/assets/img/profile.jpg') }}" alt="">
            @else
            <img src="{{ URL::to('/assets/img/profile.jpg') }}" alt="">
            @endif
        </div>
    </div>
</div>
<div class="drop-mobile">
    <div id="BLC1">
        <div class="part1">
            ✘
        </div>
        <div class="part2">
            <img src="{{ URL::to('/assets/img/profile.jpg') }}" alt="">
        </div>
        <div class="box">
            <ul>
                <li>
                <a href="#">
                        <div class="ico"><img src="{{ URL::to('/assets/icons/user-regular.svg') }}" alt=""></div>
                        <div class="txt">My Profile</div>
    
                    </a>
                </li>
                <li>
                <a href="#">
                        <div class="ico"><img src="{{ URL::to('/assets/icons/bug-solid.svg') }}" alt=""></div>
                        <div class="txt">Reports</div>
    
                    </a>
                </li>
               <!-- <li>
                    <a href="routeuser.settings'">
                        <div class="ico"><img src="{{ URL::to('/assets/icons/edit-solid.svg') }}" alt=""></div>
                        <div class="txt">Settings</div>
    
                    </a>
                </li>-->
                <li>
                <a href="#">
                        <div class="ico"><img src="{{ URL::to('/assets/icons/question-circle-regular.svg') }}" alt=""></div>
                        <div class="txt">FAQ</div>
    
                    </a>
                </li>
                <li>
                <a href="#">
                        <div class="ico"><img src="{{ URL::to('/assets/icons/sign-out-alt-solid.svg') }}" alt=""></div>
                            <div class="txt">Logout</div>
        
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div id="BLC2">
        <ul class="items">
            <li class="item" id="it1">
            <a href="#">
                    <div class="ico"><img src="{{ URL::to('/assets/icons/home-solid.svg') }}" alt=""></div>
                    <div class="txt">Home</div>
                </a>
            </li>
            <li class="item" id="it2">
            <a href="#">
                    <div class="ico"><img src="{{ URL::to('/assets/icons/university-solid.svg') }}" alt=""></div>
                    <div class="txt">News</div>
                </a>
            </li>
            <li class="item" id="it3">
            <a href="#">
                    <div class="ico"><img src="{{ URL::to('/assets/icons/calendar-alt-regular.svg') }}" alt=""></div>
                    <div class="txt">Events</div>
                </a>
            </li>
            <li class="item" id="it4">
            <a href="#">
                    <div class="ico"><img src="{{ URL::to('/assets/icons/rules.svg') }}" alt=""></div>
                    <div class="txt">Rules</div>
                </a>
            </li>
            
        </ul>
    </div>
</div>
</div>
<div class="drop-pc">
    <ul>
        <li>
        <a href="#">
                <div class="ico"><img src="{{ URL::to('/assets/icons/user-regular.svg') }}" alt=""></div>
                <div class="txt">My Profile</div>

            </a>
        </li>
        <li>
        <a href="#">
                <div class="ico"><img src="{{ URL::to('/assets/icons/bug-solid.svg') }}" alt=""></div>
                <div class="txt">Reports</div>

            </a>
        </li>
       <!-- <li>
            <a href="route'user.settings'">
                <div class="ico"><img src="{{ URL::to('/assets/icons/edit-solid.svg') }}" alt=""></div>
                <div class="txt">Settings</div>

            </a>
        </li>-->
        <li>
            <a href="#">
                <div class="ico"><img src="{{ URL::to('/assets/icons/question-circle-regular.svg') }}" alt=""></div>
                <div class="txt">FAQ</div>

            </a>
            </li>
        <li>
        <a href="#">
                    <div class="ico"><img src="{{ URL::to('/assets/icons/sign-out-alt-solid.svg') }}" alt=""></div>
                    <div class="txt">Logout</div>

                </a>
                </li>
    </ul>
</div>

<div class="drop-pc-notif">
<h1>Notifications</h1>
<h2>You don't have any Notification.</h2>
</div>