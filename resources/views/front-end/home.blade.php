<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title>Top News HTML template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('front-end/css/styles.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Header news -->
    @include('front-end.body.header')
    <!-- End Header news -->

  @yield('content')

   @include('front-end.body.footer')

    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

    <script type="text/javascript" src="{{ asset('front-end/js/index.bundle.js') }}"></script>
</body>

</html>