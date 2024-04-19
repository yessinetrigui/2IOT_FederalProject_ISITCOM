@extends('Staff.Admin.Layouts.app')
@section("title")
chaine Manager
@endsection
@section("content")




 <div class="flex flex-col ">
    <div class="my-6">
        <h2 class="font-pop text-lg">ID:   <span class="font-semibold"> {{$Chain->id }}  </span> </h2>
        <h2 class="font-pop text-lg">Full Name: <span class="font-semibold"> {{$Chain->name}} </span>   </h2>

        @if ($Chain->status == '1')
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
@if ($Chain->status == '1')
<a href="{{route('admin.chain.manage.showStop', ['id'=>$Chain->id])}}" class="font-xl  text-white font-medium bg-red py-4  px-8 m-2">Stop Chain</a>
@else
<a href="{{route('admin.chain.manage.showStop', ['id'=>$Chain->id])}}" class="font-xl  text-white font-medium bg-green py-4  px-8 m-2">Start Chain</a>
@endif

<a href="{{route('admin.chain.manage.showUpdate', ['id'=>$Chain->id])}}" class="font-xl  text-white font-medium bg-primary py-4  px-8 m-2">Edit</a>
<a href="{{route('admin.chain.manage.showDelete', ['id'=>$Chain->id])}}" class="font-xl  text-white font-medium bg-red py-4  px-8 m-2">Delete</a>

</div>
 </div>

@endsection
