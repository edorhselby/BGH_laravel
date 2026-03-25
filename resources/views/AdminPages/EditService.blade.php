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
        <div>
            <h1>Edit Service</h1>
     <form action='{{url("services/saveedit/{$result->id}")}}' method='POST'>@csrf
        @method('PUT')
                 <label>Service Name</label>
                    <input type=text name='name' value='{{$result->service_name}}'>
    <label>Service Price</label>
    <input type=number name='price' value='{{$result->service_price}}'>
    <label>Service Description</label>
    <input type=textarea name='desc' value='{{$result->Description}}'>                

<br>
    <button>Submit</button>
</form>
</div>
</section>
</body>
</html>
