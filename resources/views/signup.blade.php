<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup-page</title>
</head>
<body>
    <form action="/signup" method="POST"> @csrf
        <label>Username</label>
        <input type="text" name="username" id="username">
        <label>Password</label>
        <input type="password" name="password" id="password">
        <label>Email</label>
        <input type="email" name="email" id="email">
        <button>Submit</button>
    </form>
</body>
</html>