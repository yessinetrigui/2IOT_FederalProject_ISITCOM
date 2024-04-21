@extends('Staff.AgencyManager.Layouts.app')
@section("title")
Cars Manager
@endsection
@section("content")
<div class="p-4">
    <a href="{{route('AgencyManager.car.manage.showAdd')}}" class="font-xl  text-white font-medium bg-C1 p-4">ADD </a>
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
                            Model
                          </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Description
                          </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Capacity
                          </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Brand
                          </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Body Style
                          </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Manage
                          </th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach ($Cars as $car)
                    <tr class="bg-gray-100 border-b">
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap">{{$car->id}}</td>
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap">{{$car->model}}</td>
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap">{{$car->description}}</td>
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap">{{$car->capacity}}</td>
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap">{{$car->brand}}</td>
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap">{{$car->bodyStyle}}</td>
                        <td class="text-base text-gray-900 text-start  px-6 py-4 whitespace-nowrap"><a class="bg-primary py-2 px-6 text-white font-pop text-base" href="{{route('AgencyManager.car.showPerID', ['id'=>$car->id])}}">Manage</a> </td>
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
