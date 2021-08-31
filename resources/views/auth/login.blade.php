<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="box">
        
        <h1>Login</h1>
        
        @if(session()->has('error'))
            <div class="validation-error">
              {{ session('error') }}
            </div> 
        @endif
        <form action="/login" method="post">
            @csrf
            <div class="inputcontainer">
            <input type="email" name="email" id="" placeholder="Email" required value="{{ old('email') }}">

            <input type="password" name="password" id="" placeholder="Password" minlength="5" maxlength="10" required>
        </div>

        <button type="submit">LOGIN</button>
        <p>Don't have an account? <a href="/register">Sign Up!</a></p>
        </form>
    </div>
</body>
</html>