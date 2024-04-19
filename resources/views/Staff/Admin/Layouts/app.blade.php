<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Extra Virgin</title>
    <link rel="shortcut icon" href="media/logos/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.tailwindcss.com"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;500;600;700;800&family=Montserrat:ital,wght@0,200;0,300;0,600;0,700;1,400&family=Poppins:wght@100;200;300;400;600;700&display=swap"
        rel="stylesheet">

<style>
    *{
        list-style: none;
        text-decoration: none;
        padding: 0;
        margin: 0;
    }
</style>

</head>

<body>




    <main class="flex w-full justify-between items-end">
        @include('Staff.Admin.Layouts.sidebar')
        <section class="bg-D1 w-[90%] h-screen flex flex-col items-center justify-start p-4">

            <header class="bg-white w-[95%] h-[8vh]">
                @include('Staff.Admin.Layouts.navbar')

            </header>

            <article class="bg-white w-[95%] h-fit mt-6">
                <div class="p-4">


                    @yield("content")
                </div>
                <div class="m-2 flex justify-end">
                    <a href="javascript:window.history.back()" class="font-xl  text-white font-medium bg-C4 py-2  px-4 m-2"> << Go Back</a>
                </div>
            </article>

        </section>
    </main>

    <footer>
    </footer>


</body>
</html>
