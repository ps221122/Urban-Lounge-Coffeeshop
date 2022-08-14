<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('components.head')

<body>
    @include('components.nav')
     @yield ('content')
    @include('components.footer')
</body>

</html>
