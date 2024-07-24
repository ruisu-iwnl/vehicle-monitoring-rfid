@extends('layout')

@section('title', 'Landing')

@section('content')

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

        <div class="container mx-auto">
        <img src="{{url('/Images/CELCOR.png')}}" alt="logo" width="385"/>
        <h1 class="text-3xl font-bold">Vehicle Management System</h1>
        <p>------------------------------------------------------------</p>
        <br>
        <a href="{{ url('userlogin') }}" class="button">Login as User</a>
        <a href="{{ url('adminlogin') }}" class="button">Login as Admin</a>
    </div>


            @yield('content')
    </main>
    </div>

    @livewireScripts 
</body>
</html>

@endsection