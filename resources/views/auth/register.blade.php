<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
   <div class="container"> 
    <div class="box">
        <h1>Create New Account</h1>

        <form action="/register" method="post">
        @csrf 
        @if (session('errors'))
     
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="inputcontainer">
            <input type="text" name="username" id="" placeholder="Username" required>
            <input type="email" name="email" id="" placeholder="Email" required>
            <input type="password" name="password" id="" placeholder="Password" required>
        </div>
        <button type="submit">SIGN UP</button>
        <p>Have an Account? <a href="{{ route('viewlogin') }}">Login Here!</a></p>
        </form>

</div>
</body>
</html>