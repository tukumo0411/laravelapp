<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class HelloController extends Controller
{
  
   public function index()
   {
      return view('hello.index', ['message'=>'Hello!']);
   }
   

}
