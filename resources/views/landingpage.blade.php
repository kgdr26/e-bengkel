<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Codescandy" name="author">
        <title>{{$title}}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('assets/daterangepicker/datepicker.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/daterangepicker/daterangepicker.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/daterangepicker/datepicker.min.css')}}">
        <link href="{{asset('assets/libs/slick-carousel/slick/slick.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/libs/slick-carousel/slick/slick-theme.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/libs/tiny-slider/dist/tiny-slider.css')}}" rel="stylesheet">

        <!-- Favicon icon-->
        <link rel="shortcut icon" type="image/x-icon" href="">


        <!-- Libs CSS -->
        <link href="{{asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/libs/feather-webfont/dist/feather-icons.css')}}" rel="stylesheet">
        <link href="{{asset('assets/libs/simplebar/dist/simplebar.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/select2/select2.min.css')}}" rel="stylesheet" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">
        <style>
            /* Preloader */
            .preload-wrapper {
            z-index: 9999999999;
            position: fixed;
            top: 45%;
            left: 45%;
            right: 0rem;
            bottom: 0;
            background: transparent;
            overflow: hidden;
            width: 10rem;
            height: 10rem;
            display: none;
            }

            .spinner-border {
            display: inline-block;
            width: 10rem;
            height: 10rem;
            vertical-align: -.125em;
            border: 1rem solid #012970;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: .75s linear infinite spinner-border;
            animation: .75s linear infinite spinner-border;
            }

            .action-input{
            cursor: pointer;
            }

            /* end Pre loader */
        </style>
        <script src="{{ asset ('assets/js/moment.min.js')}}"></script>
        <script src="{{ asset ('assets/js/id.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/html2canvas.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
        <script src="{{ asset('assets/sweetalert2/sweetalert2.all.min.js')}}"></script>
        <script src="{{ asset('assets/select2/select2.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/daterangepicker/daterangepicker.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/daterangepicker/datepicker.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/daterangepicker/bootstrap-datepicker.js')}}"></script>

        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
        <script>
            $(document).ready(function(){
                var url      = window.location.href;
                var urlsplit = url.split('/');
                var urlget   = urlsplit[3];
                $(document).ajaxStart(function(){
                    if(urlget.includes("controlprosess") != true){
                        $(".preload-wrapper").css("display", "block");
                    }
                });
                $(document).ajaxComplete(function(){
                    if(urlget.includes("controlprosess") != true){
                        $(".preload-wrapper").css("display", "none");
                    }
                });
            });
        </script>
    </head>
    <body>

        <div class="preload-wrapper">
            <div class="spinner-border text-danger" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
        
        @include('LandingPage.Template.header')
        <main>
            @yield('content')
        </main>
        @include('LandingPage.Template.footer')

        <!-- Theme JS -->
        <script src="{{asset('assets/js/theme.min.js')}}"></script>
        <script src="{{asset('assets/libs/jquery-countdown/dist/jquery.countdown.min.js')}}"></script>
        <script src="{{asset('assets/js/vendors/countdown.js')}}"></script>
        <script src="{{asset('assets/libs/slick-carousel/slick/slick.min.js')}}"></script>
        <script src="{{asset('assets/js/vendors/slick-slider.js')}}"></script>
        <script src="{{asset('assets/libs/tiny-slider/dist/min/tiny-slider.js')}}"></script>
        <script src="{{asset('assets/js/vendors/tns-slider.js')}}"></script>
        <script src="{{asset('assets/js/vendors/zoom.js')}}"></script>
        <script src="{{asset('assets/js/vendors/increment-value.js')}}"></script>
    </body>
</html>