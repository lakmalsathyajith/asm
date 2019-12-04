<!DOCTYPE html>
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html prefix="og: http://ogp.me/ns#" class="no-js">
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
    @include('common.header')
    <div id="app">
        <header-loader></header-loader>
        @yield('content')
    </div>
    @include('common.footer')
</body>

</html>