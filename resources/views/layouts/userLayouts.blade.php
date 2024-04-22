@extends('SL_web.layouts.home')
@section('css-import')
<link rel="stylesheet" href="../../css/navbars.css">
<link rel="stylesheet" href="../../css/user.css">
@endsection
@section('js-import')
<script src="../../js/scripts.js"></script>
<script src="../../js/user.js"></script>
@endsection
@section('pagetitle')
    DasGas News
@endsection
@section('content')
    <div id="user-cont">
        <div class="title">
            <div class="text-cont">
                <div class="text">
                    <h1>@yield('title')</h1>
                </div>
                <div class="line"></div>

        </div>

        </div>
        <div class="user-content">
            @yield('sub-content')
        </div>
    </div>
@endsection
