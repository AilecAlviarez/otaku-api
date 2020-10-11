<?php


namespace App\Repositories;


use App\Models\Publisher;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PublisherRepository extends AppRepository
{
 public function __construct(Publisher $model)
 {
     parent::__construct($model);
 }


}
