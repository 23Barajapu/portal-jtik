<!DOCTYPE html>
<html lang="en" @yield('html_attribute')>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title : 'O-Tech' }}</title>

    @if (isset($logo2))
        <link rel="shortcut icon" href="/img/icons/polsub.ico">
    @elseif(isset($logo3))
        <link rel="shortcut icon" href="/img/icons/vl-fav-ic-1.3.svg">
    @else
        <link rel="shortcut icon" href="/img/icons/vl-fav-ic-1.1.svg">
    @endif


    <!--===== CSS LINK =======-->
    @vite(['resources/scss/main.scss'])

    @yield('css')

</head>

<body @yield('body_attribute')>

    @yield('header')

    @yield('content')


    @yield('scripts')

    @vite(['resources/js/main.js'])

</body>

</html>
