<?php
namespace App\Http\Composers;

use Illuminate\View\View;

class HelloComposer
{
  
    public function index(Request $request)
    {
       $items = DB::table('people')->get();
       return view('hello.index', ['items' => $items]);
    }
}