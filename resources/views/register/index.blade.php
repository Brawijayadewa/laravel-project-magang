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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>