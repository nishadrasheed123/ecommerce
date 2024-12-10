<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <form action="{{ route('admin.doLogin') }}" method="POST">
        @csrf <!-- CSRF token for security -->
        <div class="logo">
            <img src="{{ asset('uploads/logo1.png') }}" alt="Screenshot">
        </div>
        <div class="text-center mt-4 name">
            REDBERRY
        </div>
        <div class="p-3 mt-3">
            <!-- Username Input -->
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="username" id="userName" placeholder="Username" required>
            </div>
            <!-- Password Input -->
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password" required>
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn mt-3">Login</button>
        </div>
    </form>
</div>

        <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="#">Sign up</a>
        </div>
    </div>
</body>
</html>