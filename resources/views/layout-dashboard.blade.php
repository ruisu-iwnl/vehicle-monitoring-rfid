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
    <!-- Fixed Header -->
    <header class="bg-blue-600 text-white p-4 flex items-center justify-between fixed top-0 left-0 w-full z-10 shadow-lg rounded-b-lg">
        <img src="{{ url('/Images/CELCOR.png') }}" alt="logo" class="h-12"/>
        <h1 class="text-xl font-bold">Dashboard</h1>
    </header>

    <!-- Main Container with Flex Layout -->
    <div class="flex flex-1 mt-16"> <!-- mt-16 to avoid overlap with the fixed header -->
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-2xl rounded-r-lg flex flex-col">
            <nav class="flex-1">
                <div class="p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Vehicle Management System</h2>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ url('/dashboard') }}" class="flex items-center px-4 py-2 rounded-md text-gray-700 hover:bg-gray-200 hover:text-blue-600">
                                <i class="fas fa-users mr-3"></i> Data Analytics
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/records') }}" class="flex items-center px-4 py-2 rounded-md text-gray-700 hover:bg-gray-200 hover:text-blue-600">
                                <i class="fas fa-users mr-3"></i> Time In / Time Out
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/users') }}" class="flex items-center px-4 py-2 rounded-md text-gray-700 hover:bg-gray-200 hover:text-blue-600">
                                <i class="fas fa-list mr-3"></i> Registered Users
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/activitylogs') }}" class="flex items-center px-4 py-2 rounded-md text-gray-700 hover:bg-gray-200 hover:text-blue-600">
                                <i class="fas fa-list mr-3"></i> Activity Logs
                            </a>
                        </li>
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <li>
                            <button id="logout-button" class="flex items-center px-4 py-2 rounded-md text-gray-700 hover:bg-gray-200 hover:text-blue-600">
                                <i class="fas fa-sign-out-alt mr-3"></i> Logout
                            </button>
                        </li>
                    </ul>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8 bg-white shadow-2xl rounded-l-lg">
            @yield('content')
        </main>
    </div>

    <!-- Logout Confirmation Modal -->
    <div id="logout-modal" class="fixed inset-0 bg-gray-600 bg-opacity-50 z-50 hidden">
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-white p-6 rounded-lg shadow-lg w-96">
                <h2 class="text-lg font-semibold mb-4">Confirm Logout</h2>
                <p class="mb-4">Are you sure you want to logout?</p>
                <div class="flex justify-end space-x-4">
                    <form method="POST" action="{{ url('/logout') }}">
                        @csrf
                        <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">Logout</button>
                    </form>
                    <button id="cancel-logout" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    @livewireScripts 
    <script>
        document.getElementById('logout-button').addEventListener('click', function() {
            document.getElementById('logout-modal').classList.remove('hidden');
        });

        document.getElementById('cancel-logout').addEventListener('click', function() {
            document.getElementById('logout-modal').classList.add('hidden');
        });
    </script>
</body>
</html>
