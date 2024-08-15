@extends('layouts.layout')

@section('title')
    Login
@endsection

@section('content')
    <div class="shadow-lg container border border-info border rounded-3 p-3 mt-5" style="max-width: 500px; width: 100%">
        <div class="text-center mb-3">
            <span class="text-white fw-bold fs-3">Login</span>
            <h3 class="fst-italic">Login</h3>
        </div>
        @if(session()->has('error'))
        <div class="alert-danger">
            {{session()->get('error')}}
        </div>
        @endif
        <form action="{{route('login.store')}}" method="POST">
            @csrf
            <div class="mb-2">
                <label for="username-login" class="from-label mb-2">Username</label><br>
                <input type="text" class="form-control" id="username" name="username" value="{{ old('username')}}">
            @error('username')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="mb-2">
                <label for="password-login" class="from-label mb-2">Password</label><br>
                <input type="password" class="form-control" id="password" name="password">
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror    
            </div>
            <button type="submit" class="btn btn-primary w-100 mb-3">Login</button>
        </form>
                <span>Sudah Punya Akun?</span>
                <a href="/register">Register</a>
            </div>
        </div>

    </div>
@endsection
