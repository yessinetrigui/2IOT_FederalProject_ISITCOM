@extends('Staff.Admin.Layouts.app')
@section("title")
RoomPrice Add
@endsection
@section('content')
<div class="text-center mb-10">
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <label for="" class="text-[0.9rem] font-semibold px-1 block text-red">{{$error}}</label>
    @endforeach
@endif
                    </div>
@if ($RoomPrice==null)
<form class="space-y-4 md:space-y-6 mx-auto" action="{{route('admin.hotel.manage.rooms.prices.doAdd', ['idHotel'=>$idHotel])}}" method="post"  enctype="multipart/form-data">
@else
<form class="space-y-4 md:space-y-6 mx-auto" action="{{route('admin.hotel.manage.rooms.prices.doUpdate', ['idHotel'=>$idHotel, 'id'=>$id])}}" method="post"  enctype="multipart/form-data">

@endif
    @csrf

    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">RoomPrice Chain</label>
        @if ($RoomPrice==null)
        <select name="idTypeRoom" id="">
            @foreach ($RoomsTypes as $RoomType)
                <option value="{{$RoomType->id}}">{{$RoomType->name}}</option>
            @endforeach

        </select>
        @else
        <select name="idTypeRoom" id="">
            @foreach ($RoomsTypes as $RoomType)
                @if ($RoomType->id == $RoomPrice->idTypeRoom)
                <option selected value="{{$RoomType->id}}">{{$RoomType->name}}</option>
                @else
                <option value="{{$RoomType->id}}">{{$RoomType->name}}</option>
                @endif
            @endforeach

        </select>        @endif
    </div>
    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">RoomPrice price</label>
        @if ($RoomPrice==null)
        <input  type="text" name="price" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="...." required="">
        @else
        <input value="{{$RoomPrice->price}}" type="text" name="price" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="Flen" required="">
        @endif
    </div>
    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">RoomPrice startDate</label>
        @if ($RoomPrice==null)
        <input  type="date" name="startDate" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="...." required="">
        @else
        <input value="{{$RoomPrice->startDate}}" type="date" name="startDate" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="Flen" required="">
        @endif
    </div>
    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">RoomPrice endDate</label>
        @if ($RoomPrice==null)
        <input  type="date" name="endDate" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="...." required="">
        @else
        <input value="{{$RoomPrice->endDate}}" type="date" name="endDate" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="Flen" required="">
        @endif
    </div>


    @if ($RoomPrice==null)
    <input type="submit" class="w-full text-white  font-medium rounded-lg text-sm px-5 py-2.5 text-center  hover:bg-xprimary-500"  style="background:#1636c4;" value="Add">
    @else
    <input type="submit" class="w-full text-white  font-medium rounded-lg text-sm px-5 py-2.5 text-center  hover:bg-xprimary-500"  style="background:#1636c4;" value="Update">

    @endif

</form>



@endsection
