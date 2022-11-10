<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script defer src="http://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <title>Platforma</title>
        <!-- Styles -->
        <link rel="stylesheet" href="./css/main.css">
    </head>
    <body>
        <div>
            @if (Route::has('login'))
                <div>
                    @auth
                    <x-app-layout>
                    </x-app-layout>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Account</a>
                    @endauth
                </div>
            @endif
        </div>
        @livewireScripts
        @livewire('livewire-ui-modal')
    </body>
</html>
