@extends('Staff.Admin.Layouts.app')
@section("title")
ExtraChargee Add
@endsection
@section('content')
<div class="text-center mb-10">
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <label for="" class="text-[0.9rem] font-semibold px-1 block text-red">{{$error}}</label>
    @endforeach
@endif

                    </div>
@if ($ExtraCharge==null)
<form class="space-y-4 md:space-y-6 mx-auto" action="{{route('admin.hotel.manage.extracharges.doAdd', ['idHotel'=>$idHotel])}}" method="post"  enctype="multipart/form-data">
@else
<form class="space-y-4 md:space-y-6 mx-auto" action="{{route('admin.hotel.manage.extracharges.doUpdate', ['id'=>$ExtraCharge->id , 'idHotel'=>$idHotel])}}" method="post"  enctype="multipart/form-data">

@endif
    @csrf
    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">ExtraCharge Name</label>
        @if ($ExtraCharge==null)
        <input  type="text" name="name" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="Write The Name Of ExtraChargee here" required="">
        @else
        <input value="{{$ExtraCharge->name}}" type="text" name="name" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="Flen" required="">
        @endif
    </div>

    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">Room Type Desc</label>
        @if ($ExtraCharge==null)
        <input  type="text" name="desc" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="Write The Name Of ExtraChargee here" required="">
        @else
        <input value="{{$ExtraCharge->desc}}" type="text" name="desc" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="Flen" required="">
        @endif
    </div>
    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">ExtraCharge price</label>
        @if ($ExtraCharge==null)
        <input  type="text" name="price" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="...." required="">
        @else
        <input value="{{$ExtraCharge->price}}" type="text" name="price" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="Flen" required="">
        @endif
    </div>
    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">ExtraCharge startDate</label>
        @if ($ExtraCharge==null)
        <input  type="date" name="startDate" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="...." required="">
        @else
        <input value="{{$ExtraCharge->startDate}}" type="date" name="startDate" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="Flen" required="">
        @endif
    </div>
    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">ExtraCharge endDate</label>
        @if ($ExtraCharge==null)
        <input  type="date" name="endDate" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="...." required="">
        @else
        <input value="{{$ExtraCharge->endDate}}" type="date" name="endDate" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="Flen" required="">
        @endif
    </div>
    @if ($ExtraCharge==null)
    <input type="submit" class="w-full text-white  font-medium rounded-lg text-sm px-5 py-2.5 text-center  hover:bg-xprimary-500"  style="background:#1636c4;" value="Add">
    @else
    <input type="submit" class="w-full text-white  font-medium rounded-lg text-sm px-5 py-2.5 text-center  hover:bg-xprimary-500"  style="background:#1636c4;" value="Update">

    @endif

</form>



@endsection
