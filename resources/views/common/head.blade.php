<head>
    <title>{{isset($meta['title'])?$meta['title']:'Apartment Stays Melbourne'}}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="shortlink" href="{{url()->current()}}" />
    <link rel="canonical" href="{{url()->current()}}" />

    <!-- seo tags -->
    <meta property="og:locale" content="{{ app()->getLocale() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:site_name" content="Apartment Stays Melbourne" />
    <meta name="twitter:card" content="summary" />


    @if(isset($meta['image']))
    <meta property="og:image" content="{{$meta['image']}}" />
    @else
    <meta property="og:image" content="{{asset('images/share-image.jpg')}}" />
    @endif

    @if(isset($meta['title']))
    <meta property="og:title" content="{{$meta['title']}}" />
    <meta name="twitter:title" content="{{$meta['title']}}" />
    @else
    <meta property="og:title" content="Apartment Stays Melbourne" />
    <meta name="twitter:title" content="Apartment Stays Melbourne" />

    @endif

    @if(isset($meta))
    <meta name="description" content="{{$meta['description']}}" />
    <meta property="og:description" content="{{$meta['description']}}" />
    <meta name="keywords" content="{{$meta['keywords']}}" />
    @else
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta property="og:description" content="" />
    @endif
    <meta name="robots" content="index, follow" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- fevicon -->
    <link rel="shortcut icon" href="{{asset('images/asm-favicon.png')}}" type="image/x-icon">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fonts/themify-icons/themify-icons.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    {{-- <link href="navbar.css" rel="stylesheet"> --}}

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/placeholder-loading@0.2.0/dist/css/placeholder-loading.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">

    <!-- internal styles -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" />
    <link rel="stylesheet" href="{{asset('css/swipper.css')}}" />
    <link rel="stylesheet" href="{{asset('css/lightbox.min.css')}}" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>