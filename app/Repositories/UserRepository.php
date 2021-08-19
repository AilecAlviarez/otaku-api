<?php


namespace App\Repositories;


use App\Models\User;

class UserRepository extends AppRepository
{
  public function __construct(User $model)
  {
      parent::__construct($model);
  }
  public function method(){
      
  }
}
