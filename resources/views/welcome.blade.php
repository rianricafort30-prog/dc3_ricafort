<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ricafort Showroom</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-slate-950 text-white">
        <div class="relative min-h-screen overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-amber-950"></div>
            <div class="absolute right-0 top-0 h-96 w-96 rounded-full bg-amber-400/10 blur-3xl"></div>

            <header class="relative border-b border-white/10">
                <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5">
                    <a href="{{ url('/') }}" class="text-lg font-semibold tracking-wide">Ricafort Showroom</a>
                    <div class="flex items-center gap-3">
                        @auth
                            <a href="{{ route('dashboard') }}" class="rounded-md bg-amber-400 px-4 py-2 text-sm font-semibold text-slate-950 hover:bg-amber-300">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="px-3 py-2 text-sm font-medium text-slate-200 hover:text-white">
                                Log in
                            </a>
                            <a href="{{ route('register') }}" class="rounded-md bg-amber-400 px-4 py-2 text-sm font-semibold text-slate-950 hover:bg-amber-300">
                                Register
                            </a>
                        @endauth
                    </div>
                </nav>
            </header>

            <main class="relative mx-auto flex max-w-7xl items-center px-6 py-20 sm:py-28 lg:min-h-[calc(100vh-81px)]">
                <div class="max-w-3xl">
                    <p class="mb-5 text-sm font-semibold uppercase tracking-[0.25em] text-amber-400">Vehicles for every journey</p>
                    <h1 class="text-5xl font-bold leading-tight sm:text-7xl">Find the drive that feels right.</h1>
                    <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300">
                        Explore our showroom, discover available vehicles, and connect with our team when you are ready.
                    </p>
                    <div class="mt-9 flex flex-wrap gap-4">
                        @auth
                            <a href="{{ route('showroom') }}" class="rounded-md bg-amber-400 px-6 py-3 font-semibold text-slate-950 hover:bg-amber-300">
                                Browse showroom
                            </a>
                        @else
                            <a href="{{ route('register') }}" class="rounded-md bg-amber-400 px-6 py-3 font-semibold text-slate-950 hover:bg-amber-300">
                                Get started
                            </a>
                        @endauth
                        <a href="{{ route('contact') }}" class="rounded-md border border-white/20 px-6 py-3 font-semibold text-white hover:border-white/40 hover:bg-white/5">
                            Contact us
                        </a>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
