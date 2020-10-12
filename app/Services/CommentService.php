<?php


namespace App\Services;


use App\Repositories\AppRepository;
use App\Repositories\CommentRepository;

class CommentService extends ApiService
{
   public function __construct(CommentRepository $repository)
   {
       parent::__construct($repository);
   }
}
