<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Pegotec CMS test">
    <meta name="author" content="Saroj Khatri">
    <title>Pegotec Test @yield('page-title')</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <style type="text/css">
        .spacer {
            margin-top: 100px;
        }
    </style>
</head>

<body>
    @include('dashboard.layout.nav')

    <main role="main" class="container">

        <div class="starter-template">
            @yield('content')
        </div>
    </main>
    {{-- js --}}
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    @yield('after-scripts')
</body>
</html>
