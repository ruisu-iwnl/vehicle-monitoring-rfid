@extends('layout')

@section('title', 'adminregistration')

@section('content')

<div class="container text-center mb-8">
    <img src="{{ url('/Images/CELCOR.png') }}" alt="logo" width="385" class="mx-auto mb-4"/>
    <h1 class="text-3xl font-bold">Vehicle Management System</h1>
    <h2 class="mt-4 text-2xl">Admin Registration</h2>
    <hr class="border-gray-300 my-4">
</div>

<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full max-w-lg">
        <main class="py-4">
            <form>
                <div class="mb-4">
                    <label for="employee-id" class="block text-gray-700 text-sm font-bold mb-2">Employee ID</label>
                    <input type="text" id="employee-id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Example: Admin1234">
                </div>
                <div class="mb-4">
                    <label for="first-name" class="block text-gray-700 text-sm font-bold mb-2">First Name</label>
                    <input type="text" id="first-name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Example: Juan">
                </div>
                <div class="mb-4">
                    <label for="last-name" class="block text-gray-700 text-sm font-bold mb-2">Last Name</label>
                    <input type="text" id="last-name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Example: Dela Cruz">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                    <input type="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Example: Juandelacruz@gmail.com">
                </div>
                <div class="mb-4">
                    <label for="confirm-email" class="block text-gray-700 text-sm font-bold mb-2">Confirm Email</label>
                    <input type="email" id="confirm-email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Confirm Email Address">
                </div>
                <div class="mb-4">
                    <label for="contact-number" class="block text-gray-700 text-sm font-bold mb-2">Contact Number</label>
                    <input type="tel" id="contact-number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="09XXXXXXXXX">
                </div>
                <div class="mb-4">
                    <label for="confirm-contact-number" class="block text-gray-700 text-sm font-bold mb-2">Confirm Contact Number</label>
                    <input type="tel" id="confirm-contact-number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Confirm Contact Number">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter Password">
                </div>
                <div class="mb-4">
                    <label for="confirm-password" class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
                    <input type="password" id="confirm-password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Confirm Password">
                </div>
                <div class="mb-4 flex items-center">
                    <input type="checkbox" id="togglePasswordCheckbox" class="mr-2" onchange="togglePasswordVisibility()">
                    <label for="togglePasswordCheckbox" class="text-gray-700 text-sm">Show Password</label>
                </div>
                <ul class="mb-4 text-sm list-disc list-inside text-gray-700">
                    <li>At least 8 characters long</li>
                    <li>Contains at least one digit</li>
                    <li>Contains at least one uppercase/lowercase letter</li>
                    <li>Contains at least one special character</li>
                </ul>
                <!-- Captcha Code here -->
                <div class="mb-4">
                    <a href="{{ url('adminlogin') }}" class="bg-blue-700 text-white py-2 px-4 rounded hover:bg-blue-500 focus:outline-none focus:shadow-outline w-full text-center block">Register</a>
                </div>
                <div class="text-center">
                    <a href="{{ url('') }}" class="text-blue-500 hover:text-blue-700 text-sm block">Back to Landing Page</a>
                    <p class="mt-4 text-sm">Already have an account? <a href="{{ url('adminlogin') }}" class="text-blue-500 hover:text-blue-700">Login</a></p>
                </div>
            </form>
        </main>
    </div>
    @livewireScripts 
</body>
@endsection

<script>
function togglePasswordVisibility() {
    var passwordField = document.getElementById('password');
    var confirmPasswordField = document.getElementById('confirm-password');
    var checkbox = document.getElementById('togglePasswordCheckbox');
    if (checkbox.checked) {
        passwordField.type = 'text';
        confirmPasswordField.type = 'text';
    } else {
        passwordField.type = 'password';
        confirmPasswordField.type = 'password';
    }
}
</script>
