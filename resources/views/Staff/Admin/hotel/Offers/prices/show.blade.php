@extends('Staff.Admin.Layouts.app')
@section("title")
offer Manager
@endsection
@section("content")




 <div class="flex flex-col ">
    <div class="my-6">
        <h2 class="font-pop text-lg">ID:   <span class="font-semibold"> {{$offer->id }}  </span> </h2>
        <h2 class="font-pop text-lg">Full Name: <span class="font-semibold">{{ DB::table("offers")->where("id", '=', $offer->idOffre)->get('name')->first()->name;}} </span>   </h2>

        @if ($offer->status == '1')
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
@if ($offer->status == '1')
<a href="{{route('admin.configurations.offer.manage.showStop', ['id'=>$offer->id])}}" class="font-xl  text-white font-medium bg-red py-4  px-8 m-2">Stop offer</a>
@else
<a href="{{route('admin.configurations.offer.manage.showStop', ['id'=>$offer->id])}}" class="font-xl  text-white font-medium bg-green py-4  px-8 m-2">Start offer</a>
@endif

<a href="{{route('admin.configurations.offer.manage.showUpdate', ['id'=>$offer->id])}}" class="font-xl  text-white font-medium bg-primary py-4  px-8 m-2">Edit</a>
<a href="{{route('admin.configurations.offer.manage.showDelete', ['id'=>$offer->id])}}" class="font-xl  text-white font-medium bg-red py-4  px-8 m-2">Delete</a>

</div>
 </div>

@endsection
