<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">

    <link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">  
</head>
<body>
   <div class="container"> 
    <div class="box">
        <span>Create New Account</span>

        
        <form action="{{ route('prosesregister') }}" method="post">
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
            <input type="text" name="" id="" placeholder="Username" required>
            <input type="email" name="" id="" placeholder="Email" required>
            <input type="password" name="" id="" placeholder="Password" required>
        </div>
        <button type="submit">SIGN UP</button>
        <p>Have an Account? <a href="{{ route('viewlogin') }}">Login Here!</a></p>
        </form>

</div>
</body>
</html>