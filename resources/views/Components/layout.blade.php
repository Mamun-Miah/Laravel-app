<!DOCTYPE html >
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DrxDroid</title>
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
        @vite('resources/css/app.css')
        <style>

        </style>
    </head>
    <body class="">
        <header class="">
            <nav>
                <div class="navbar  m-auto max-w-[95%]">
                    <div class="lg:navbar-start">
                    <div class="dropdown">
                        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            class="inline-block h-5 w-5 stroke-current">
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </div>
                        <ul
                        tabindex="0"
                        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow text-xl">
                        <li><a>Home</a></li>
                        <li>
                            <a>About</a>
                            <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                            </ul>
                        </li>
                        <li><a>Contact</a></li>
                        </ul>
                    </div>
                    <a href=""><img src="{{asset('assets/images/logo.png')}}" alt="" class="w-auto h-[60px]"></a>
                    </div>
                    <div class="navbar-center hidden lg:flex">
                    <ul class="menu menu-horizontal px-1 text-xl">
                        <li><a>Home</a></li>
                        <li>
                        <details>
                            <summary>About</summary>
                            <ul class="p-2 z-[1]">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                            </ul>
                        </details>
                        </li>
                        <li><a>Contact</a></li>
                    </ul>
                    </div>
                    <div class="navbar-end max-md:hidden">
                    <a class="btn btn-outline btn-error ">Subscribe</a>
                    </div>
                </div>
            </nav>
        </header>
        {{$slot}}
<x-footer/>

