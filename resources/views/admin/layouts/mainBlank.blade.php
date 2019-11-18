<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('admin.layouts.partials.head')
</head>
<body>
    @yield('content')
    @include('admin.layouts.partials.scripts')
</body>
</html>
