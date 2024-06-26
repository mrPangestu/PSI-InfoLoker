<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/regis.css">
    <title>LOGIN</title>
</head>
<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form action="{{ route('user.reg') }}" method="POST">
                @csrf
                <label for="chk" aria-hidden="true">Sign Up</label>
                <input type="text" name="buat_name" placeholder="User name" required="">
                <input type="email" name="buat_email" placeholder="Email" required="">
                <input type="password" name="buat_password" placeholder="Password" required="">
                <button type="submit" value="simpan">Sign up</button>
            </form>
        </div>
        <div class="login">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="password" placeholder="Password" required="">
                <button type="submit" value="simpan">login</button>
            </form>
        </div>
    </div>
</body>
</html>
