<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\StarWarCharacter;



class StarWarController extends Controller
{

    public function showAllPeople(){
        $response = Http::get('https://swapi.dev/api/people');
        $charcters = $response->json()['results'];

        //Convert array to objects of type StarWarCharacter
        $characterModels = collect($charcters)->map(fn($element) => new StarWarCharacter($element));

        return view('starwars',[ 'characters' => $characterModels, 'searchHeight' => '']);
    }

    public function searchByHeight(Request $request)
    {
        $height = $request->input('height');

        $response = Http::get('https://swapi.dev/api/people');
        $charcters = $response->json()['results'];

        $filtered = collect($charcters)-> filter(function($element) use ($height){
            return $element['height'] === $height;
        })->values();
        
        $characterModels = $filtered->map(fn($element)=> new StarWarCharacter($element));
        
        return view('starwars', [$charcters => $characterModels, 'searchHeight' => $height]);
    }
    
}
