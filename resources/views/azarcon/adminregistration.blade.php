@extends('layout')

@section('title', 'Admin Registration')

@section('content')
<div class="container text-center mb-8">
    <img src="{{ url('/Images/CELCOR.png') }}" alt="logo" width="385" class="mx-auto mb-4"/>
    <h1 class="text-3xl font-bold">Vehicle Management System</h1>
    <h2 class="mt-4 text-2xl">Admin Registration</h2>
    <hr class="border-gray-300 my-4">
</div>

<div class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full max-w-lg">
        <main class="py-4">
        <form action="{{ route('admin.registration') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="employeenumber" class="block text-gray-700 text-sm font-bold mb-2">Employee Number</label>
                    <input type="text" id="employeenumber" name="employeenumber" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('employeenumber') }}" placeholder="Employee Number">
                    @error('employeenumber')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="firstname" class="block text-gray-700 text-sm font-bold mb-2">First Name</label>
                    <input type="text" id="firstname" name="firstname" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('firstname') }}" placeholder="First Name">
                    @error('firstname')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="lastname" class="block text-gray-700 text-sm font-bold mb-2">Last Name</label>
                    <input type="text" id="lastname" name="lastname" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('lastname') }}" placeholder="Last Name">
                    @error('lastname')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="emailaddress" class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                    <input type="email" id="emailaddress" name="emailaddress" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('emailaddress') }}" placeholder="Email Address">
                    @error('emailaddress')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="contactnumber" class="block text-gray-700 text-sm font-bold mb-2">Contact Number</label>
                    <input type="text" id="contactnumber" name="contactnumber" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('contactnumber') }}" placeholder="Contact Number">
                    @error('contactnumber')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="Password">
                    @error('password')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="Confirm Password">
                </div>
                <button type="submit" class="bg-blue-700 text-white py-2 px-4 rounded hover:bg-blue-500 focus:outline-none focus:shadow-outline w-full text-center">Register</button>
                <p class="mt-4 text-sm">Already have an account? <a href="{{ route('admin.login.form') }}" class="text-blue-500 hover:text-blue-700">Login here</a></p>
            </form>
        </main>
    </div>
</div>
@endsection
