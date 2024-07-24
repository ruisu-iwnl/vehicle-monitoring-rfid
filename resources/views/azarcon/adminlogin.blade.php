@extends('layout')

@section('title', 'adminlogin')

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
        <h1>Admin Login</h1>
        <p>--------------------------------------------------</p>
        <br>
        <form>
        <div class="form-group">
        <label class="label" for="employee-id">Email</label>
                <input type="email" placeholder="Example: Juandelacruz@gmail.com">
            </div>
            <div class="form-group">
            <label class="label" for="employee-id">Password</label>
                <input type="password" placeholder="Enter your password">
            </div>
            <a href="{{ url('accountrecovery') }}" class="link">Forgot Password?</a>
            <br>
            <br>
            <a href="{{ url('dashboard') }}" class="button">Login</a>
            <br>
            <br>
        <a href="{{ url('') }}" class="link">Back to Landing Page</a>
        <p>Don't have an account? <a href="{{ url('adminregistration') }}" class="link">Create one</a></p>
        </form>
    </div>
            @yield('content')
        </main>
    </div>

    @livewireScripts 
</body>
</html>

@endsection
