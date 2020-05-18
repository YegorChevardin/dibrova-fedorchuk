<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Dibrova-Fedorchuk web site</title>
        <meta name="author" content="Yegor Chevardin"/>
        <meta name="keywords" content=""/>
        <meta name="description" content="Our home web page that helps take care about our guests"/>
        @include('main.layout.header_css')
    </head>
    <body>
        @include('main.layout.header')
        @yield('content')
        @include('main.layout.footer')
        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
        @include('main.layout.footer_scripts')
    </body>
</html>
