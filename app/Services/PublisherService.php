<?php


namespace App\Services;



use App\Models\Publisher;
use App\Repositories\PublisherRepository;
use http\Env\Response;

class PublisherService extends ApiService
{

   public function __construct(PublisherRepository $repository)
   {
       parent::__construct($repository);
   }

}
