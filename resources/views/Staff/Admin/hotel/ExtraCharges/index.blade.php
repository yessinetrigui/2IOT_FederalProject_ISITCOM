@extends('Staff.Admin.Layouts.app')
@section("title")
ExtraCharges Manager
@endsection
@section("content")
<div class="p-4">
    <a href="{{route('admin.hotel.manage.extracharges.showAdd', ['idHotel'=>$idHotel])}}" class="font-xl  text-white font-medium bg-C1 p-4">Add New Extra Charge </a>
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
                              Name
                          </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            price
                            </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                             Manage
                          </th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach ($ExtraCharges as $ExtraCharge)
                    <tr class="bg-gray-100 border-b">
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap">{{$ExtraCharge->id}}</td>
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap">{{$ExtraCharge->name}}</td>
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap">{{$ExtraCharge->price}}</td>
                        <td class="text-base text-gray-900 text-start  px-6 py-4 whitespace-nowrap"><a class="bg-primary py-2 px-6 text-white font-pop text-base" href="{{route('admin.hotel.manage.extracharges.showPerID', ['id'=>$ExtraCharge->id, 'idHotel'=>$idHotel])}}">Manage</a> </td>

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
