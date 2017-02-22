<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Simploniens;
class SimploniensController extends Controller
{
   public function getVue(){
    	return view('vue');
    }
}
