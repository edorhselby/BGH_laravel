<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController
{
    //
    public function storeService(Request $request)
    {

        $request->validate(
            ['name' => 'required|unique:services,service_name',
                'price' => 'required',
                'desc' => 'required',
            ]
        );

        Service::create([
            'service_name' => $request->input('name'),
            'service_price' => $request->input('price'),
            'Description' => $request->input('desc'),
        ]);

        return redirect('services');
    }
    
    public function editServices(){
         
    }

     public function deleteService($name){
        return 'I am about to delete'.$name;
    }


    public function showServices()
    {
       $results = Service::all();
       return view('AdminPages.Services',compact('results'));
    }
}
