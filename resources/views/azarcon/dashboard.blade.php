@extends('layout')

@section('title', 'dashboard')

@section('content')
    <h1 class="text-3xl font-bold underline">
        Dashboard
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

<div class="container-fluid">
        <div class="row">
                <div class="sidebar-header">
                <img src="{{url('/Images/CELCOR.png')}}" alt="logo" width="385"/>
                    <a>Vehicle Management System</a>
                </div>
                <ul>

                        <a class="link @if(Request::is('registeredusers')) active @endif" href="{{ url('') }}">
                            <i class="fas fa-users"></i> Registered Users
                        </a>
                    </li>

                    <li>
                        <a class="link @if(Request::is('admin/logs')) active @endif" href="{{ url('') }}">
                            <i class="fas fa-list"></i> Activity Logs
                        </a>
                    </li>
                    <li>
                        <a class="link" href="{{ url('') }}">
                            <i class="fas fa-list"></i> Logout
                        </a>
                    </li>
                </ul>
        </div>
    </div>


@yield('content')
        </main>
    </div>

@livewireScripts 
</body>
</html>

@endsection