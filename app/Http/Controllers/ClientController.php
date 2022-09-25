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
    
        function index(){
            $collection = Http::get("https://vpic.nhtsa.dot.gov/api/vehicles/getallmanufacturers?format=json&page=2");
            return view('manufacturers',['collection'=>$collection['Results']]);
        }
    
        function options(){
            $collection = Http::get("https://vpic.nhtsa.dot.gov/api/vehicles/getallmanufacturers?format=json&page=2");

            $countries = array_unique(array_column($collection['Results'], 'Country'));
            $Mfr_CommonName = array_unique(array_column($collection['Results'], 'Mfr_CommonName'));
            $Mfr_Name = array_unique(array_column($collection['Results'], 'Mfr_Name'));
            $Mfr_ID = array_unique(array_column($collection['Results'], 'Mfr_ID'));

            

            return view('vehicles',['collection'=>$collection['Results'], 'countries'=>$countries, 'Mfr_CommonName'=>$Mfr_CommonName, 'Mfr_Name'=>$Mfr_Name, 'Mfr_ID'=>$Mfr_ID]);
        }
    
}
