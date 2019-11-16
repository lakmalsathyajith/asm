<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('admin.layouts.partials.head')
</head>
<body class="sidebar-mini layout-fixed control-sidebar-open text-sm">
    <div class="wrapper">
        @include('admin.layouts.partials.topNavigation')
        @include('admin.layouts.partials.sidebar')

        <div class="content-wrapper">
            @include('admin.layouts.partials.title')
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>
    </div>
    @include('admin.layouts.scripts')
</body>
</html>
