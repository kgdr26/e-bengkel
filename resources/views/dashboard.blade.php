<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Codescandy" name="author">
        <title>Dashboard </title>
        <!-- Favicon icon-->
        <link rel="shortcut icon" type="image/x-icon" href="">
        <!-- Libs CSS -->
        <link href="{{asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/select2/select2.min.css') }}" rel="stylesheet">
        <link href="{{asset('assets/libs/feather-webfont/dist/feather-icons.css')}}" rel="stylesheet">
        <link href="{{asset('assets/libs/simplebar/dist/simplebar.min.css')}}" rel="stylesheet">
        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-M8S4MT3EYG');
        </script>

        <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/select2/select2.min.js')}}"></script>
        <script src="{{asset('assets/sweetalert2/sweetalert2.all.min.js')}}"></script>
        <link href="{{asset('assets/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
        <script src="{{asset('assets/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
    </head>

    <body>
        <!-- main -->
        <div>
            @include('Dashboard.Template.header')
            <div class="main-wrapper">
                <!-- navbar vertical -->
                @include('Dashboard.Template.sidebar')
                <!-- main wrapper -->
                <main class="main-content-wrapper">
                    @yield('content')
                </main>
            </div>
        </div>

        <!-- Libs JS -->

        <!-- Theme JS -->
        <script src="{{asset('assets/js/theme.min.js')}}"></script>

    </body>
</html>
