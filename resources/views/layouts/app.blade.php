<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>learning</title>


</head>

<body >

<!-- Navigation -->
<nav>
    <ul class="flex">
        <li class="mr-6">
            <a class="text-blue-500 hover:text-blue-800" href="{{url('dashboard')}}">Learning</a>
        </li>
        <li class="mr-6">
            <a class="text-blue-500 hover:text-blue-800" href="#">Link</a>
        </li>
        <li class="mr-6">
            <a class="text-blue-500 hover:text-blue-800" href="#">Link</a>
        </li>
        <li class="mr-6">
            <a class="text-gray-400 cursor-not-allowed" href="#">Disabled</a>
        </li>
    </ul>
{{--    <div class="">--}}
{{--        <a class="" href="{{url('dashboard')}}">Learning</a>--}}
{{--        <button class="" type="button" data-toggle="" data-target=""--}}
{{--                aria-controls="" aria-expanded="" aria-label="">--}}
{{--            <span class=></span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse" id="navbarResponsive">--}}
{{--            <ul class="navbar-nav ml-auto">--}}
{{--                <li class="nav-item active">--}}
{{--                    <a class="nav-link" href="{{route('index') }}">Home--}}
{{--                        <span class="sr-only">(current)</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{route('about') }}">About</a>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{route('services') }}">Services</a>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{route('contact') }}">Contact</a>--}}
{{--                </li>--}}
{{--                --}}
{{--                @auth--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{route('categories.index') }}">Category</a>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{route('products.index') }}">Products</a>--}}
{{--                    </li>--}}
{{--                @endauth--}}
{{--                @guest--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{route('login') }}">Login</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{route('register') }}">Register</a>--}}
{{--                    </li>--}}
{{--                @endguest--}}

{{--                @if(auth()->check())--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link"--}}
{{--                           href="#"--}}
{{--                           onclick="document.getElementById('layout-form').submit()">--}}
{{--                            Logout--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <form action="{{route('logout')}}" method="post" id="layout-form">--}}
{{--                        @csrf--}}
{{--                    </form>--}}
{{--                @endif--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
</nav>

<div class="">
    @yield("content")
</div>

<!-- Bootstrap core JavaScript -->
</body>
</html>
