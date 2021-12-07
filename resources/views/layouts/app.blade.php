<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.meta')
    <title>Document</title>
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