@extends('Staff.AgencyManager.Layouts.app')
@section("title")
offer Add
@endsection
@section('content')
<div class="text-center mb-10">
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <label for="" class="text-[0.9rem] font-semibold px-1 block text-red">{{$error}}</label>
    @endforeach
@endif

                    </div>
@if ($offer==null)
<form class="space-y-4 md:space-y-6 mx-auto" action="{{route('AgencyManager.offer.manage.doAdd')}}" method="post"  enctype="multipart/form-data">
@else
<form class="space-y-4 md:space-y-6 mx-auto" action="{{route('AgencyManager.configurations.offer.manage.doUpdate', ['id'=>$offer->id])}}" method="post"  enctype="multipart/form-data">

@endif
    @csrf
    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">Choose Car: </label>
        @if ($offer==null)
        <select name="carId" id="">
            @foreach ($cars as $car)
                <option value="{{$car->id}}">{{$car->model . " - " . $car->brand}}</option>
            @endforeach

        </select>
        @else
        <select name="carId" id="">
            @foreach ($cars as $offer)
                @if ($car->id == $offer->agencyId)
                <option value="{{$car->id}}">{{$car->model . " - " . $car->brand}}</option>
                @else
                <option value="{{$car->id}}">{{$car->model . " - "  . $car->brand}}</option>
                @endif
            @endforeach

        </select>

        @endif
    </div>

    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">price</label>
        @if ($offer==null)
        <input  type="text" name="price" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="Write The Name Of offere here" required="">
        @else
        <input value="{{$offer->price}}" type="text" name="price" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="Flen" required="">
        @endif
    </div>



    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">Start Date</label>
        @if ($offer==null)
        <input  type="date" name="startDate" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="Write The Name Of offere here" required="">
        @else
        <input value="{{$offer->startDate}}" type="date" name="startDate" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="Flen" required="">
        @endif
    </div>


    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">End Date</label>
        @if ($offer==null)
        <input  type="date" name="endDate" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="Write The Name Of offere here" required="">
        @else
        <input value="{{$offer->endDate}}" type="date" name="endDate" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="Flen" required="">
        @endif
    </div>


    @if ($offer==null)
    <input type="submit" class="w-full text-white  font-medium rounded-lg text-sm px-5 py-2.5 text-center  hover:bg-xprimary-500"  style="background:#1636c4;" value="Add">
    @else
    <input type="submit" class="w-full text-white  font-medium rounded-lg text-sm px-5 py-2.5 text-center  hover:bg-xprimary-500"  style="background:#1636c4;" value="Update">

    @endif

</form>



@endsection
