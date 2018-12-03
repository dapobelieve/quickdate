<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Define Charset -->
    <meta charset="utf-8">

    <!-- Page Title -->
    <title>Quick Date::Paul</title>

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page Description and Author -->
    <meta name="description" content="content description">
    <meta name="author" content="Dapo Believe">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    
    <link href="/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/assets/css/bootstrap/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Custom Template Styles -->
    <link href="/assets/css/style.css" rel="stylesheet" media="screen">
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">

    <script>
        window.Laravel = {!!
                json_encode([
                    'key' => [
                        'pusher' => config('broadcasting.connections.pusher.key')
                    ]
                ])
            !!}
    </script>

    <!-- Media Queries -->
    <link href="/assets/css/media-queries.css" rel="stylesheet" media="screen">
    <style>
        body.noScroll { /* ...or body.dialogShowing */
          overflow: hidden !important;
        }
        body {
            overflow: hidden !important;
        }
    </style>

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="/assets/img/icons/favicon.ico">
    <link rel="apple-touch-icon" href="/assets/img/icons/apple-touch-icon.html">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/icons/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/icons/apple-touch-icon-114x114.html">
</head>


<body>
    <div id="app">
        <app></app>
    </div>
    <!--End Copyright-->

<script  src="/assets/js/jquery-1.8.2.min.js"></script>
<script src="/assets/js/bootstrap.js" ></script>
<script src="/js/app.js"></script>
<script src="/assets/js/bootstrap-select.min.js" ></script>
<script  src="/assets/js/responsiveslides.min.js"></script>

</body>
</html>