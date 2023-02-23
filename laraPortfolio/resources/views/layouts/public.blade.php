<!DOCTYPE html>
<html lang="en">

<head>
    <!----------
Project Name: Modern Portfolio Website
Description: A complete responsive modern portfolio website design
             by using HTML CSS and Vanilla JavaScript from scratch.
Author: Md Al Amin Hossen
Github: https://github.com/MdRasen
License: MIT License
Copyright: 2023 ©MdRasen
---------->

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('public-assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('public-assets/css/blog-single.css') }}" />
    <link rel="stylesheet" href="{{ asset('public-assets/css/skins/color-1.css') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <!-- Style Switcher -->
    <link rel="stylesheet" href="{{ asset('public-assets/css/skins/color-1.css') }}" class="alternate-style"
        title="color-1" disabled />
    <link rel="stylesheet" href="{{ asset('public-assets/css/skins/color-2.css') }}" class="alternate-style"
        title="color-2" disabled />
    <link rel="stylesheet" href="{{ asset('public-assets/css/skins/color-3.css') }}" class="alternate-style"
        title="color-3" disabled />
    <link rel="stylesheet" href="{{ asset('public-assets/css/skins/color-4.css') }}" class="alternate-style"
        title="color-4" disabled />
    <link rel="stylesheet" href="{{ asset('public-assets/css/skins/color-5.css') }}" class="alternate-style"
        title="color-5" disabled />

    <link rel="stylesheet" href="{{ asset('public-assets/css/style-switcher.css') }}" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('public-assets/images/fabicon.png') }}" />
</head>

<body class="dark">
    <!-- Main Container Start -->
    <div class="main-container">
        @include('layouts.inc.public-aside')

        @include('layouts.inc.public-main')
    </div>
    <!-- Main Container End -->

    @include('layouts.inc.public-switcher')

    <!-- Custom JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('public-assets/js/script.js') }}"></script>
    <script src="{{ asset('public-assets/js/style-switcher.js') }}"></script>
</body>

</html>
