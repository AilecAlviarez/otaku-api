<?php


namespace App\Repositories;


use App\interfaces\IRepository;
use App\Traits\ApiResponser;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AppRepository implements IRepository
{
    use ApiResponser;
    public $model;
  public function __construct($model)
  {
        $this->model=$model;
  }
  public function deleteOne(Model $model)
  {
        $model->delete();
        return $this->responseSuccesfully($model,200);
  }
 public function deleteById($id){
      $this->model->delete($id);

 }
 public function updateInstance($instance,$key,$value){
      $instance->update([$key=>$value]);
 }
 public function findById($id){
  return $this->model->findOrFail($id);
 }
  public function showOne(Model $instance)
  {
      // TODO: Implement showOne() method.
      return $this->responseInstance($instance);

  }
  public function showAll()
  {
      // TODO: Implement showAll() method.
      $collection=$this->model->all();
      return $this->responseSuccesfully($collection);
  }
  public function store($request)
  {
      // TODO: Implement store() method.
      $store=$this->model->create($request->all());
      return $this->responseSuccesfully($store);

  }
  public function updateOne(Model $instance,  $request)
  {
      // TODO: Implement updateOne() method.
      $instance->update($request->all());

      return $this->responseSuccesfully($instance);
  }
}
