@extends('Staff.Admin.Layouts.app')
@section("title")
Extra Charges Manager
@endsection
@section("content")




 <div class="flex flex-col ">
    <div class="my-6">
        <h2 class="font-pop text-lg">ID:   <span class="font-semibold"> {{$ExtraCharge->id }}  </span> </h2>
        <h2 class="font-pop text-lg">Extra Charge Name: <span class="font-semibold"> {{$ExtraCharge->name}} </span>   </h2>
        <h2 class="font-pop text-lg">Extra Charge Start Date: <span class="font-semibold"> {{$ExtraCharge->startDate}} </span>   </h2>
        <h2 class="font-pop text-lg">Extra Charge  End Date: <span class="font-semibold"> {{$ExtraCharge->endDate}} </span>   </h2>

        @if ($ExtraCharge->status == '1')
        <h2 class="font-pop text-lg">Status:<span class="font-semibold"> ACTIVE </span> </h2>
        @else
        <h2 class="font-pop text-lg">Status: <span class="font-semibold"> Blocked  </span> </h2>
        @endif
        <hr class="mt-4">
</div>



<script>



</script>
<div class="flex max-sm:flex-">

</div>


<div class="my-6 flex lg:flex-row md:flex-row sm:flex-col max-sm:flex-col">
@if ($ExtraCharge->status == '1')
<a href="{{route('admin.hotel.manage.extracharges.showStop', ['id'=>$ExtraCharge->id, 'idHotel'=>$idHotel])}}" class="font-xl  text-white font-medium bg-red py-4  px-8 m-2">Stop ExtraCharge</a>
@else
<a href="{{route('admin.hotel.manage.extracharges.showStop', ['id'=>$ExtraCharge->id, 'idHotel'=>$idHotel])}}" class="font-xl  text-white font-medium bg-green py-4  px-8 m-2">Start ExtraCharge</a>
@endif

<a href="{{route('admin.hotel.manage.extracharges.showUpdate', ['id'=>$ExtraCharge->id, 'idHotel'=>$idHotel])}}" class="font-xl  text-white font-medium bg-primary py-4  px-8 m-2">Edit</a>
<a href="{{route('admin.hotel.manage.extracharges.showDelete', ['id'=>$ExtraCharge->id, 'idHotel'=>$idHotel])}}" class="font-xl  text-white font-medium bg-red py-4  px-8 m-2">Delete</a>

</div>
 </div>

@endsection
