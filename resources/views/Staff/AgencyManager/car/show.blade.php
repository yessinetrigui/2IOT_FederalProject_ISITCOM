@extends('Staff.AgencyManager.Layouts.app')
@section("title")
car Manager
@endsection
@section("content")




 <div class="flex flex-col ">
    <div class="my-6">
        <h2 class="font-pop text-lg">ID:   <span class="font-semibold"> {{$car->id }}  </span> </h2>
        <h2 class="font-pop text-lg">model: <span class="font-semibold"> {{$car->model}} </span>   </h2>
        <h2 class="font-pop text-lg">brand: <span class="font-semibold"> {{$car->brand}} </span>   </h2>
        <h2 class="font-pop text-lg">capacity: <span class="font-semibold"> {{$car->capacity}} </span>   </h2>
        <h2 class="font-pop text-lg">description: <span class="font-semibold"> {{$car->description}} </span>   </h2>
        <div class="flex justify-around">
            <img class="w-80 h-auto object-cover" src="{{ URL::to('/SiteImages/Cars/' . auth()->user()->id ."/". $car->picUrl1 ) }}" alt="pic 1">
        <img class="w-80 h-auto object-cover" src="{{ URL::to('/SiteImages/Cars/' . auth()->user()->id ."/". $car->picUrl2 ) }}" alt="pic 2">
        <img class="w-80 h-auto object-cover" src="{{ URL::to('/SiteImages/Cars/' . auth()->user()->id ."/". $car->picUrl3 ) }}" alt="pic 3">
        </div>
        @if ($car->status == '1')
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
@if ($car->status == '1')
<a href="{{route('AgencyManager.car.manage.showStop', ['id'=>$car->id])}}" class="font-xl  text-white font-medium bg-red py-4  px-8 m-2">Stop car</a>
@else
<a href="{{route('AgencyManager.car.manage.showStop', ['id'=>$car->id])}}" class="font-xl  text-white font-medium bg-green py-4  px-8 m-2">Start car</a>
@endif

<a href="{{route('AgencyManager.car.manage.showUpdate', ['id'=>$car->id])}}" class="font-xl  text-white font-medium bg-primary py-4  px-8 m-2">Edit</a>
<a href="{{route('AgencyManager.car.manage.showDelete', ['id'=>$car->id])}}" class="font-xl  text-white font-medium bg-red py-4  px-8 m-2">Delete</a>

</div>
 </div>

@endsection
