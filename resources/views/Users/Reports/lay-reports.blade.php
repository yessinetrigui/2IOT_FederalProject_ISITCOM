@extends('SL_web.layouts.userLayouts')
@section('title')
    Reports
@endsection
@section('sub-content')
    <div id="REP">
        <div class="cont" id="menu">
            <ul>
            @if(url()->current() == route('user.reports'))
                    <a href="{{route('user.reports')}}" class="active">My Reports</a>
            @else
                <a href="{{route('user.reports')}}">My Reports</a>

            @endif

            @if(url()->current() == route('user.report_create'))
            <a  href="{{route('user.report_create')}}"  class="active">New Report</a>
            @else
            <a  href="{{route('user.report_create')}}">New Report</a>
            @endif
            </ul>
        </div>
        <div class="cont" id="use">
            @yield('rep-content')
        </div>
    </div>
@endsection
