<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{ URL::to('bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    </head>

    <body>

    <div class="wrapper">
        @include('includes.header')

        <div class="content-wrapper">
            <div class="container">
                @yield('content')
            </div>
        </div>
        <!-- /.row (main row) -->
    </div>



    {{--<footer class="container-fluid text-center">
        <p>Footer Text</p>
    </footer>--}}

    <script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
        <script src="{{ URL::to('bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>