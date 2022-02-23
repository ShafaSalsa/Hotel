<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" type="text/css" href="assets/login/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="UTF-8"></script>
</head>
<body>
    <form action="" class="login-form" method="post">
        <h1>Login</h1>
        <div class="txtb">
            <input type="text" name="username" required autofocus autocomplete=off>
            <span data-placeholder="Username"></span>
        </div>
        <div class="txtb">
            <input type="password" name="password" required>
            <span data-placeholder="Password"></span>
        </div>
        <input type="submit" class="logbtn" value="Login" name="login">
        <div class="bottom-text">Belum Daftar?
            <a href="/registrasi">Daftar Sekarang</a>
        </div>
         
    </form>
    </body>
</html>