<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>