<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/template.css', 'resources/js/app.js'])
    </head>
    <body>

    <main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">				
                {{ $slot }}                  
            </div>
        </div>
    </main>                
    </body>
</html>
