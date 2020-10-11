<?php


namespace App\Repositories;


use App\Models\Publisher;

class PublisherRepository extends AppRepository
{
   public function __construct(Publisher $model)
   {
       parent::__construct($model);
   }
}
