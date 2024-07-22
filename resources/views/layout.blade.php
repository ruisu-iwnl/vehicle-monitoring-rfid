<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- dynamic title handling !-->
    <title>@yield('title', 'layout')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <!-- tailwind and livewire import !-->
    @vite('resources/css/app.css') 
    @livewireStyles
</head>

<!-- 

ETO YUNG LAYOUT NG MAGIGING DESIGN NG KARAMIHAN NG PAGES NAGAGAWIN MO. PARA IWAS REDUNDANCY SA CODE. IEEXTEND NIYA YUNG DESIGN SA PAGE NA GUSTO MO.

!-->

<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <main class="py-4 text-center">
            
            @yield('content')
        </main>
    </div>

    <!--  livewire import !-->
    @livewireScripts 
</body>
</html>
