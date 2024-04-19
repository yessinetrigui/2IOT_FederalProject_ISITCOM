@extends('Staff.Admin.Layouts.app')
@section("title")
tarifs Manager
@endsection
@section("content")
<div class="p-4">
    <a href="{{route('admin.hotel.manage.rooms.prices.showAdd', ['idHotel'=>$idHotel])}}" class="font-xl  text-white font-medium bg-C1 p-4">Add New Room Price </a>
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
                            Name Room Type
                          </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            price
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            startDate
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            endDate
                        </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                             Remove
                          </th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach ($Prices as $tarif)
                    <tr class="bg-gray-100 border-b">
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap">{{$tarif->id}}</td>
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap">{{DB::table('typerooms')->where('id','=',$tarif->idTypeRoom)->get('name')[0]->name}}</td>
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap">{{$tarif->price}} TND</td>
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap">{{$tarif->startDate}}</td>
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap">{{$tarif->endDate}}</td>
                        <td class="text-base text-gray-900 text-start  px-6 py-4 whitespace-nowrap"><a class="bg-primary py-2 px-6 text-white font-pop text-base" href="{{route('admin.hotel.manage.rooms.prices.showUpdate', ['id'=>$tarif->id, 'idHotel'=>$idHotel])}}">Edit</a>  <a class="bg-primary py-2 px-6 text-white font-pop text-base" href="{{route('admin.hotel.manage.rooms.prices.doDelete', ['id'=>$tarif->id, 'idHotel'=>$idHotel])}}">Remove</a></td>

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
