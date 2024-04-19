<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;500;600;700;800&family=Montserrat:ital,wght@0,200;0,300;0,600;0,700;1,400&family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap">
</head>

<body>
<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 bg-D2">
    <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900  text-C2">
        <img class="w-[155px] mr-2" src="{{asset('media/logo/logo.png')}}" alt="logo">
    </a>
    <div class="w-full rounded-lg shadow  border md:mt-0 sm:max-w-md xl:p-0  bg-gray-800  border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl font-int text-C2">
                Login to {{$title}} System
            </h1>
            @if ($title=='Admin')
            <form class="space-y-4 md:space-y-6" action="{{route('admin.doLogin')}}" method="post">
            @else
            <form class="space-y-4 md:space-y-6" action="{{route('organizer.doLogin')}}" method="post">
            @endif

                @csrf
                <div>
                    @if ($title=='Admin')
                    <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-C2">Username</label>
                    @else
                    <label for=""  class="block mb-2 text-sm font-medium text-gray-900  text-C2">Email</label>
                    @endif
                    <input type="text" name="username"  class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block w-full p-2.5    border-gray-600  placeholder-gray-400  text-dark  focus:ring-blue-500  focus:border-blue-500" placeholder="name" required="">
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900  text-C2">Password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-xprimary-600 focus:border-xprimary-600 block w-full p-2.5   border-gray-600  placeholder-gray-400  text-dark  focus:ring-blue-500  focus:border-blue-500" required="">
                </div>

                <button type="submit" class="w-full text-C2 bg-primary hover:bg-xprimary-700 focus:ring-4 focus:outline-none focus:ring-xprimary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center  bg-xprimary-600  hover:bg-xprimary-700  focus:ring-xprimary-800">LOGIN</button>

            </form>
        </div>
    </div>
</div>

</body>
</html>

