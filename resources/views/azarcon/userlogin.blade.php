@extends('layout')

@section('title', 'userlogin')

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
    <div class="container">
        <img src="{{url('/Images/CELCOR.png')}}" alt="logo" width="385"/>
        <h1>User Login</h1>
        <p>--------------------------------------------------</p>
        <div class="form-group">
            <label class="label" for="email">Email Address</label>
                <input type="email" id="email" class="form-control" placeholder="Example: Juandelacruz@gmail.com" size="25">
            </div>
            <div class="form-group">
            <label class="label" for="password" size="30">Password</label>
                <input type="password" id="password" class="form-control" placeholder="Enter your password" size="30">
                <br>
                <a href="{{ url('accountrecovery') }}" class="link">Forgot Password?</a>
            </div>
        <button class="button">Login</button>
        <br>
            <a href="{{ url('') }}" class="link">Back to Landing Page</a>
            <br>
            <p>Don't have an account? <a href="{{ url('userregistration') }}" class="link">Create one</a></p>
    </div>
            @yield('content')
        </main>
    </div>

    @livewireScripts 
</body>
</html>

@endsection
