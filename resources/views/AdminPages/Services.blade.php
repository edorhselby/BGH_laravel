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
         This section is to view the available services created 
    <h1>Services</h1>
     @foreach ($results as $result )
         <div>
           <ul> <li> <h3>{{$result->service_name}}</h3> </li> </ul>
           <h5>Price:{{ $result->service_price }}</h5>
           <p><h4>Description:</h4>{{$result->Description}}</p>
         </div>
         <div>
            <form action ="{{url( 'services/editservice/'. $result->id) }}" method='POST'>@csrf
                @method('PUT')
            <button>Edit</button>
            </form>
         </div>
          <div>
            <form action ="{{url( 'services/deleteservice/'. $result->id) }}" method='POST'>@csrf
                @method('DELETE')
            <button>Delete</button>
            </form>
         </div>
         <div>
           
     @endforeach  
      
        <br> <br>
           <a href='services/createService'>
        <button>Create a service</button>
    </a>
    </section>
    
    
</body>
</html> 



