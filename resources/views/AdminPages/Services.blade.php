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
        {{-- This section is to view the available services created --}}
    <h1>Services</h1>
     @foreach ($results as $result )
         <div>
           <ul> <li> <h3>{{$result->service_name}}</h3> </li> </ul>
           <h5>Price:{{ $result->service_price }}</h5>
           <p><h4>Description:</h4>{{$result->Description}}</p>
         </div>
         <div>
            <a href='services/editservice'>
            <button>Edit</button>
            </a>
         </div>
          <div>
            <a href='services/deleteservice'>@csrf
            <button>Delete</button>
            </a>
         </div>
     @endforeach 

        <br> <br>
           <a href='/serviceform'>
        <button>Create a service</button>
    </a>
    </section>
</body>
</html>
