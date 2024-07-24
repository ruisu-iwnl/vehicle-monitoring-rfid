@extends('layout')

@section('title', 'accountrecovery')

@section('content')

<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full max-w-lg">
        <main class="py-4 text-center">
            <div class="container mx-auto">
                <img src="{{url('/Images/CELCOR.png')}}" alt="logo" width="385" class="mx-auto"/>
                <h1 class="text-3xl font-bold mt-4">Account Recovery</h1>
                <div class="border-b-2 border-gray-300 my-4"></div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email Address</label>
                    <input type="email" id="email" placeholder="Example: Juandelacruz@gmail.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <a href="{{ url('') }}" class="button inline-block w-full text-center">Send Recovery Email</a>
                </div>
            </div>
            @yield('content')
        </main>
    </div>
    @livewireScripts 
</body>

@endsection
