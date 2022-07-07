<?php
namespace App\Scopes;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Scopes\ScopePerson;

class ScopePerson implements Scope
{
   public function apply(Builder $builder, Model $model)
   {
       $builder->where('age', '>', 20);
   }
   
   protected static function boot()
   {
      parent::boot();
      static::addGlobalScope(new ScopePerson);
   }
   
}