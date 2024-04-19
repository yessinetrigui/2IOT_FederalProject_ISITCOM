@extends('Staff.Admin.Layouts.app')
@section("title")
zonee Manager
@endsection
@section("content")




 <div class="flex flex-col ">
    <div class="my-6">
        <h2 class="font-pop text-lg">ID:   <span class="font-semibold"> {{$zone->id }}  </span> </h2>
        <h2 class="font-pop text-lg">Zone Name: <span class="font-semibold"> {{$zone->name}} </span>   </h2>
    </div>
</div>



<script>



</script>
<div class="flex max-sm:flex-">
    <h2 class="font-pop text-lg">Related Hotels List: <span class="font-semibold">
        .. </span>   </h2>
</div>


<div class="my-6 flex lg:flex-row md:flex-row sm:flex-col max-sm:flex-col">


<a href="{{route('admin.configurations.zones.manage.showUpdate', ['id'=>$zone->id])}}" class="font-xl  text-white font-medium bg-primary py-4  px-8 m-2">Edit</a>
<a href="{{route('admin.configurations.zones.manage.showDelete', ['id'=>$zone->id])}}" class="font-xl  text-white font-medium bg-red py-4  px-8 m-2">Delete</a>

</div>
 </div>

@endsection
