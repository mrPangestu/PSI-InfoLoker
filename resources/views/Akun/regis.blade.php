<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="regis.css">
    <title>LOGIN</title>
</head>
<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form>
                <label for="chk" aria-hidden="true">Sign Up</label>
                <input type="text" name="txt" placeholder="User name" required="">
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="pswd" placeholder="Password" required="">
                <button>Sign up</button>
            </form>
        </div>
        <div class="login">
            <form>
                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="pswd" placeholder="Password" required="">
                <button>Sign up</button>
            </form>
        </div>
    </div>
</body>
</html>