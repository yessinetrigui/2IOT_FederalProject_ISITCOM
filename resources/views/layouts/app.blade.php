<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="public/favicon.ico" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="description" content=""/>
    <meta name="keywords" content="..."/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('page-name')</title>


<!-- Custom CSS ------------>
@yield('css-import')
<!-- Custom CSS ------------>


</head>
<body>
    @yield('header')

    @yield('content')

    @yield('footer')

    @yield('js-import')

</body>
</html>
