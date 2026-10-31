<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{asset('assets/img/favicon.png')}}" type="image/png">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f5f5f5;
        }
        .login-card {
            max-width: 400px;
            width: 100%;
            padding: 30px;
            border-radius: 10px;
            background: #fff;
            box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="login-card">
        <h3 class="text-center mb-4">Sign in</h3>
        <form method="POST" action="{{ route('login.success') }}">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input 
                    type="text" 
                    id="username" 
                    name="username" 
                    class="form-control" 
                    value="" 
                    required 
                    autofocus>
            </div>
            
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    class="form-control" 
                    value="" 
                    required>
            </div>
            
            <button type="submit" class="btn btn-primary w-100">SIGN IN</button>
        </form>
    </div>
</body>
</html>
