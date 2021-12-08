<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- import meta --}}
    @include('includes.admin.meta')

    <title>@yield('title')</title>
    <!-- Styles -->
    @include('includes.admin.style')
</head>

<body id="page-top">
    @include('includes.admin.sidebar')
    <!-- Main Content -->
    <div id="content">
        @include('includes.admin.topbar')
        @yield('content')
        @include('includes.admin.footer')
        @include('includes.admin.script')

</body>

</html>