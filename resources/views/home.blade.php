<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
@section('sidebar')
    Это - главный сайдбар.
@show

<div class="container">
@section('content')
{{--    @endsection--}}
    @show
</div>

</body>
</html>
