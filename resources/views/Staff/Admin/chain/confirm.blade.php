@extends('Staff.Admin.Layouts.app')
@section("title")
chaine Add
@endsection
@section('content')

@if ($para == "Delete")
<form action="{{route('admin.chain.manage.doDelete', ['id'=>$id])}}" method="post">
    @else
<form action="{{route('admin.chain.manage.doStop', ['id'=>$id])}}" method="post">
    @endif
    @if ($para == "Delete")
    <h1>Confirm Delete for Chain ID: {{$id}}?</h1>
    @else
    <h1>Confirm {{$para}} for Chain ID: {{$id}}?</h1>
    @endif
    @csrf
    <input class="font-xl  text-white font-medium bg-red p-4 my-2" style="background: #880808" value="Confirm" type="submit">
</form>



@endsection
