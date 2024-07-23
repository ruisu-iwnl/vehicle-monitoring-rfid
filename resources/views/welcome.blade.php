@extends('layout')

@section('title', 'Landing')

@section('content')
    <h1 class="text-3xl font-bold underline">
        landing page
    </h1>

    <body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <main class="py-4 text-center">

    <style>
        .button {
            background-color: #003399;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #48b2e9;
        }

        .link {
            color: #00698f;
            text-decoration: none;
        }
        
       .link:hover {
            color: #005073;
        }

    </style>

        <div class="container">
        <img src="{{url('/Images/Celcor Logo.jpg')}}" alt="logo" width="400"/>
        <h1 class="text-3xl font-bold">Vehicle Management System</h1>
        <p>------------------------------------------------------------</p>
        <button class="button">Login as User</button>
        <button class="button">Login as Admin</button>
    </div>

            @yield('content')
        </main>
    </div>

    @livewireScripts 
</body>
</html>

@endsection
