<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.meta')
    <title>@yield('title')</title>
    @include('includes.style')
</head>

<body>
    @include('includes.header')
    @include('includes.mainmenu')
    @yield('content')

    @include('includes.script')
    @include('includes.footer')
</body>

</html>