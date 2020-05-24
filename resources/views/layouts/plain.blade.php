<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
    @yield('styles')
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <script src="{{ URL::asset('js/argon-design-system.min.js') }}"></script>

    {{-- custom scripts on main pages --}}
    @yield('scripts')
</body>
</html>
