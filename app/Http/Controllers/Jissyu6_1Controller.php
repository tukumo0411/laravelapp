<?php

namespace App\Http\Controllers;

use App\Person;
use Faker\Provider\ar_EG\Person as Ar_EGPerson;
use Illuminate\Http\Request;

class Jissyu6_1Controller extends Controller
{
    public function index(Request $request)
    {
        $items = Person::all();
        $param = ['input' => '', 'items' => $items];
        return view('jissyu6_1.index', $param);
    }
    public function find(Request $request)
    {
        $item = Person::find($request->input);
        return view('Jissyu6_1.show', ['item' => $item]);
    }
}
