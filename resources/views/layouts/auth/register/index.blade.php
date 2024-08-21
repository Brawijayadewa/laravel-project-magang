@extends('layouts.layout')

@section('title')
    Register
@endsection

@section('content')
    <div class="shadow-lg container border rounded-3 p-3 mt-5" style="max-width: 500px; width: 100%">
        <div class="text-center mb-3">
            <span class="text-white fw-bold fs-3">Register</span>
            <h3>Register</h3>
            </div>
                <div class="mb-2">
                <label for="fullname" class="form-label">Fullname</label><br>
                <input type="text" class="form-control" id="fullname" name="fullname">
            </div>
            <div class="mb-2">
                <label for="email" class="form-label">Email</label><br>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="mb-2">
                <label for="username-register" class="form-label">Username</label><br>
                <input type="text" class="form-control" id="username-register" name="username-register">
            </div>
            <div class="mb-2">
                <label for="password-register" class="form-label">Password</label><br>
                <input type="password" class="form-control" id="password-register" name="password-register">
            </div>
            <div class="mb-2">
                <label for="repeat-password" class="form-label">Repeat-password</label><br>
                <input type="password" class="form-control" id="repeat-password" name="repeat-password">
            </div>
            <button type="submit" class="btn btn-primary w-100 mb-3">Register</button>   
            <span>Punya Akun?</span>
            <a href="/login">Login</a>
        </div>
    </div>
@endsection