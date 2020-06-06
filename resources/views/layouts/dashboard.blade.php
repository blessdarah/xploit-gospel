<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
   <style>
        @yield('styles');
   </style>
</head>
<body>
    <div id="app">
        <main class="container py-4">
           <div class="row">
                <div class="col-md-3">
                    @include('includes.sidebar')
                </div>
                <div class="col-md-9">
                    @yield('content')
                </div>
           </div>
        </main>
    </div>


    <script src="{{ URL::asset('js/argon-design-system.min.js') }}"></script>

    {{-- custom scripts on main pages --}}
    @yield('scripts')
</body>
</html>
