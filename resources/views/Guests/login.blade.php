<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login DasGas</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="lg.ico" type="image/x-icon"></head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

<body>
<div class="background-image">
        <img src="{{ URL::to('/assets/home/bi.png') }}" alt="">
 </div>
    <div id="hide">
        <h1>NOT SUPPORTED FOR SCREEN UNDER 250PX SIZE</h1>
    </div>
    <div class="main-cont">
        <div class="sub-cont" id="form">

            <div class="part">
                <div class="txt">
                    <h1>Login</h1>

                    <div class="line"></div>
                </div>
            </div>
            <div class="part">
                    <form class="form" action="" method="post">
                        @csrf
                        <div class="user">
                            <label>Username</label>
                            <input type="text" name="user" id="user" required>
                        </div>
                        <div class="pass">
                            <label>Password</label>
                            <input type="password" name="pass" id="pass" required>
                        </div>
                        <div class="rmb">
                            <input type="checkbox" name="rmb" id="">
                            <h1>Rmember Me ?</h1>
                        </div>
                        <div class="login">
                            <input id="login" type="submit" value="Login">
                            <a href="#">Forget Password ?</a>
                        </div>
                    </form>
            </div>
            <div class="part" id="links-SM">
                <div class="title">
                    <h1>Follow us on</h1>
                </div>
                <div class="icos">
                    <div class="line"></div>
                    <div class="icons">
                        <img onclick="openFb()" style="width: 7.5%;" src="{{ URL::to('/assets/icons/facebook-f-brands.svg') }}" alt="">
                        <img onclick="openIg()" src="{{ URL::to('/assets/icons/instagram-brands.svg') }}" alt="">
                        <img onclick="openYt()" src="{{ URL::to('/assets/icons/youtube-brands.svg') }}" alt="">
                        <img onclick="openDs()" src="{{ URL::to('/assets/icons/discord-brands.svg') }}" alt="">
                    </div>
                    <div class="line"></div>
                </div>
            </div>
        </div>
        <div class="sub-cont">
            <img src="{{ URL::to('/assets/home/imglog.png') }}" alt="">
        </div>
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
    </script>
</body>
</html>
