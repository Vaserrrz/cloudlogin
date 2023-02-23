<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    @include('partial.nav')
    <h1>Inicio de Sesion</h1>
    <form action="" method="POST">
        @csrf
        <label>
            <input name="email" type="email" placeholder="Email..">
        </label><br>
        </label>
            <input name="password" type="Password" placeholder="Password..">
        </label><br>
        <br>
        <button type="submit">Login</button>
</body>
</html>
