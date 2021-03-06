<?php


namespace App\Services;


use App\Repositories\AppRepository;
use App\Repositories\UserRepository;

class UserService extends ApiService
{

public function __construct(UserRepository $repository)
{
    parent::__construct($repository);
}
public function store($request)
{
   // return parent::store($request); // TODO: Change the autogenerated stub
    $user=$this->repository->model->create($request->except('roles'));
   $dataRoles=$request->roles;


    $user->roles()->attach($dataRoles);
    return $this->responseSuccesfully($user,201);

}
private function getRoles($roles){
    $rolesData=[];
    foreach ($roles as $value){
        $rolesData['role_id']=$value;
    }
    return $rolesData;
}
}
