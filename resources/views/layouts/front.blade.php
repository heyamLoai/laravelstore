<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <link href={{asset('cms/css/custom.css')}} rel="stylesheet" /> 
    <link href={{asset('cms/css/bootstrap.css')}} rel="stylesheet" />

    <link href={{asset('css/owl.carousel.min.css')}} rel="stylesheet" />
    <link href={{asset('css/owl.theme.default.min.css')}} rel="stylesheet" />


    {{-- Font awesom --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Romanesco&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="undefined" crossorigin="anonymous">

    <style>
        a{
            text-decoration: none !important;
        }
    </style>


    {{-- <link href={{asset('admin/css/material-dashboard.css?v=2.1.2')}} rel="stylesheet" //?v=2.1.2  ?v=2.1.2 /> --}}

    



    

</head>
<body>
   
    
@include('layouts.includes.frontnavbar')
            <div class="content">
                @yield('content')
            </div>

    {{-- Scripts --}}
    <script src={{asset('cms/js/bootstrap.bundle.min.js')}}></script>
    <script src={{asset('cms/js/jquery-3.6.1.min.js')}}></script>
    <script src={{asset('cms/js/owl.carousel.min.js')}}></script>



    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @if(session('status'))
    <script>swal("{{ session('status') }}");  </script>

    @endif
    @yield('scripts')
</body>
</html>
