<!DOCTYPE html>
<html>

<head>
    <title>PD Stefanus</title>
    <meta property="og:title" content="PD Stefanus Grogol" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="images/logo.png" type="icon/png" sizes="32x32" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        data-tag="font" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <script src="https://kit.fontawesome.com/d548bf050f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toast.css') }}">
    <link rel="stylesheet" href="{{ asset('css/alert.css') }}">
    @section('css')
        <style data-tag="reset-style-sheet">
            html {
                line-height: 1.15;
            }

            body {
                margin: 0;
            }

            * {
                box-sizing: border-box;
                border-width: 0;
                border-style: solid;
            }

            p,
            li,
            ul,
            pre,
            div,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            figure,
            blockquote,
            figcaption {
                margin: 0;
                padding: 0;
            }

            button {
                background-color: transparent;
            }

            button,
            input,
            optgroup,
            select,
            textarea {
                font-family: inherit;
                font-size: 100%;
                line-height: 1.15;
                margin: 0;
            }

            button,
            select {
                text-transform: none;
            }

            button,
            [type="button"],
            [type="reset"],
            [type="submit"] {
                -webkit-appearance: button;
            }

            button::-moz-focus-inner,
            [type="button"]::-moz-focus-inner,
            [type="reset"]::-moz-focus-inner,
            [type="submit"]::-moz-focus-inner {
                border-style: none;
                padding: 0;
            }

            button:-moz-focus,
            [type="button"]:-moz-focus,
            [type="reset"]:-moz-focus,
            [type="submit"]:-moz-focus {
                outline: 1px dotted ButtonText;
            }

            a {
                color: inherit;
                text-decoration: inherit;
            }

            input {
                padding: 2px 4px;
            }

            img {
                display: block;
            }

            html {
                scroll-behavior: smooth
            }
        </style>
        <style data-tag="default-style-sheet">
            html {
                font-family: Poppins;
                font-size: 16px;
            }

            body {
                font-weight: 400;
                font-style: normal;
                text-decoration: none;
                text-transform: none;
                letter-spacing: normal;
                line-height: 1.55;
                color: var(--dl-color-gray-black);
                background-color: var(--dl-color-gray-white);

            }
        </style>
    @show

</head>

<body>
    <div class="home-container">

        @include('navbar')

        @include('toast')

        @yield('content')

        {{-- @include('footer') --}}

    </div>

    @section('js')
    @show
</body>

</html>
