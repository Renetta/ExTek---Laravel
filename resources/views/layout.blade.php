<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ExTekProject')</title>
    <meta name="description" content="@yield('description', 'ExTekProject official website')">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Header with dropdown menu -->
    <header>
        <nav>
            <ul class="menu">
                <li><a href="{{ url('/') }}">HOME</a></li>

                <li class="dropdown">
                    <a href="{{ url('/about') }}">ABOUT ExTEK</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/about#partners') }}">OUR PARTNERS</a></li>
                        <li><a href="{{ url('/about#certificates') }}">OUR CERTIFICATES</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="{{ url('/products') }}">PRODUCTS</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/products#light-fittings') }}">LIGHT FITTINGS</a></li>
                        <li><a href="{{ url('/products#control-components') }}">CONTROL COMPONENTS</a></li>
                        <li><a href="{{ url('/products#signaling-components') }}">SIGNALING COMPONENTS</a></li>
                        <li><a href="{{ url('/products#accessories') }}">ACCESSORIES</a></li>
                        <li><a href="{{ url('/products#step-down-transformers') }}">STEP-DOWN TRANSFORMERS</a></li>
                        <li><a href="{{ url('/products#atex-enclosures') }}">ATEX-ENCLOSURES</a></li>
                    </ul>
                </li>

                <li><a href="{{ url('/downloads') }}">DOWNLOADS</a></li>
                <li><a href="{{ url('/contact') }}">CONTACT</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} ExTekProject. All rights reserved.</p>
    </footer>

</body>
</html>
