@extends('layout-dashboard')

@section('title', 'Dashboard')
    <div class="bg-gray-100 min-h-screen flex items-center justify-center p-6">
        <div class="bg-white shadow-lg rounded-lg w-full max-w-6xl overflow-hidden">
            <header class="bg-blue-500 text-white p-4 flex items-center justify-between">
                <h1 class="text-2xl font-bold">Dashboard</h1>
                <img src="{{ url('/Images/CELCOR.png') }}" alt="logo" class="h-12"/>
            </header>
            <div class="flex">
                <aside class="w-1/4 bg-gray-200 p-6">
                    <div class="flex flex-col items-start mb-8 space-y-4">
                        <h2 class="text-xl font-semibold mb-4">Vehicle Management System</h2>
                        <ul class="space-y-3">
                            <li>
                                <a href="{{ url('/registeredusers') }}" class="flex items-center text-blue-600 hover:text-blue-800">
                                    <i class="fas fa-users mr-2"></i> Registered Users
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/logs') }}" class="flex items-center text-blue-600 hover:text-blue-800">
                                    <i class="fas fa-list mr-2"></i> Activity Logs
                                </a>
                            </li>
                            <li>
                                <form method="POST" action="{{ url('/logout') }}" class="flex items-center">
                                    @csrf
                                    <button type="submit" class="flex items-center text-blue-600 hover:text-blue-800">
                                        <i class="fas fa-sign-out-alt mr-2"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </aside>
                <main class="w-3/4 p-8">
                    @yield('main-content')
                </main>
            </div>
        </div>
    </div>

    @livewireScripts

