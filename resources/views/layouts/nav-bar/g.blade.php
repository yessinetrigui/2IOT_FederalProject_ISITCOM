<div class="main-nav">
<div class="sub-nav_P1">
    <div class="logo">
        <img src="{{ URL::to('/assets/img/logo-small.png') }}" alt="">
    </div>
</div>
<!-- 
<div class="ph-sub-navGuest">
    <img src="{{ URL::to('/assets/icons/menu.svg') }}" alt="">
</div>
 -->
<div class="sub-navGuest">
    <div class="btn-space">
        <div onclick="goLogin()" class="btn" id="loginuser">
            <div class="ico">
                <img src="http://localhost:8000/assets/icons/user-regular.svg" alt="">
            </div>
            <div class="text-btn">
                <a href="{{route('user.login')}}">Login</a>
            </div>
        </div>
</div>
</div>
</div>
<script>
    function goLogin(){
        window.location.assign("/login");
    }
</script>