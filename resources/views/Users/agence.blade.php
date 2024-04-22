@extends('layouts.home')
@section('css-import')
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/user.css">
@endsection

@section('js-import')
    <script src="js/scripts.js"></script>
@endsection

@section('pagetitle')
   Das Gas
@endsection

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

    <div class="triangle"></div>
    <img src="bimg.jpg" alt="" class="image">
    <div id="PROF">
        <div class="PIC_CONT position-relative">
            <img class="w-full h-full object-cover" src="{{ URL::to('/assets/home/pg1.png') }}" alt="">

            <div class="text-overlay bottom">

                <h6 class="dancing-script" style="color: white; font-size: 60px; font-weight: lighter;"><strong <strong
                        style="color: white;">{{ $agency->name }} Agency</strong></h6>
            </div>


        </div>

        <div class="cont" id="P1">
            <div class="title">
                <div class="txt">
                    <h1>Career</h1>
                </div>
                <div class="line"></div>
            </div>
            <div class="content">
                <div class="sub-cnt">
                    <div class="sub-title">
                        <h1>Location</h1>
                    </div>
                    <div class="sub-content">
                        <div class="txt">{{ $agency->location }}</div>
                        <div class="icon"><img src="{{ URL::to('/assets/icons/skull-solid.svg') }}" alt=""></div>
                    </div>

                </div>
                <div class="sub-cnt">
                    <div class="sub-title">
                        <h1>Telephone</h1>
                    </div>
                    <div class="sub-content">
                        <div class="txt">{{ $agency->telephone }}</div>
                        <div class="icon"><img src="{{ URL::to('/assets/icons/skull-crossbones-solid.svg') }}"
                                alt=""></div>
                    </div>

                </div>
                <div class="sub-cnt">
                    <div class="sub-title">
                        <h1>Email</h1>
                    </div>
                    <div class="sub-content">
                        <div class="txt">{{ $agency->email }}</div>
                        <div class="icon"><img src="{{ URL::to('/assets/icons/clock-regular.svg') }}" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="cont CARS" id="slide">
            <div class="title">
                <div class="txt">
                    <h1>OFFERS</h1>
                </div>
                <div class="line"></div>
            </div>
            <div class="flex justify-around items-center lg:flex-row flex-col ">
                @foreach ($cars as $car)
                    <div
                        class="w-[320px] h-[550px]  relative hover:shadow-2xl hover:scale-105 duration-500 hover:-translate-y-3">
                        <img class="w-full h-full brightness-75 object-cover"
                            src="{{ URL::to('/public/SiteImages/Cars/' . $car->agencyId ."/". $car->picUrl1 ) }}" alt="">
                        <h1
                            class="font-monta font-black text-white uppercase text-2xl text-center break-words absolute top-10 left-0 right-0">
                            {{$car->model}}</h1>
                        <h1
                            class="font-monta font-normal text-white uppercase text-xl top-28 text-center break-words absolute  left-0 right-0">
                            {{$car->brand}}</h1>

                            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" onclick="document.getElementById('id').value = {{$car->id}}"  class="absolute bottom-0 left-0 w-full h-fit  ">

                                <div class=" bg-C3 px-8 py-4   border-white border-b-4 flex justify-center items-center">
                                    <h1 class=" text-white uppercase font-monta font-black text-2xl ">Order Now !</h1>



                                </div>
                            </button>


                    </div>
                @endforeach

            </div>
        </div>

    </div>


<!-- Main modal -->
<div id="crud-modal" tabindex="-1" aria-hidden="false" class="@if(session('errors')) flex  @else hidden @endif overflow-y-auto bg-[#00000084]   fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-0rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full ">
        <!-- Modal content -->
        <div class="relative bg-black rounded-lg shadow  ">
            <!-- Modal header -->
            <div class="flex items-center justify-between  border-b rounded-t border-white">
                <h3 class="text-lg font-semibold text-white">
                   Order From Us Now !
                </h3>
                <button type="button" class=" bg-transparent text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>


            <!-- Modal body -->
            <form class="p-4 md:p-5" action="{{route("user.doOrder")}}" method="POST">
                @csrf
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2 sm:col-span-1">
                        @if($errors->has('lastName'))
                        <div class="alert alert-danger" role="alert">
                        <div class="error text-[#d33838]">{{ $errors->first('lastName') }}</div>
                        </div>
                    @endif
                    <input type="hidden" name="id" id="id">
                        <label for="price" class=" mb-2 text-sm font-medium text-white bg-C2">Last Name</label>
                        <input type="text" name="lastName" id="price" class="bg-C2 text-white border border-gray-300  text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder=" Ben Foulen" required >
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        @if($errors->has('endDate'))
                            <div class="alert alert-danger" role="alert">
                            <div class="error text-[#d33838]">{{ $errors->first('firstName') }}</div>
                            </div>
                        @endif
                        <label for="category" class=" mb-2 text-sm font-medium text-white">First Name</label>
                        <input type="text" name="firstName" id="price" class="bg-C2 text-white border border-gray-300  text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Flen" required >
                    </div>

                    <div class="col-span-2">
                        @if($errors->has('iDCardNumber'))
                        <div class="alert alert-danger" role="alert">
                        <div class="error text-[#d33838]">{{ $errors->first('iDCardNumber') }}</div>
                        </div>
                    @endif
                        <label for="name" class=" mb-2 text-sm font-medium text-gray-900 dark:text-white">iD Card Number</label>
                        <input type="text" name="iDCardNumber" id="name" class="bg-C2 border border-gray-300 text-white text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  required>
                    </div>
                    <div class="col-span-2">
                        @if($errors->has('telephone'))
                        <div class="alert alert-danger" role="alert">
                        <div class="error text-[#d33838]">{{ $errors->first('telephone') }}</div>
                        </div>
                    @endif
                        <label for="name" class=" mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number:</label>
                        <input type="text" name="telephone" id="name" class="bg-C2 border border-gray-300 text-white text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="+216 12 34 56 78" required>
                    </div>
                    <div class="col-span-2">
                        @if($errors->has('email'))
                        <div class="alert alert-danger" role="alert">
                        <div class="error text-[#d33838]">{{ $errors->first('email') }}</div>
                        </div>
                    @endif
                        <label for="name" class=" mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Address:</label>
                        <input type="text" name="email" id="name" class="bg-C2 border border-gray-300 text-white text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="flen@mail.com" required>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        @if($errors->has('startDate'))
                        <div class="alert alert-danger" role="alert">
                        <div class="error text-[#d33838]">{{ $errors->first('startDate') }}</div>
                        </div>
                    @endif
                        <label for="price" class=" mb-2 text-sm font-medium text-white bg-C2">start Date</label>
                        <input type="date" name="startDate" id="price" class="bg-C2 text-white border border-gray-300  text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="1" value="1" required max="20" min="1">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        @if($errors->has('endDate'))
                            <div class="alert alert-danger" role="alert">
                            <div class="error text-[#d33838]">{{ $errors->first('endDate') }}</div>
                            </div>
                        @endif
                        <label for="category" class=" mb-2 text-sm font-medium text-white">end Date</label>
                        <input type="date" name="endDate" id="price" class="bg-C2 text-white border border-gray-300  text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="1" value="1" required max="20" min="1">
                    </div>
                    <div class="col-span-2">
                        @if($errors->has('address'))
                            <div class="alert alert-danger" role="alert">
                            <div class="error text-[#d33838]">{{ $errors->first('address') }}</div>
                            </div>
                        @endif
                        <label for="description" class=" mb-2 text-sm font-medium text-gray-900 dark:text-white">Adress:</label>
                        <textarea id="description" name="address" rows="4" class=" p-2.5 w-full text-sm bg-C2 text-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write Your Address here"></textarea>
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 w-full hover:bg-C1 hover:text-C2 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center border-C1 border-2 dark:bg-blue-600 dark:hover:bg-C1 dark:focus:ring-C1">
                    <svg class="me-1 -ms-1 w-5 h-5" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M9 16.2 4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"></path></svg>
                    Confirm Order
                </button>
            </form>
        </div>
    </div>
</div>




@if (session('message'))
<!-- Main modal -->
<div id="crud-modalx" tabindex="-1" aria-hidden="true" class="@if(session('message')) flex  @else hidden @endif overflow-y-auto bg-[#00000084]   fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-0rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full ">
        <!-- Modal content -->
        <div class="relative bg-black rounded-lg shadow  ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-white">
                <h3 class="text-lg font-semibold text-white">
                    Order From Us Now !
                </h3>
                <button type="button" class=" bg-transparent text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                >
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class=" grid-cols-2 p-4 md:p-5 flex justify-center flex-col items-center">

                <h1 for="name" class=" mb-2 text-center text-lg font-bold font-pop text-[#e15a45]">  {{ session('message') }}</h1>

            </div>



        </div>
    </div>
</div>
@endif
@endsection
