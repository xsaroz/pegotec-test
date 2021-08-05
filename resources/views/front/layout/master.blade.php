
<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

        <title>Top navbar example for Bootstrap</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbar-static/">

        <!-- Bootstrap core CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">

        <style type="text/css">
        .spacer {
            margin-top: 100px;
        }
    </style>
</head>

<body>
    @include('front.layout.nav')
    <main role="main" class="container">
        @yield('content')
    </main>
</body>
</html>
