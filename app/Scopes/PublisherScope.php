<?php


namespace App\Scopes;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class PublisherScope implements Scope
{

     public function apply(Builder $builder, Model $model)
     {
         // TODO: Implement apply() method.
         $builder->has('mangas');
        // $model->roles()->whereBetween('role_id',[1,3]);

     }
}
