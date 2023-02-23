<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body>
    <h1>Registro de Usuario</h1>
    <form action="{{route('login.store')}}" method="POST">
        @csrf
        <label>
            <input name="name" type="Name" placeholder="Full name..">
        </label><br>
        </label>
            <input name="email" type="Email" placeholder="Email..">
        </label><br>
        </label>
            <input name="phone number" type="phone" placeholder="Phone Number..">
        </label><br>
        </label>
            <input name="description" type="description" placeholder="Description..">
        </label><br>
        </label>
            <input name="password" type="Password" placeholder="Password..">
        </label><br>
        <br>
        <button type="submit">Create User</button>
        <button type="submit">Return</button>
</body>
</html>
