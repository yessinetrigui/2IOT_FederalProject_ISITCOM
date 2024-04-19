@extends('Staff.Admin.Layouts.app')
@section("title")
hotel Add
@endsection
@section('content')

@if ($para == "Delete")
<form action="{{route('admin.hotel.manage.doDelete', ['idHotel'=>$idHotel])}}" method="post">
    @else
<form action="{{route('admin.hotel.manage.doStop', ['idHotel'=>$idHotel])}}" method="post">
    @endif
    @if ($para == "Delete")
    <h1>Confirm Delete for hotel ID: {{$idHotel}}?</h1>
    @else
    <h1>Confirm {{$para}} for hotel ID: {{$idHotel}}?</h1>
    @endif
    @csrf
    <input class="font-xl  text-white font-medium bg-red p-4 my-2" style="background: #880808" value="Confirm" type="submit">
</form>
@endsection
