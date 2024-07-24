@extends('layout')

@section('title', 'userlogin')

@section('content')
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <main class="py-4 text-center">
            <div class="container mx-auto">
                <img src="{{ url('/Images/CELCOR.png') }}" alt="logo" width="385" class="mx-auto mb-4"/>
                <h1 class="text-2xl font-bold mb-4">User Login</h1>
                <hr class="border-gray-300 mb-4">
                <div class="mb-4 flex flex-col items-center">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                    <br>
                    <input type="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Example: Juandelacruz@gmail.com">
                </div>
                <div class="mb-4 flex flex-col items-center">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter your password">
                    <a href="{{ url('accountrecovery') }}" class="text-blue-500 hover:text-blue-700 text-sm">Forgot Password?</a>
                </div>
                <div class="mb-4 flex flex-col items-center">
                    <button class="bg-blue-700 text-white py-2 px-4 rounded hover:bg-blue-500 focus:outline-none focus:shadow-outline w-full">Login</button>
                </div>
                <a href="{{ url('') }}" class="text-blue-500 hover:text-blue-700 text-sm">Back to Landing Page</a>
                <p class="mt-4 text-sm">Don't have an account? <a href="{{ url('userregistration') }}" class="text-blue-500 hover:text-blue-700">Create one</a></p>
            </div>
        </main>
    </div>
    @livewireScripts
</body>
@endsection
