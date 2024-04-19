@extends('Staff.Admin.Layouts.app')
@section("title")
hotel Add
@endsection
@section('content')
<div class="text-center mb-10">
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <label for="" class="text-[0.9rem] font-semibold px-1 block text-red">{{$error}}</label>
    @endforeach
@endif
                    </div>
@if ($hotel==null)
<form class="space-y-4 md:space-y-6 mx-auto" action="{{route('admin.hotel.manage.doAdd')}}" method="post"  enctype="multipart/form-data">
@else
<form class="space-y-4 md:space-y-6 mx-auto" action="{{route('admin.hotel.manage.doUpdate', ['idHotel'=>$hotel->id])}}" method="post"  enctype="multipart/form-data">

@endif
    @csrf
    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">Hotel Name</label>
        @if ($hotel==null)
        <input  type="text" name="name" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="...." required="">
        @else
        <input value="{{$hotel->name}}" type="text" name="name" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="Flen" required="">
        @endif
    </div>
    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">Hotel Chain</label>
        @if ($hotel==null)
        <select name="idChain" id="">
            @foreach ($chains as $chain)
                <option value="{{$chain->id}}">{{$chain->name}}</option>
            @endforeach

        </select>
        @else
        <select name="idChain" id="">
            @foreach ($chains as $chain)
                @if ($chain->id == $hotel->idChain)
                <option selected value="{{$chain->id}}">{{$chain->name}}</option>
                @else
                <option value="{{$chain->id}}">{{$chain->name}}</option>
                @endif
            @endforeach

        </select>

        @endif
    </div>
    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">Hotel adress</label>
        @if ($hotel==null)
        <input  type="text" name="adress" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="...." required="">
        @else
        <input value="{{$hotel->adress}}" type="text" name="adress" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="Flen" required="">
        @endif
    </div>
    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">Hotel Zone</label>
        @if ($hotel==null)

        <select name="idZone" id="">
            @foreach ($zones as $zone)
                <option value="{{$zone->id}}">{{$zone->name}}</option>
            @endforeach
        </select>
        @else
        <select name="idZone" id="">
            @foreach ($zones as $zone)
                @if ($zone->id == $hotel->idZone)
                <option selected value="{{$zone->id}}">{{$zone->name}}</option>
                @else
                <option value="{{$zone->id}}">{{$zone->name}}</option>
                @endif
            @endforeach

        </select>


        @endif
    </div>
    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">Hotel nombre Stars</label>
        @if ($hotel==null)
        <input  type="text" name="nbStars" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="...." required="">
        @else
        <input value="{{$hotel->nbStars}}" type="text" name="nbStars" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="Flen" required="">
        @endif
    </div>
    @if ($hotel==null)
    <div>
        <label for=""  class="block mb-2 text-sm font-bold text-gray-900  text-dark">Hotel Configuration Rooms</label>
        @foreach ($TypesRooms as $TypeRoom)
            <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">{{$TypeRoom->name}}</label>
            <input  type="text" name="{{$TypeRoom->id}}" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500">
            <hr>
        @endforeach

    </div>
    @endif

    @if ($hotel==null)
    <input type="submit" class="w-full text-white  font-medium rounded-lg text-sm px-5 py-2.5 text-center  hover:bg-xprimary-500"  style="background:#1636c4;" value="Add">
    @else
    <input type="submit" class="w-full text-white  font-medium rounded-lg text-sm px-5 py-2.5 text-center  hover:bg-xprimary-500"  style="background:#1636c4;" value="Update">

    @endif

</form>



@endsection
