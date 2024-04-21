@extends('Staff.AgencyManager.Layouts.app')
@section("title")
Clients Manager
@endsection
@section("content")
<div class="p-4">
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
                            iDCardNumber
                          </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Full Name
                          </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Address
                          </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Phone Number
                          </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Email
                          </th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach ($Users as $Client)
                    <tr class="bg-gray-100 border-b">
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap">{{$Client->id}}</td>
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap">{{$Client->iDCardNumber}}</td>
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap">{{$Client->lastName . " " . $Client->firstName}}</td>
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap">{{$Client->address}}</td>
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap">{{$Client->telephone}}</td>
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap">{{$Client->email}}</td>
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
