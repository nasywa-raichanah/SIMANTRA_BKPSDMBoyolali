<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="{{ asset('css/loginadmin.css') }}">
</head>
<body>
    <div class="login-container">
        <h2>Login Admin</h2>
        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>

            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
