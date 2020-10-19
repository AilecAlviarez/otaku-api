<?php


namespace App\Services;


use App\Repositories\MangaRepository;
use App\Services\ApiService;

class MangaService extends ApiService
{

    public function __construct(MangaRepository $repository)
    {
        parent::__construct($repository);
    }
    /*public function removeComment($id){
        $manga=$this->repository->findById($id);
        $this->repository->updateInstance($manga,'comment_id',null);
    }
    public function removePublisher($model){
        $this->repository->updateInstance($model,'publisher_id',null);
    }*/
}
