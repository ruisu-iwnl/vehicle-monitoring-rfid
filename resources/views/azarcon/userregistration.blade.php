@extends('layout')

@section('title', 'Landing')

@section('content')

<div class="container">
        <img src="{{url('/Images/Celcor Logo.jpg')}}" alt="logo" class="img-size-50 mr-3 img-circle"/>
        <h1 class="text-3xl font-bold text-center">Vehicle Management System</h1>
        <br>
        <h2 class="text-center">User Registration</h2>
        <p class="text-center">------------------------------------------------------------</p>
        </div>

    <body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <main class="py-4 text-left">


<form>
    <div class="form-group" >
    <label class="label" for="employee-number">Employee Number</label>
    <input type="text" id="employee-number" class="form-control" placeholder="Example: Emp123456" size="35">
    <br>
    <label class="label" for="first-name">First Name</label>
    <input type="text" id="first-name" class="form-control" placeholder="Example: Juan" size="15">
    <label class="label" for="last-name">Last Name</label>
    <input type="text" id="last-name" class="form-control" placeholder="Example: Dela Cruz" size="15">
    <br>
    <label class="label" for="email">Email Address</label>
    <input type="email" id="email" class="form-control" placeholder="Email Address" size="35">
    <br>
    <label class="label" for="confirm-email">Confirm Email</label>
    <input type="email" id="confirm-email" class="form-control" placeholder="Example: Juandelacruz@gmail.com" size="35">
    <br>
    <label class="label" for="contact-number">Contact Number</label>
    <input type="tel" id="contact-number" class="form-control" placeholder="09XXXXXXXXX" size="35">
    <br>
    <label class="label" for="password">Password</label>
    <input type="password" id="email" class="form-control" placeholder="Enter Password" size="15">
    <label class="label" for="confirm-password">Confirm Password</label>
    <input type="password" id="email" class="form-control" placeholder="Confirm Password" size="15">
    <br>
</div>

<!-- Toggle Password Checkbox !-->
<div class="form-check">
        <input class="form-check-input" type="checkbox" id="togglePasswordCheckbox" onchange="togglePasswordVisibility()">
             <label class="form-check-label" for="togglePasswordCheckbox">Show Password</label>
        </div>
    <br>
    
    <ul>
            <li>At least 8 characters long</li>
            <li>Contains at least one digit</li>
            <li>Contains at least one uppercase/lowercase letter</li>
            <li>Contains at least one special character</li>
        </ul>

<!--


        Captcha Code dito!
        

        -->

                        <br>
                        <button type="button" id="submitButton" class="btn btn-primary btn-block" style="display: block; margin: auto;">Register</button>
    </form>

    <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="text-center mt-3">
                                    <legend class="border-bottom mb-4" style="display: block; margin: auto;"></legend>
                                    <p>Already have an account? <a href="{{ url('userlogin') }}">Login</a></p>
                                </div>
                            </div>
                    </div>

          @yield('content')
        </main>
    </div>


    @livewireScripts 
</body>
</html>

@endsection