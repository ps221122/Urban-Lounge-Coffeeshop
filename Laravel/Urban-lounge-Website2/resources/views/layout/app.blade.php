<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('component.head')

<body class="font-serif bg-slate-100">
    @include('component.nav')
    @yield ('content')
    @include('component.footer')
</body>

</html>
