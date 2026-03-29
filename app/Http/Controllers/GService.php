<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class GService
{
    //
    function showServices(){
        // $results = Service::all();
        return view("General.Services");
    }
}
