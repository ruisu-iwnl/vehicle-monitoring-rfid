@extends('layout')

@section('title', 'adminlogin')

@section('content')

    <body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <main class="py-4 text-center">

    <style>
        .button {
            background-color: #009900;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #88d08e;
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
        <h1>Account Recovery</h1>
        <p>--------------------------------------------------</p>
        <label class="label" for="email">Email Address</label>
        <input type="email" id="email" placeholder="Example: Juandelacruz@gmail.com" size="15">
        <br>
        <br>
        <a href="{{ url('') }}" class="button">Send Recovery Email</a>
        <br>
        </div>

@yield('content')
        </main>
    </div>

    @livewireScripts 
</body>
</html>

@endsection