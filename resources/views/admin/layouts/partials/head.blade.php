<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ASM') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ url('/css/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('/css/plugins/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ url('/css/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

    <!-- custom css -->
    <style type="text/css">
        .tox-notifications-container {
            display: none;
        }
        .tmce {
            min-height: 350px;
        }
        a { color: inherit; }
    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ url('js/plugins/select2/select2.full.min.js') }}" defer></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>