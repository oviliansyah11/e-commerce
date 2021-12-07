<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.admin.meta')
    <title>@yield('title')</title>
    @include('includes.admin.style')
</head>

<body>
    <div class="container-scroller">
        @include('includes.admin.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('includes.admin.sidebar')
            @yield('content')
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('includes.admin.footer')
    @include('includes.admin.script')
</body>

</html>