<!DOCTYPE html>
<html lang="en" @yield('html_attribute')>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @hasSection('title')
            @yield('title') | JTIK Polsub
        @elseif(isset($title))
            {{ $title }} | JTIK Polsub
        @else
            JTIK Polsub
        @endif
    </title>

    <link rel="shortcut icon" href="/img/icons/polsub.ico">

    <!--===== CSS LINK =======-->
    @vite(['resources/scss/main.scss'])

    @yield('css')

</head>

<body @yield('body_attribute')>

    @include('layouts.partials.loader')
    @include('layouts.partials.header.navbar')

    <main>
        @yield('content')

        @include('layouts.partials.cta')
    </main>

    @include('layouts.partials.footer')

    @include('layouts.partials.progress-circle')

    @yield('scripts')

    @vite(['resources/js/main.js'])

</body>

</html>
