@extends('SL_web.Users.Reports.lay-reports')
@section('rep-content')
<div class="AddReport">
    <form action="{{route('user.report_store')}}" method="POST">
        @csrf
        <div class="controll"> 
            <h1>Create Report:</h1>
        </div>
        <div class="message">
            <textarea name="RepDesc" id="" style="resize: none;" cols="30" rows="20">Write Your Report Here ....</textarea>
        </div>
        <div class="controll">
            <input type="submit" value="Send Report">
            <input type="reset" value="Reset Report">
        </div>
    </form>
</div>
@endsection