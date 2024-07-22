@extends('layout')

@section('title', 'adminlogin')

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
    </style>
    <div class="container">
        <img src="{{url('/Images/Celcor Logo.jpg')}}" alt="logo" class="img-size-50 mr-3 img-circle"/>
        <h1>Admin Login</h1>
        <p>--------------------------------------------------</p>
        <form>
        <div class="form-group">
                <input type="email" class="form-control" placeholder="Email Address">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password">
            </div>
        <button class="button">Login</button>
        <br>
        <a href="{{ url('Landing') }}" class="back-link">Back to Landing Page</a>
        <br>
        <p>Don't have an account? <a href="{{ route('') }}" class="create-account">Create one</a></p>
        </form>
    </div>
            @yield('content')
        </main>
    </div>

    @livewireScripts 
</body>
</html>

@endsection
