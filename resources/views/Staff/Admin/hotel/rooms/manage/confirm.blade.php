@extends('Staff.Admin.Layouts.app')
@section("title")
hotel Add
@endsection
@section('content')

@if ($para == "Delete")
<form action="{{route('admin.hotel.manage.rooms.doDelete', ['idHotel'=>$idHotel, 'id'=>$id])}}" method="post">
    @else
<form action="{{route('admin.hotel.manage.rooms.doStop', ['idHotel'=>$idHotel, 'id'=>$id])}}" method="post">
    @endif
    <h1>Confirm {{$para}} for Room ID: {{$idHotel}}?</h1>

    @csrf
    <input class="font-xl  text-white font-medium bg-red p-4 my-2" style="background: #880808" value="Confirm" type="submit">
</form>
@endsection
