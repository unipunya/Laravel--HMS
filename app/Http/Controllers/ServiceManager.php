<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Models\Book;
use Illuminate\Http\Request;

class ServiceManager extends Controller
{
    function index()
    {
        $services= Services::all();
        return view('services',compact(var_name:'services'));
    }

    function details($slug)
    {
        $service = Services::where('slug',$slug)->first();
        return view('details',compact('service'));
    }

    public function booking()
    {
        return view('booking'); // Name of the blade file
    }

    
}
