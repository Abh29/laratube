<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
   
    <div id="app" class="wrapper">
        <!-- Sidebar  -->
       
        @include('layouts.hidden_sideBar')

        <!-- Page Content  -->
        <div id="content">
            
            @include('layouts.navbar')

            @include('layouts.fixed_sideBar')


            <div id="page_content">
                
                <main class=" container-fluid my-4">
                    @yield('content')
               </main>

               <div style="height: 300px"></div>
    
    
               
            </div>
        
        
        </div>
    </div>

    <div class="overlay" v-on:click="hide_again"></div>

    

</body>
</html>