<!DOCTYPE html>
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html prefix="og: http://ogp.me/ns#" class="no-js" lang="{{ app()->getLocale() }}">
<!--<![endif]-->

<head>
    @include('common.head')

</head>

<body>
    <div class="flexbox default">
        <div>
            <div class="nb-spinner"></div>
        </div>
    </div>
    <div class="mobile-rotate-wrap" style="display:none;">
        <p class="rotate"><i class="fa fa-mobile-phone"></i><br>Please Rotate Your Device.<br>[Portrait Mode]</p>
    </div>
    <div id="app">
        @include('common.header')
        {{$lang = app()->getLocale()}}
        <header-loader lang="{{ $lang }}"></header-loader>
        @yield('content')
    </div>
    @include('common.footer')
</body>

</html>