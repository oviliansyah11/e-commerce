<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- import meta --}}
    @include('includes.admin.meta')

    <title>@yield('title')</title>
    <!-- Styles -->
    @include('includes.admin.style')
</head>

<body class="bg-gradient-primary">
    <!-- Main Content -->
    <div id="content">
        @yield('content')
        @include('includes.admin.script')
</body>

</html>