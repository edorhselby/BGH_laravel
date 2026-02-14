<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
   
    <h1>Login Here</h1>
    <form action="/login" method="POST">
        @csrf
        <label>Username</label>
        <input type="text" name="name" id='name'>
        <label>Password</label>
        <input type="password" name="password" id='password'>
        <button>Submit</button>
    </form>
     @if ($errors->all())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }} </li>
        @endforeach
    </ul>     
    @endif
</body>

</html>