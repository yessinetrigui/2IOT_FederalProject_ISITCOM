@extends('Staff.Admin.Layouts.app')
@section("title")
Offers Add
@endsection
@section('content')

<form action="{{route('admin.configurations.zones.manage.doDelete', ['id'=>$id])}}" method="post">

    @if ($para == "Delete")
    <h1>Confirm Delete for Offer ID: {{$id}}?</h1>
    @else
    <h1>Confirm {{$para}} for Offer ID: {{$id}}?</h1>
    @endif
    @csrf
    <input class="font-xl  text-white font-medium bg-red p-4 my-2" style="background: #880808" value="Confirm" type="submit">
</form>



@endsection
