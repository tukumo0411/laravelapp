<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class HelloController extends Controller
{
  
   public function index()
   {
       $data = [
           'msg'=>'お名前を入力下さい。',
       ];
       return view('hello.index', $data);
   }

   public function post(Request $request)
   {
       $msg = $request->msg;
       $data = [
           'msg'=>'こんにちは、' . $msg . 'さん！',
       ];
       return view('hello.index', $data);
   }

}
