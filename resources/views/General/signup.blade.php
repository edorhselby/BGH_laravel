<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup-page</title>
      <link rel="stylesheet" href="../css/signup.css">
       @vite('resources/css/signup.css')
</head>
<body>         
    {{-- <form action="/signup/register" method="POST"> @csrf
        <label>Username</label>
        <input type="text" name="name" id="username">
        <label>Password</label>
        <input type="password" name="password" id="password">
        <label>Email</label>
        <input type="email" name="email" id="email">
        <button type="submit">Submit</button>
    </form> --}}
    <!-- From Uiverse.io by alexruix --> 
<div class="form-box">
<form class="form" action="/signup/register" method="POST">@csrf
    <span class="title">Sign up</span>
    <span class="subtitle">Create a free account with your email.</span>
    <div class="form-container">
      <input type="text" class="input" name='name' placeholder="Full Name">
			<input type="email" class="input" name='email' placeholder="Email">
			<input type="password" class="input" name='password' placeholder="Password">
    </div>
    <button>Sign up</button>
</form>
<div class="form-section">
  <p>Have an account? <a href="login">Log in</a> </p>
</div>
</div>
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