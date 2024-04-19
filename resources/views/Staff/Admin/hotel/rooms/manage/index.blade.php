@extends('Staff.Admin.Layouts.app')
@section("title")
Rooms Manager
@endsection
@section("content")
<div class="p-4">

    <a href="{{route('admin.hotel.manage.rooms.prices.showAll', ['idHotel'=>$idHotel])}}" class="font-xl  text-white font-medium bg-C2 py-4  px-8 m-2">Config Rooms Prices</a>

    <a href="{{route('admin.hotel.manage.rooms.showAdd', ['idHotel'=>$idHotel])}}" class="font-xl  text-white font-medium bg-C1 p-4">Add New Room </a>

    <div class="my-2">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                  <table class="min-w-full ">
                    <thead class=" border-b">
                      <tr>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            ID
                          </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                              Type Name
                          </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Status
                        </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                             Manage
                          </th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach ($Rooms as $Room)
                    <tr class="bg-gray-100 border-b">
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap">{{$Room->id}}</td>
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap"> {{DB::table('typerooms')->where('id', '=', $Room->idTypeRoom)->get('name')->first()->name}}  </td>
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap">
                            @if ($Room->status==1)
                                <span class="font-pop text-green">Availble</span>
                            @else
                            <span class="font-pop text-red">Not Availble</span>

                            @endif
                        </td>
                        <td class="text-base text-gray-900 text-start  px-6 py-4 whitespace-nowrap"><a class="bg-primary py-2 px-6 text-white font-pop text-base" href="{{route('admin.hotel.manage.rooms.showPerID', ['idHotel'=>$idHotel, 'id'=>$Room->id])}}">Manage</a> </td>
                    </tr>
                    @endforeach


                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>






    </div>


</div>

@endsection
