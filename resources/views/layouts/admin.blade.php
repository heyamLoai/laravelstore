<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <link href={{asset('admin/css/custom.css?v=2.1.2')}} rel="stylesheet" />
    <link href={{asset('admin/css/material-dashboard.css?v=2.1.2')}} rel="stylesheet" />


    

</head>
<body>
   
    
    <div class="wrapper">
        @include('layouts.includes.sidebar')

        <div class="main-panel">
            @include('layouts.includes.adminnav')

            <div class="content">
                
                @yield('content')
            </div>
            @include('layouts.includes.adminfooter')

        </div>
    </div>
    {{-- Scripts --}}
    <script src={{asset('admin/js/core/jquery.min.js')}}></script>
    <script src={{asset('admin/js/core/popper.min.js')}}></script>
    <script src={{asset('admin/js/core/bootstrap-material-design.min.js')}}></script>
    <script src={{asset('admin/js/plugins/perfect-scrollbar.jquery.min.js')}}></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @if(session('status'))
    <script>swal("{{ session('status') }}");  </script>

    @endif
    @yield('scripts')
</body>
</html>
