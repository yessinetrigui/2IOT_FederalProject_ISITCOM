@extends('Staff.Admin.Layouts.app')
@section("title")
room Manager
@endsection
@section("content")




 <div class="flex flex-col ">

    <div class="my-6">
        <h2 class="font-pop text-lg">ID:   <span class="font-semibold"> {{$room->id }}  </span> </h2>
        <h2 class="font-pop text-lg">Room Type Name: <span class="font-semibold"> {{DB::table('typerooms')->where('id', '=', $room->idTypeRoom)->get('name')->first()->name}}</span>   </h2>
        @if ($room->status == '1')
        <h2 class="font-pop text-lg">Status:<span class="font-semibold"> ACTIVE </span> </h2>
        @else
        <h2 class="font-pop text-lg">Status: <span class="font-semibold"> Blocked  </span> </h2>
        @endif
        <hr>

        <h2 class="font-pop text-lg mt-2">Reservations History:   <span class="font-semibold"> <br> ... </span> </h2>

</div>



<script>



</script>


<div class="my-6 flex lg:flex-row md:flex-row sm:flex-col max-sm:flex-col">
@if ($room->status == '1')
<a href="{{route('admin.hotel.manage.rooms.showStop', ['idHotel'=>$idHotel,'id'=>$room->id])}}" class="font-xl  text-white font-medium bg-red py-4  px-8 m-2">Stop room</a>
@else
<a href="{{route('admin.hotel.manage.rooms.showStop', ['idHotel'=>$idHotel,'id'=>$room->id])}}" class="font-xl  text-white font-medium bg-green py-4  px-8 m-2">Start room</a>
@endif

<a href="{{route('admin.hotel.manage.rooms.showUpdate', ['idHotel'=>$idHotel,'id'=>$room->id])}}" class="font-xl  text-white font-medium bg-primary py-4  px-8 m-2">Edit</a>
<a href="{{route('admin.hotel.manage.rooms.showDelete', ['idHotel'=>$idHotel,'id'=>$room->id])}}" class="font-xl  text-white font-medium bg-red py-4  px-8 m-2">Delete</a>

</div>
 </div>

@endsection
