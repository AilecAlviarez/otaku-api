<?php


namespace App\Services;


use App\Repositories\AppRepository;
use App\Repositories\ChapterRepository;

class ChapterService extends ApiService
{
public function __construct(ChapterRepository $repository)
{
    parent::__construct($repository);
}
public function removeComment($id){
     $chapter=$this->repository->findById($id);
     $this->repository->updateInstance($chapter,'comment_id',null);
}
}
