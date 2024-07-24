@extends('layout')

@section('title', 'Paki-ayos')

@section('content')
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <main class="py-4 text-center">
            <div class="container mx-auto">
                <img src="{{ url('/Images/CELCOR.png') }}" alt="logo" width="385" class="mx-auto mb-4"/>
                <h1 class="text-3xl font-bold mb-4">Vehicle Management System</h1>
                <hr class="border-gray-300 mb-4">
                <div class="space-x-4">
                    <a href="{{ url('userlogin') }}" class="bg-blue-700 text-white py-2 px-4 rounded hover:bg-blue-500">Login as User</a>
                    <a href="{{ url('adminlogin') }}" class="bg-blue-700 text-white py-2 px-4 rounded hover:bg-blue-500">Login as Admin</a>
                </div>
            </div>
        </main>
    </div>
    @livewireScripts
</body>
@endsection
