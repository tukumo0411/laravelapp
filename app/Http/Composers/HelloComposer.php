<?php
namespace App\Http\Composers;

use Illuminate\View\View;

class HelloComposer
{
  
    public function boot()
    {
       View::composer(
           'hello.index', 'App\Http\Composers\HelloComposer'
       );
    }
}