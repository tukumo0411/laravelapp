<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class HelloController extends Controller
{
  
   public function index(Request $request)
   {
      return view('hello.index', ['data'=>$request->data]);
   }
   

}
