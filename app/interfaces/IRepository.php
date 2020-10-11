<?php


namespace App\interfaces;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface IRepository
{
   public function showAll();
   public function showOne(Model $instance);
   public function updateOne(Model $model,Request $request);
   public function deleteOne(Model $model);
   public function store(Request $request);
}
