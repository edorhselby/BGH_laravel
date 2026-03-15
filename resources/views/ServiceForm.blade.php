<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/home.css">
    @vite('resources/css/home.css')
</head>
<body>
    <section>
        <form action ='/services' method='POST'>@csrf
    <h1>Create a Service</h1>
    <label>Service Name</label>
    <input type=text name='name'>
    <label>Service Price</label>
    <input type=number name='price'>
    <label>Service Description</label>
    <input type=textarea name='desc'>
    <button>Submit</button>
        </form>
    </section>
</body>
</html>
