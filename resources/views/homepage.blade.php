<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TKI</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css','resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="antialiased">
        @include('partials._nav')

        @include('components.hero')

        <main class="bg-black bg-opacity-25">
            <div class="flex flex-col md:flex-row m-4">
                @include('components.side_hero')
                @include('components.form')
            </div>
            <div class="text-white bg-[#F7BE38] font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 mb-5 w-96">
                DOWNLOAD YOUR PREVIEW
            </div>
        </main>

        @include('components.facts_and_figures')

        @include('partials._footer')

        @livewireScripts
    </body>

</html>
