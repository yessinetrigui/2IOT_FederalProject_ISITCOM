@extends('Staff.Admin.Layouts.app')
@section("title")
offre Add
@endsection
@section('content')
<div class="text-center mb-10">
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <label for="" class="text-[0.9rem] font-semibold px-1 block text-red">{{$error}}</label>
    @endforeach
@endif
                    </div>
@if ($offre==null)
<form class="space-y-4 md:space-y-6 mx-auto" action="{{route('admin.hotel.manage.offers.doAdd', ['idHotel'=>$idHotel])}}" method="post"  enctype="multipart/form-data">
@else
<form class="space-y-4 md:space-y-6 mx-auto" action="{{route('admin.hotel.manage.offers.doUpdate', ['idHotel'=>$idHotel, 'id'=>$id])}}" method="post"  enctype="multipart/form-data">

@endif
    @csrf

    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">offre Name</label>
        @if ($offre==null)
        <select name="idOffre" id="">
            @foreach ($OffersSyS as $OfferSyS)
                <option value="{{$OfferSyS->id}}">{{$OfferSyS->name}}</option>
            @endforeach

        </select>
        @else
        <select name="idOffre" id="">
            @foreach ($OffersSyS as $OfferSyS)
                @if ($OfferSyS->id == $offre->idOffre)
                <option selected value="{{$OfferSyS->id}}">{{$OfferSyS->name}}</option>
                @else
                <option value="{{$OfferSyS->id}}">{{$OfferSyS->name}}</option>
                @endif
            @endforeach

        </select>        @endif
    </div>
    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">offre price</label>
        @if ($offre==null)
        <input  type="text" name="price" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="...." required="">
        @else
        <input value="{{$offre->price}}" type="text" name="price" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="Flen" required="">
        @endif
    </div>
    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">offre startDate</label>
        @if ($offre==null)
        <input  type="date" name="startDate" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="...." required="">
        @else
        <input value="{{$offre->startDate}}" type="date" name="startDate" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="Flen" required="">
        @endif
    </div>
    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">offre endDate</label>
        @if ($offre==null)
        <input  type="date" name="endDate" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="...." required="">
        @else
        <input value="{{$offre->endDate}}" type="date" name="endDate" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="Flen" required="">
        @endif
    </div>


    @if ($offre==null)
    <input type="submit" class="w-full text-white  font-medium rounded-lg text-sm px-5 py-2.5 text-center  hover:bg-xprimary-500"  style="background:#1636c4;" value="Add">
    @else
    <input type="submit" class="w-full text-white  font-medium rounded-lg text-sm px-5 py-2.5 text-center  hover:bg-xprimary-500"  style="background:#1636c4;" value="Update">

    @endif

</form>



@endsection
