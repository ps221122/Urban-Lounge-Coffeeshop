<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('components.head')

<body class="font-serif subpixel-antialiased">
    @include('components.nav')
    @yield ('content')
    @include('components.footer')
</body>

</html>
