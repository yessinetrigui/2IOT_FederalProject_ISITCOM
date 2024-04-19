@extends('Staff.Admin.Layouts.app')
@section("title")
room Add
@endsection
@section('content')
<div class="text-center mb-10">
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <label for="" class="text-[0.9rem] font-semibold px-1 block text-red">{{$error}}</label>
    @endforeach
@endif
                    </div>
@if ($room==null)
<form class="space-y-4 md:space-y-6 mx-auto" action="{{route('admin.hotel.manage.rooms.doAdd', ['idHotel'=>$idHotel])}}" method="post"  enctype="multipart/form-data">
@else
<form class="space-y-4 md:space-y-6 mx-auto" action="{{route('admin.hotel.manage.rooms.doUpdate', ['idHotel'=>$idHotel, 'id'=>$id])}}" method="post"  enctype="multipart/form-data">

@endif
    @csrf

    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">room Type</label>
        @if ($room==null)
        <select name="idTypeRoom" id="">
            @foreach ($RoomsTypes as $RoomType)
                <option value="{{$RoomType->id}}">{{$RoomType->name}}</option>
            @endforeach

        </select>
        @else
        <select name="idTypeRoom" id="">
            @foreach ($RoomsTypes as $RoomType)
                @if ($RoomType->id == $room->idTypeRoom)
                <option selected value="{{$RoomType->id}}">{{$RoomType->name}}</option>
                @else
                <option value="{{$RoomType->id}}">{{$RoomType->name}}</option>
                @endif
            @endforeach

        </select>

        @endif
    </div>



    @if ($room==null)
    <input type="submit" class="w-full text-white  font-medium rounded-lg text-sm px-5 py-2.5 text-center  hover:bg-xprimary-500"  style="background:#1636c4;" value="Add">
    @else
    <input type="submit" class="w-full text-white  font-medium rounded-lg text-sm px-5 py-2.5 text-center  hover:bg-xprimary-500"  style="background:#1636c4;" value="Update">

    @endif

</form>



@endsection
