<?php


namespace App\Services;



use App\Repositories\PublisherRepository;

class PublisherService extends ApiService
{
   public function __construct(PublisherRepository $repository)
   {
       parent::__construct($repository);
   }
}
