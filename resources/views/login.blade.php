<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
<style>
    .login-container {
        max-width: 400px;
        margin: 50px auto;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        background-color: #D9D9D9;
    }
    .form-control {
        margin-bottom: 1rem;
    }
    .btn-login {
        width: 100%;
        padding: 0.5rem;
        font-size: 1.1rem;
    }
</style>
</head>
<body>

<div class="container">
    <div class="login-container">
        <h2 class="text-center mb-4">Login</h2>
        <form action="{{ route('loginAuth') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input class="form-control" id="username" name="username" placeholder="you@example.com">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter 6 character or more">
            </div>
            <button type="submit" class="btn btn-primary btn-login">LOGIN</button>
        </form>
    </div>
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
