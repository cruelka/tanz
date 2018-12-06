<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Activation new user account</title>
</head>
<body>
<h1>Thanks for register on tanzaniansabroad.com, {{$user->name}}!</h1>

<p>
    Please follow <a href='{{ url("register/confirm/{$user->token}") }}'>the link </a>.
</p>
</body>
</html>