<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Layout')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    
    <div class="bg-gray-100 min-h-screen flex flex-col">
    <!-- Fixed Header -->
    <header class="bg-blue-600 text-white p-4 flex items-center justify-between fixed top-0 left-0 w-full z-10">
        <img src="{{ url('/Images/CELCOR.png') }}" alt="logo" class="h-12"/>
        <h1 class="text-xl font-bold">Dashboard</h1>
    </header>

    <!-- Main Container with Flex Layout -->
    <div class="flex flex-1 mt-16"> <!-- mt-16 to avoid overlap with the fixed header -->
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-lg rounded-r-lg flex flex-col">
            <nav class="flex-1">
                <div class="p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Vehicle Management System</h2>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ url('/registeredusers') }}" class="flex items-center px-4 py-2 rounded-md text-gray-700 hover:bg-gray-200 hover:text-blue-600">
                                <i class="fas fa-users mr-3"></i> Registered Users
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/logs') }}" class="flex items-center px-4 py-2 rounded-md text-gray-700 hover:bg-gray-200 hover:text-blue-600">
                                <i class="fas fa-list mr-3"></i> Activity Logs
                            </a>
                        </li>
                        <li>
                            <form method="POST" action="{{ url('/logout') }}" class="flex items-center">
                                @csrf
                                <button type="submit" class="flex items-center px-4 py-2 rounded-md text-gray-700 hover:bg-gray-200 hover:text-blue-600">
                                    <i class="fas fa-sign-out-alt mr-3"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            @yield('content')
        </main>
    </div>
</div>

    @livewireScripts 
</body>
</html>
