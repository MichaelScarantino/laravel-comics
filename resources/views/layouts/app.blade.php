<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    
    {{-- Include Header partial --}}
    @include('partials.header')

    {{-- Main --}}
    <main class="@yield('main_classes')">
        @yield('main_content')
    </main>

    {{-- Include Footer partial --}}
    @include('partials.footer')


</body>
</html>