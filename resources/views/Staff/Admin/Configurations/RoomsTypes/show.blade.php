@extends('Staff.Admin.Layouts.app')
@section("title")
RoomsTypese Manager
@endsection
@section("content")




 <div class="flex flex-col ">
    <div class="my-6">
        <h2 class="font-pop text-lg">ID:   <span class="font-semibold"> {{$RoomsTypes->id }}  </span> </h2>
        <h2 class="font-pop text-lg">Full Name: <span class="font-semibold"> {{$RoomsTypes->name}} </span>   </h2>

        @if ($RoomsTypes->status == '1')
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
@if ($RoomsTypes->status == '1')
<a href="{{route('admin.configurations.RoomsTypes.manage.showStop', ['id'=>$RoomsTypes->id])}}" class="font-xl  text-white font-medium bg-red py-4  px-8 m-2">Stop RoomsTypes</a>
@else
<a href="{{route('admin.configurations.RoomsTypes.manage.showStop', ['id'=>$RoomsTypes->id])}}" class="font-xl  text-white font-medium bg-green py-4  px-8 m-2">Start RoomsTypes</a>
@endif

<a href="{{route('admin.configurations.RoomsTypes.manage.showUpdate', ['id'=>$RoomsTypes->id])}}" class="font-xl  text-white font-medium bg-primary py-4  px-8 m-2">Edit</a>
<a href="{{route('admin.configurations.RoomsTypes.manage.showDelete', ['id'=>$RoomsTypes->id])}}" class="font-xl  text-white font-medium bg-red py-4  px-8 m-2">Delete</a>

</div>
 </div>

@endsection
