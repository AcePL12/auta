<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    Public function getallPost(){
        $response = Http::get('https://vpic.nhtsa.dot.gov/api/vehicles/getallmanufacturers?format=json&page=2');
        return $response->json();
    }

    public function getPostById($id){
        $post = Http::get('https://vpic.nhtsa.dot.gov/api/vehicles/getallmanufacturers?format=json&page=2'. $id);
        return $post->json();
    }
    
        
    
}