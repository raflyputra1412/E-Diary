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

        
        <form action="">
        <div class="inputcontainer">
            <input type="text" name="" id="" placeholder="Username">
            <input type="password" name="" id="" placeholder="Password">
        </div>

        <button type="submit">LOGIN</button>
        <p>Don't have an account? <a href="{{ route('viewregister') }}">Sign Up!</a></p>
        </form>
</body>
</html>