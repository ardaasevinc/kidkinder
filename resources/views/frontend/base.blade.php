<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />
    @yield('css')

    @include('frontend/parts/css-part')
</head>

<body>
@include('frontend/parts/navbar-part')

@yield('content')

@include('frontend/parts/footer-part')


<!-- Back to Top -->
<a href="#" class="btn btn-primary p-3 back-to-top"
><i class="fa fa-angle-double-up"></i
    ></a>
@include('frontend/parts/js-part')
@yield('js')

</body>
</html>
