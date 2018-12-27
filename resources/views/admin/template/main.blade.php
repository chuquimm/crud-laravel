<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', "Sin nombre") | CRUD</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="{{ asset('plugins\materialize\css\materialize.css') }}">
</head>
<body>
    @include('admin.template.partials.nav')
    <section class="container">
        @yield('content')
    </section>

    <footer>
        @include('admin.template.partials.footer')
    </footer>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="{{ asset('plugins\jquerry\js\jquery-3.3.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins\materialize\js\materialize.js') }}"></script>
    @yield('script')
</body>
</html>