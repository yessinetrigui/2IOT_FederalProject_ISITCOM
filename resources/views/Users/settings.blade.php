@extends('SL_web.layouts.userLayouts')
@section('title')
    Settings
@endsection
@section('sub-content')
    <div id="settings">
        <form id="set" action="" method="POST" onsubmit="false">
            <div class="sec" id="sec1">
                <label id="title">Choose Your Theme</label>
                <div id="answer">
                    <input type="radio" name="theme" id="">
                    <label>Dark Mode</label>
                </div>
                <div id="answer">
                    <input type="radio" name="theme" id="">
                    <label>Light Mode</label>
                </div>
            </div>
            <div class="sec" id="sec2">
                <label id="title">Choose Your Profile Privacy</label>
                <div id="answer">
                    <input type="radio" name="prof_priv" id="">
                    <label>Public</label>
                </div>
                <div id="answer">
                    <input type="radio" name="prof_priv" id="">
                    <label>Private</label>
                </div>
                
                
            </div>
            <div class="sec" id="sec3">
                <label id="title">Choose Your Language</label>
                <div id="answer">
                    <input type="radio" name="lang" id="">
                    <label>English</label>
                </div>
                <div id="answer">
                    <input type="radio" name="lang" id="">
                    <label>French</label>
                </div>
            </div>
            <input id="send" type="submit" value="Apply">    
        </form>
            </div>
@endsection
