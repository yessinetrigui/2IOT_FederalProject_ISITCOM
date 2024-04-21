@extends('Staff.AgencyManager.Layouts.app')
@section("title")
Rentals Manager
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
                            ID Client
                          </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            ID Offer
                          </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Period
                          </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Status
                          </th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach ($rentals as $rental)
                    <tr class="bg-gray-100 border-b">
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap">{{$rental->id}}</td>
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap">{{$rental->clientId}}</td>
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap"> <a class="font-bold text-grad1 underline " href="{{route("AgencyManager.offer.showPerID", ['id'=>$rental->offerId])}}">{{$rental->offerId}}</a> </td>
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap">{{$rental->startDate . " - " . $rental->endDate}}</td>
                        <td class="text-base text-gray-900  px-6 py-4 whitespace-nowrap">
                            @if ($rental->status == 0)
                                <a class="text-green font-semibold hover:font-bold" href="{{route("AgencyManager.rental.approve", ["id"=>$rental->id])}}">Approve</a>
                                <br>
                                <a class="text-red font-semibold hover:font-bold" href="{{route("AgencyManager.rental.decline", ["id"=>$rental->id])}}">Decline</a>
                            @else
                                @if ($rental->status == 1)
                                    Approved
                                @else
                                    Declined
                                @endif
                            @endif

                        </td>
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
