@extends('app')

@section('content')
    <p>AddressBook is a user-friendly and efficient web application designed to simplify contact management. With AddressBook, you can easily store, organize, and retrieve your contacts' information in one centralized location.</p>
    <div class="container-2">
        @auth
            <h2 class="welcome-title">Welcome, {{ Auth::user()->name }}</h2>
            <div class="welcome-section">
                <h3>Account Section</h3>
                <div class="account-actions">
                    <a class="btn btn-primary" href="{{ route('password') }}">Change Password</a>
                    <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
                </div>
            </div>

            <div class="address-section">
                <h3 class="address-title">Address Section</h3>
                <div class="address-actions">
                    <a class="btn btn-primary" href="{{ route('AddAddress') }}">Add an Address</a>
                    <a class="btn btn-primary" href="{{ route('AllAddresses') }}">View All Addresses</a>
                    <a class="btn btn-primary" href="{{ route('SearchAddress') }}">Search addrerss</a>

                </div>
            </div>
        @endauth

        @guest
        
        <div class="auth-actions" style="text-align: center;">
    <div>
        <p>If you have an account, login</p>
        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
    </div>
    <div>
        <p>If you don't have an account, register here</p>
        <a class="btn btn-info" href="{{ route('register') }}">Register</a>
    </div>
</div>

        @endguest
    </div>
@endsection

<style>
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 40px;
        background-color: #bb99d5; /* Added background color */
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-top: 50px !important;
    }
    .container-2 {
        max-width: 600px;
        margin: 0 auto;
        padding: 40px;
        background-color: #fff; /* Added background color */
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }


    .welcome-title,
    .address-title {
        text-align: left;
        color: #333;
    }

    .btn {
        display: inline-block;
        padding: 10px 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-decoration: none;
        font-weight: bold;
        text-align: center;
        white-space: nowrap;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
    }

    .btn-danger {
        background-color: #dc3545;
        color: #fff;
    }

    .btn-info {
        background-color: #17a2b8;
        color: #fff;
    }

    .address-actions,
    .account-actions {
        text-align: left;
    }

    .welcome-section,
    .address-section,
    .auth-actions {
        margin-bottom: 20px;
        margin-top: 20px;
    }
</style>
