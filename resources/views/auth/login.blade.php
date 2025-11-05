@extends('layouts.app')

@section('title', 'Login')

@section('styles')
<style>
    body {
        background-color: #f5f5f5;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        margin: 0;
        padding: 0;
    }
    .login-container {
        width: 100%;
        max-width: 650px;
        background: white;
        padding: 40px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .login-title {
        font-size: 24px;
        font-weight: 600;
        text-align: center;
        margin-bottom: 40px;
        padding-bottom: 10px;
        border-bottom: 3px solid #000;
        display: inline-block;
        width: 100%;
    }
    .form-label {
        font-weight: 500;
        color: #333;
    }
    .form-control {
        border: 1px solid #000;
        height: 50px;
    }
    .btn-login {
        width: 100%;
        height: 55px;
        background: #000;
        color: white;
        border: none;
        font-weight: 600;
        margin-top: 20px;
    }
    .btn-login:hover {
        background: #333;
    }
    .account-links {
        text-align: center;
        margin-top: 20px;
        color: #666;
    }
    .account-links a {
        color: #000;
        text-decoration: underline;
        margin: 0 5px;
    }
</style>
@endsection

@section('content')
<div class="login-container">
    <div class="text-center">
        <h1 class="login-title">LOGIN</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="/login">
        @csrf
        
        <div class="mb-4">
            <label class="form-label">Email address *</label>
            <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
        </div>

        <div class="mb-4">
            <label class="form-label">Password *</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-login">LOG IN</button>

        <div class="account-links">
            No account yet? <a href="#">Create Account</a> | <a href="#">My Account</a>
        </div>
    </form>
</div>
@endsection