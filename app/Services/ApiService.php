<?php


namespace App\Services;


use App\Repositories\AppRepository;
use Illuminate\Database\Eloquent\Model;

class ApiService
{
    protected $repository;
    protected $model;
    public function __construct(AppRepository $repository)
    {
        $this->repository=$repository;
        $this->model=$this->repository->model;
    }
    public function getCollection(){
        return $this->repository->model->all();
    }
    public function getRelations($collections,$property){
        return $this->repository->getRelations($collections,$property);

    }
    public function getRelationInstance($instance,$property){
        return $this->repository->getRelationsIntance($instance,$property);
    }


    public function showAll(){
        return $this->repository->showAll();
    }
    public function showOne($instance){
        return $this->repository->showOne($instance);
    }
    public function deleteOne($instance){
        return $this->repository->deleteOne($instance);
    }
    public function updateOne($instance, $request){
        return $this->repository->updateOne($instance,$request);
    }
    public function store($request){
        return $this->repository->store($request);
    }

}
