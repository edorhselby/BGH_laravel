<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup-page</title>
</head>
<body>         
    <form action="/signup/register" method="POST"> @csrf
        <label>Username</label>
        <input type="text" name="name" id="username">
        <label>Password</label>
        <input type="password" name="password" id="password">
        <label>Email</label>
        <input type="email" name="email" id="email">
        <button type="submit">Submit</button>
    </form>
     @if($errors->all())
    <div class ="alert alert-danger">
     <ul>
        @foreach ($errors->all() as $error )
            <li>{{ $error }} </li> 
            @endforeach
        </ul>
    </div>
        @endif
</body>
</html>