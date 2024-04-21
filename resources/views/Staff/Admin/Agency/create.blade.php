@extends('Staff.Admin.Layouts.app')
@section("title")
chaine Add
@endsection
@section('content')
<div class="text-center mb-10">
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <label for="" class="text-[0.9rem] font-semibold px-1 block text-red">{{$error}}</label>
    @endforeach
@endif

                    </div>
@if ($Agency==null)
<form class="space-y-4 md:space-y-6 mx-auto" action="{{route('admin.agency.manage.doAdd')}}" method="post"  enctype="multipart/form-data">
@else
<form class="space-y-4 md:space-y-6 mx-auto" action="{{route('admin.agency.manage.doUpdate', ['id'=>$Agency->id])}}" method="post"  enctype="multipart/form-data">

@endif
    @csrf
    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">Agency Name</label>
        @if ($Agency==null)
        <input  type="text" name="name" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="Write The Name Of Agency here" required="">
        @else
        <input value="{{$Agency->name}}" type="text" name="name" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="Flen" required="">
        @endif
    </div>

    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">Agency location</label>
        @if ($Agency==null)
        <input  type="text" name="location" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="..." required="">
        @else
        <input value="{{$Agency->location}}" type="text" name="location" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="..." required="">
        @endif
    </div>

    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">Agency Phone Number</label>
        @if ($Agency==null)
        <input  type="text" name="telephone" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="..." required="">
        @else
        <input value="{{$Agency->telephone}}" type="text" name="telephone" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="..." required="">
        @endif
    </div>
    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">Agency email</label>
        @if ($Agency==null)
        <input  type="text" name="email" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="..." required="">
        @else
        <input value="{{$Agency->email}}" type="text" name="email" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="..." required="">
        @endif
    </div>
    <div>
        <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-dark">Agency password</label>
        @if ($Agency==null)
        <input  type="password" name="password" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="..." required="">
        @else
        <input  type="password" name="password" id="" class=" border border-gray-300 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block xl:w-full lg:w-[50%] p-2.5  bg-white  border-gray-600  placeholder-gray-400  text-black  focus:ring-blue-500  focus:border-blue-500" placeholder="..." required="">
        @endif
    </div>



    @if ($Agency==null)
    <input type="submit" class="w-full text-white  font-medium rounded-lg text-sm px-5 py-2.5 text-center  hover:bg-xprimary-500"  style="background:#1636c4;" value="Add">
    @else
    <input type="submit" class="w-full text-white  font-medium rounded-lg text-sm px-5 py-2.5 text-center  hover:bg-xprimary-500"  style="background:#1636c4;" value="Update">

    @endif

</form>



@endsection
