@extends('Staff.Admin.Layouts.app')
@section("title")
ExtraCharge Add
@endsection
@section('content')

@if ($para == "Delete")
<form action="{{route('admin.hotel.manage.extracharges.doDelete', ['id'=>$id, 'idHotel'=>$idHotel])}}" method="post">
    @else
<form action="{{route('admin.hotel.manage.extracharges.doStop', ['id'=>$id, 'idHotel'=>$idHotel])}}" method="post">
    @endif
    @if ($para == "Delete")
    <h1>Confirm Delete for ExtraCharge ID: {{$id}}?</h1>
    @else
    <h1>Confirm {{$para}} for ExtraCharge ID: {{$id}}?</h1>
    @endif
    @csrf
    <input class="font-xl  text-white font-medium bg-red p-4 my-2" style="background: #880808" value="Confirm" type="submit">
</form>



@endsection
