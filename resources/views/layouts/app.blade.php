<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <section class="px-8 py-4 mb-6">
            <header class="container mx-auto">
                <div class="flex">
                    <a href="{{ route('home')}}" class="flex items-center text-sm">
                        <img class="flex-initial h-6" src="/images/logo.png" alt="Tweet">
                        <h1 class="flex-initial">
                            My Tweet
                        </h1>
                    </a>
                </div>
            </header>
        </section>

        <section class="px-8">
            <main class="container mx-auto">
                <div class="lg:flex">
                    @auth
                    <div class="lg:w-1/6">
                        @include('_sidebar_links')
                    </div>
                    @endauth
                    <div class="lg:flex-1 lg:mx-10" style="max-width:700px;">
                        @yield('content')
                    </div>

                    @auth
                    <div class="lg:w-1/6 lg:ml-10 rounded-lg bg-blue-200">
                        @include('_friends-list')
                    </div>
                    @endauth

            </main>
        </section>
    </div>
</body>

</html>