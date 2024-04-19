@extends('Staff.Admin.Layouts.app')
@section("title")
hotele Manager
@endsection
@section("content")




 <div class="flex flex-col ">

    <div class="my-6">
        <h2 class="font-pop text-lg">ID:   <span class="font-semibold"> {{$hotel->id }}  </span> </h2>
        <h2 class="font-pop text-lg">Hotel Name: <span class="font-semibold"> {{$hotel->name}} </span>   </h2>
        <h2 class="font-pop text-lg">Chain Name (Chain ID): <span class="font-semibold">{{$chainName}}  ({{$hotel->idChain}}) </span>  </h2>
        <h2 class="font-pop text-lg">Zone Name (Zone ID): <span class="font-semibold">{{ DB::table('zones')->where('id', '=', $hotel->idZone)->get('name')->first()->name  }}  ({{$hotel->idZone}}) </span>  </h2>

        <h2 class="font-pop text-lg">Number Of Availble Rooms: <span class="font-semibold"> {{$AllRoomsNumberAvailble}} </span>  </h2>



        @if ($hotel->status == '1')
        <h2 class="font-pop text-lg">Status:<span class="font-semibold"> ACTIVE </span> </h2>
        @else
        <h2 class="font-pop text-lg">Status: <span class="font-semibold"> Blocked  </span> </h2>
        @endif
        <hr>
        <h2 class="font-pop text-lg">Number Of Rooms All: <span class="font-semibold">  {{$AllRoomsNumber}}</span>  </h2>
            @foreach ($AllRoomsNumberAvailblePerType as $RoomType)

                <h2 class="font-pop text-lg">

                Number of  {{DB::table('typerooms')->where('id', '=', $RoomType->idTypeRoom)->get('name')->first()->name}}
                 Rooms:   <span class="font-semibold">   {{DB::table('rooms')->where('idTypeRoom', '=', $RoomType->idTypeRoom)->where('idHotel', '=', $hotel->id)->count()}}
                </span>  </h2>
            @endforeach




        <hr class="mt-4">
</div>



<script>



</script>
<div class="flex ">
    <a href="{{route('admin.hotel.manage.extracharges.showAll', ['idHotel'=>$hotel->id])}}" class="font-xl  text-white font-medium bg-C2 py-4  px-8 m-2">Config Extra Charge Prices</a>
    <a href="{{route('admin.hotel.manage.offers.showAll', ['idHotel'=>$hotel->id])}}" class="font-xl  text-white font-medium bg-C2 py-4  px-8 m-2">Config Offers Prices</a>
    <a href="{{route('admin.hotel.manage.rooms.showAll', ['idHotel'=>$hotel->id])}}" class="font-xl  text-white font-medium bg-C2 py-4  px-8 m-2">Manage Rooms</a>
    <a href="{{route('admin.hotel.manage.showStop', ['idHotel'=>$hotel->id])}}" class="font-xl  text-white font-medium bg-C2 py-4  px-8 m-2">Manage Reservations</a>
</div>


<div class="my-6 flex lg:flex-row md:flex-row sm:flex-col max-sm:flex-col">
@if ($hotel->status == '1')
<a href="{{route('admin.hotel.manage.showStop', ['idHotel'=>$hotel->id])}}" class="font-xl  text-white font-medium bg-red py-4  px-8 m-2">Stop hotel</a>
@else
<a href="{{route('admin.hotel.manage.showStop', ['idHotel'=>$hotel->id])}}" class="font-xl  text-white font-medium bg-green py-4  px-8 m-2">Start hotel</a>
@endif

<a href="{{route('admin.hotel.manage.showUpdate', ['idHotel'=>$hotel->id])}}" class="font-xl  text-white font-medium bg-primary py-4  px-8 m-2">Edit</a>
<a href="{{route('admin.hotel.manage.showDelete', ['idHotel'=>$hotel->id])}}" class="font-xl  text-white font-medium bg-red py-4  px-8 m-2">Delete</a>

</div>
 </div>

@endsection
