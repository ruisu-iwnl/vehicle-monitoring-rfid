@extends('layout')

@section('title', 'userlogin')

@section('content')
    <h1 class="text-3xl font-bold underline">
     Vehicle Management System
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
        <img src="{{url('/Images/Celcor Logo.jpg')}}" alt="logo" class="img-size-50 mr-3 img-circle border:1px"/>
        <h1>User Login</h1>
        <p>--------------------------------------------------</p>
        <div class="form-group">
            <label class="label" for="email">Email Address</label>
                <input type="email" id="email" class="form-control" placeholder="Email Address" size="25">
            </div>
            <div class="form-group">
            <label class="label" for="password" size="30">Password</label>
                <input type="password" id="password" class="form-control" placeholder="Enter your password" size="30">
                <br>
                <a href="{{ url('') }}" class="link">Forgot Password?</a>
            </div>
        <button class="button">Login</button>
        <br>
            <a href="{{ url('Landing') }}" class="link">Back to Landing Page</a>
            <br>
            <p>Don't have an account? <a href="{{ url('') }}" class="link">Create one</a></p>
    </div>
            @yield('content')
        </main>
    </div>

    @livewireScripts 
</body>
</html>

@endsection
