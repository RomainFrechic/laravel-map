<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Map;

class MapController extends Controller
{
    public function getIndex(){
    	$Map = \App\Map::all();
    	return view('Map.index',['map' = $Map]);
    }
}
